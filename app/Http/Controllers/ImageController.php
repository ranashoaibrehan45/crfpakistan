<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageRequest;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $query = Image::query();

        $query->when(request()->filled('title'), fn ($q) => $q->where('title', request('title')));

        $images = $query->paginate(20);

        return view('admin.image.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.image.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ImageRequest $request)
    {
        try {
            if ($request->hasFile('image')) {
                $filename = $this->uploadImage($request->file('image'), 'images');
                $data = [
                    'title' => $request->input('title'),
                    'path' => $filename,
                ];

                \Log::info(print_r($data, true));

                Image::create($data);

                if ($request->ajax()) {
                    return response()->json([
                        'success' => true,
                        'filename' => $filename,
                    ]);
                }

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
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Image $image)
    {
        if ($image->delete()) {
            return back()->with('status', 'Image deleted successfully');
        }

        return back()->with('error', 'There is some problem, Please try again later.');
    }
}
