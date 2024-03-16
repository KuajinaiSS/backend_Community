<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Music;

class MusicController extends Controller
{
    public function store(Request $request)
    {
        $path = $request->file('song')->store('songs');

        $music = new Music;
        $music->title = $request->file('song')->getClientOriginalName();
        $music->file_path = $path;
        $music->music_list_id = $request->music_list_id;
        $music->save();

        return response()->json($music, 201);
    }

    public function songs()
    {
        $music = Music::all();
        if(!$music) {
            return response()->json(['error' => 'No songs found.'], 404);
        }
        return response()->json($music);
    }

    public function playSong($id)
    {
        $music = Music::find($id);

        if ($music) {
            return response()->file(storage_path("app/{$music->file_path}"));
        } else {
            return response()->json(['error' => 'File not found.'], 404);
        }
    }
}


