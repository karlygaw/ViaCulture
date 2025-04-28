<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class GeminiService
{
    public function generateText(string $prompt, float $temperature = null): string
    {
        $config = config('gemini');
        
        $response = Http::timeout((int)$config['timeout'])
            ->retry(3, 500)
            ->post($config['endpoint'].'?key='.$config['api_key'], [
                'contents' => [
                    [
                        'parts' => [
                            ['text' => $prompt]
                        ]
                    ]
                ],
                'generationConfig' => [
                    'temperature' => $temperature ?? $config['default_temperature'],
                    'maxOutputTokens' => $config['max_tokens'],
                    'topP' => 0.9
                ]
            ]);

        $data = $response->json();

        if (!isset($data['candidates'][0]['content']['parts'][0]['text'])) {
            Log::error('Invalid Gemini Response', [
                'response' => $data,
                'status' => $response->status()
            ]);
            throw new \RuntimeException('Invalid response from Gemini API');
        }

        return $data['candidates'][0]['content']['parts'][0]['text'];
    }
}