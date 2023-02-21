<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MusicController extends Controller
{
    public function index()
    {
        return view('Content.Music.media');
    }
    public function media($media)
    {
        $genres = Music::where('media', $media)->select(['genre', 'name', 'thumbnail', 'media'])->distinct()->get();
        return view('Content.Music.genre', ['genres' => $genres]);
    }
    public function genre($media, $genre)
    {
        $musics = Music::where('media', $media)->where('genre', $genre)->paginate(15);
        return view('Content.Music.list', ['musics' => $musics]);
    }

    // admin routes
    public function music_list(Request $request)
    {
        $musics = Music::all();
        return view('admin.contents.music.list', ['musics' => $musics]);
    }
    public function music_create()
    {
        return view('admin.contents.music.create');
    }
    public function music_save(Request $request)
    {
        $thumbnail = $request->file('thumbnail')->store('/news/images');
        // $request->thumbnail = $thumbnail;
        Music::create([
            'thumbnail' => $thumbnail,
            'name' => $request->name,
            'genre' => $request->genre,
            'artist' => $request->artist,
            'type' => $request->type,
            'media' => $request->media,
            'link' => $request->link,
        ]);
        return redirect()->route('admin_music');
    }

    public function editMusic(Music $music) //send the edit view
    {
        return view('admin.contents.music.edit', ['item' => $music]);
    }
    public function updateMusic(Request $request, Music $music) //update the item
    {
        $music->update($request->all());
        return redirect()->route('admin_music');
    }

    public function deleteMusic(Music $music)
    {
        Storage::delete($music->thumbnail);

        $music->delete();
        return redirect()->route('admin_music');
    }
}
