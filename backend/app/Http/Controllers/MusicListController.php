<?php

namespace App\Http\Controllers;

use App\Models\MusicList;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class MusicListController extends Controller
{
    /**
     * Retorna una lista con todas las listas de música registradas
     */
    public function index()
    {
        $musicLists = MusicList::all();
        return response()->json($musicLists);
    }


    /**
     * Retorna una lista de música específica y sus canciones asociadas
     */
    public function show($id)
    {
        $musicList = MusicList::with('musics')->find($id);
        if(!$musicList) {
            return response()->json(['error' => 'Music list not found.'], 404);
        }
        return response()->json($musicList);

    }


    /**
     * Crea una nueva lista de música
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string'
        ]);

        $musicList = MusicList::create($request->all());
        return response()->json([
            'success' => true,
            'message' => 'Music list created successfully.',
            'data' => $musicList
        ], 201);
    }
}
