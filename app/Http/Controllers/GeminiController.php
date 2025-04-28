<?php

namespace App\Http\Controllers;

use App\Models\Nation;
use App\Services\GeminiService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class GeminiController extends Controller
{
    protected $geminiService;

    public function __construct(GeminiService $geminiService)
    {
        $this->geminiService = $geminiService;
    }

    public function chat(Request $request)
    {
        $validated = $request->validate([
            'nation_id' => 'required|exists:nations,id',
            'message' => 'required|string|max:1000',
            'temperature' => 'sometimes|numeric|between:0,1'
        ]);

        try {
            $nation = Nation::findOrFail($validated['nation_id']);

            $prompt = $this->createCulturalPrompt($nation, $validated['message']);
            $temperature = $validated['temperature'] ?? 0.7;
            
            $response = $this->geminiService->generateText($prompt, $temperature);
            
            if (empty($response)) {
                throw new \RuntimeException("Empty response from Gemini API");
            }

            return response()->json([
                'response' => $response,
                'nation' => $nation->name
            ]);

        } catch (\Exception $e) {
            Log::error('Gemini API Error', [
                'message' => $e->getMessage(),
                'request' => $request->all(),
                'trace' => $e->getTraceAsString()
            ]);

            return response()->json([
                'error' => 'The service is temporarily unavailable',
                'details' => config('app.debug') ? $e->getMessage() : null
            ], 500);
        }
    }

    private function createCulturalPrompt($nation, $userMessage)
    {
        return sprintf(
            "You are a cultural representative of the nation %s. Respond based on the following:\n" .
            "- Traditions: %s\n" .
            "- Historical context\n" .
            "- Cultural characteristics\n" .
            "Use characteristic examples and expressions.\n\n" .
            "User's question: %s",
            $nation->name,
            $nation->cultural_features ?? 'rich heritage',
            $userMessage
        );
    }
}
