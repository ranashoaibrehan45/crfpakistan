<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlbumRequest;
use App\Models\Album;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $albums = Album::paginate(20);

        if (Auth::check()) {
            return view('admin.album.index', compact('albums'));
        }

        return view('album', compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.album.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AlbumRequest $request)
    {
        try {
            if ($request->hasFile('icon')) {
                $filename = $this->uploadImage($request->file('icon'), 'album');

                Album::create([
                    'name' => $request->name,
                    'slug' => Str::slug($request->name, '-'),
                    'icon' => $filename,
                ]);

                return back()->with('status', 'Album created successfully!');
            }

            return back()->with('error', 'There is some problem, Please try again later!');
        } catch (\Exception $e) {
            echo $e->getMessage();
            \Log::error($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $album = Album::where('slug', $slug)->firstOrFail();

        if (Auth::check()) {
            return view('admin.album.index', compact('album'));
        }

        return view('gallery', compact('album'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Album $album)
    {
        return view('admin.album.edit', compact('album'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AlbumRequest $request, Album $album)
    {
        try {
            $data = $request->validated();
            $data['slug'] = Str::slug($request->name, '-');

            if ($request->hasFile('icon')) {
                $filename = $this->uploadImage($request->file('icon'), 'album');
                if ($filename) {
                    $this->delImage($album->icon, 'album');
                }

                $data['icon'] = $filename;
            }

            if ($album->update($data)) {
                return back()->with('status', 'Album updated successfully!');
            }

            return back()->with('error', 'There is some problem, Please try again later!');
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Album $album)
    {
        if ($album->delete()) {
            return back()->with('status', 'Album deleted successfully');
        }

        return back()->with('error', 'There is some problem, Please try again later.');
    }
}
