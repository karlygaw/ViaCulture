<?php

namespace App\Http\Controllers;

use App\Models\Nation;
use Illuminate\Http\Request;

class NationController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('name')) {
            $name = $request->input('name');

            $nations = Nation::where('name', 'like', '%' . $name . '%')->get();
        } else {
            $nations = Nation::all();
        }

        return response()->json($nations);
    }

    public function show($id)
    {
        $nation = Nation::find($id);

        if (!$nation) {
            return response()->json(['message' => 'Нация не найдена'], 404);
        }

        return response()->json($nation);
    }
}
