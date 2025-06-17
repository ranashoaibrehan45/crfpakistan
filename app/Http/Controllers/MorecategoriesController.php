<?php

namespace App\Http\Controllers;

use App\Http\Requests\MorecategoryRequest;
use App\Models\Category;
use App\Models\Morecategory;
use App\Models\Subcategory;
use Illuminate\Support\Str;

class MorecategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $morecategories = Morecategory::all();

        return view('admin.morecategory.index', compact('morecategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::where('has_children', 1)->orderBy('name')->get();
        $subcategories = Subcategory::orderBy('name')->get();

        return view('admin.morecategory.create', [
            'categories' => $categories,
            'subcategories' => $subcategories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MorecategoryRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($data['name'], '-');

        Morecategory::create($data);

        return redirect()->back()->with('status', 'Sub-SubCategory created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Morecategory $morecategories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($morecategories)
    {
        $categories = Category::where('has_children', 1)->orderBy('name')->get();
        $subcategories = Subcategory::orderBy('name')->get();

        $morecategories = Morecategory::find($morecategories);
        $categories = Category::where('has_children', true)
            ->orderBy('name')
            ->get();

        return view('admin.morecategory.edit', [
            'subcategory' => $morecategories,
            'subcategories' => $subcategories,
            'categories' => $categories,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MorecategoryRequest $request, $morecategories)
    {
        $morecategories = Morecategory::findOrFail($morecategories);

        $data = $request->validated();
        $data['slug'] = Str::slug($data['name'], '-');

        $data['header_link'] = $request->has('header_link');
        $data['footer_link'] = $request->has('footer_link');
        $data['multiple_pages'] = $request->has('multiple_pages');

        $morecategories->update($data);

        return redirect()->back()->with('status', 'Sub-SubCategory updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $morecategory = Morecategory::findOrFail($id);
        if ($morecategory->delete()) {
            return back()->with('status', 'Sub-SubCategory deleted successfully!');
        }

        return back()->with('error', 'There is some problem, Please try again later!');
    }
}
