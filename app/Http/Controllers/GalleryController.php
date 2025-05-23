<?php

namespace App\Http\Controllers;

use App\Http\Requests\GalleryRequest;
use App\Models\Album;
use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $query = Gallery::query();

        $query->when(request()->filled('album'), fn ($q) => $q->where('album_id', request('album')));

        $images = $query->paginate(20);

        return view('admin.gallery.index', compact('images'));
    }

    /**
     * Display a listing of the resource.
     */
    public function gallery()
    {
        $images = Gallery::paginate(20);

        return view('gallery', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $albums = Album::orderBy('name')->get();

        return view('admin.gallery.create', compact('albums'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GalleryRequest $request)
    {
        try {
            if ($request->hasFile('image')) {
                $filename = $this->uploadImage($request->file('image'), 'gallery');

                Gallery::create([
                    'album_id' => $request->album_id,
                    'title' => $request->title,
                    'path' => $filename,
                ]);

                if ($request->ajax()) {
                    \Log::info('here');

                    return response()->json([
                        'success' => true,
                        'filename' => $filename,
                    ]);
                }

                \Log::info('There');

                return back()->with('status', 'File uploaded successfully!');
            }

            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'No image uploaded.',
                ]);
            }

            return back()->with('error', 'No image uploaded.');
        } catch (\Exception $e) {
            \Log::error($e->getMessage());

            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'An error occurred during upload.',
                ], 500);
            }

            return back()->with('error', 'An unexpected error occurred. Please try again later.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        if ($gallery->delete()) {
            return back()->with('status', 'Image deleted successfully');
        }

        return back()->with('error', 'There is some problem, Please try again later.');
    }
}
