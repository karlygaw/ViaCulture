<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\Nation;
use Illuminate\Http\Request;

class NationAdminController extends Controller
{
    public function index()
    {
        return Nation::all();
    }

    public function store(Request $request)
    {
        $validator = Nation::validate($request->all());

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $nation = Nation::create($request->all());

        return response()->json($nation, 201);
    }

    public function show(Nation $nation)
    {
        return response()->json($nation);
    }

    public function update(Request $request, Nation $nation)
    {
        $validator = Nation::validate($request->all());

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $nation->update($request->all());

        return response()->json($nation);
    }

    public function destroy(Nation $nation)
    {
        $nation->delete();

        return response()->json(null, 204);
    }
}
