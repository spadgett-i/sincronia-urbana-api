<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Track;
use Illuminate\Http\Request;

class TrackController extends Controller
{
    // GET /api/tracks
    public function index()
    {
        return \response()->json(Track::all());
    }

    // GET /api/tracks/{id}
    public function show($id)
    {
        $track = Track::find($id);

        if (!$track) {
            return response()->json([
                'message' => 'Track no encontrado'
            ], 404);
        }

        return response()->json($track);
    }

    // POST /api/tracks
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'artist' => 'required|string|max:255',
            'genre' => 'required|string|max:100',
            'energy' => 'required|string|max:50',
            'cover' => 'required|string',
            'preview' => 'required|string'
        ]);

        $track = Track::create($validated);

        return response()->json([
            'message' => 'Track creado correctamente',
            'data' => $track
        ], 201);
    }

    // PUT /api/tracks/{id}
    public function update(Request $request, $id)
    {
        $track = Track::find($id);

        if (!$track) {
            return response()->json([
                'message' => 'Track no encontrado'
            ], 404);
        }

        $validated = $request->validate([
            'title' => 'sometimes|string|max:255',
            'artist' => 'sometimes|string|max:255',
            'genre' => 'sometimes|string|max:100',
            'energy' => 'sometimes|string|max:50',
            'cover' => 'sometimes|string',
            'preview' => 'sometimes|string'
        ]);

        $track->update($validated);

        return response()->json([
            'message' => 'Track actualizado',
            'data' => $track
        ]);
    }
}