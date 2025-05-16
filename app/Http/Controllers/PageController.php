<?php

namespace App\Http\Controllers;

use App\Http\Requests\PageRequest;
use App\Models\Category;
use App\Models\Page;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pages = Page::all();

        return view('admin.page.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::where('has_children', true)
            ->orderBy('name')
            ->get();

        $subcategories = Subcategory::orderBy('name')->get();

        return view('admin.page.create', [
            'categories' => $categories,
            'subcategories' => $subcategories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PageRequest $request)
    {
        $data = $request->validated();
        $data['slug'] = Str::slug($data['title'], '-');

        Page::create($data);

        return redirect()->back()->with('status', 'Page created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Page $page)
    {
        return view('admin.page.show', compact('page'));
    }

    /**
     * show page on front end
     */
    public function showPage($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();

        return view('page', compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Page $page)
    {
        $categories = Category::where('has_children', true)
            ->orderBy('name')
            ->get();

        $subcategories = Subcategory::orderBy('name')->get();
        // $subcategories = json_encode($subcategories);

        return view('admin.page.edit', compact('page', 'categories', 'subcategories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PageRequest $request, Page $page)
    {
        $data = $request->validated();
        $data['slug'] = Str::slug($data['title'], '-');

        $page->update($data);

        return redirect()->back()->with('status', 'Page updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Page $page)
    {
        if ($page->delete()) {
            return back()->with('status', 'Page deleted successfully!');
        }

        return back()->with('error', 'There is some problem, Please try again later!');
    }

    /**
     * Upload images
     */
    public function upload(Request $request)
    {
        \Log::info(print_r($request->all(), true));
        try {
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = Str::uuid().'.'.$file->getClientOriginalExtension();
                $path = $file->storeAs('uploads', $filename, 'public');

                return response()->json([
                    'url' => asset('storage/'.$path),
                ]);
            }

            return response()->json(['error' => 'No file uploaded.'], 400);
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
        }
    }
}
