<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //        dd($request->all());
        $request->validate([

            'name_uz' => 'required',
            'name_ru' => 'required',
            'name_en' => 'required',
        ]);
        $requestData = $request->all();
        if ($request->hasFile('images')) {
            $file = $request->file('images');
            $image_name = time() . '.' . $file->getClientOriginalExtension();
            $file->move('site/images/categories', $image_name);
            $requestData['images'] = $image_name;
        }
        if ($request->hasFile('icon')) {
            $file_icon = $request->file('icon');
            $icon_name = time() . '.' . $file_icon->getClientOriginalExtension();
            $file_icon->move('site/images/icon', $icon_name);
            $requestData['icon'] = $icon_name;
        }
        $category = Category::create($requestData);
        return redirect()->route('admin.categories.index')->with('success', 'Category created succuessfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('admin.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name_uz' => 'required',
            'name_ru' => 'required',
            'name_en' => 'required',
        ]);

        $requestData = $request->all();

        if ($request->hasFile('images')) {
            $file = $request->file('images');
            $image_name = time() . '.' . $file->getClientOriginalExtension();
            $file->move('site/images/categories', $image_name);
            $requestData['images'] = $image_name;
        }
        if ($request->hasFile('icon')) {
            $file_icon = $request->file('icon');
            $icon_name = time() . '.' . $file_icon->getClientOriginalExtension();
            $file_icon->move('site/images/icon', $icon_name);
            $requestData['icon'] = $icon_name;
        }
        $category->update($requestData);
        return redirect()->route('admin.categories.index')->with('success', 'Category created succuessfuly');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        $status = @unlink(public_path('site/images/categories/' . $category->images));
        if (!$status) {
            return redirect()->route('admin.categories.index')->with($category->images);
        }
        $statuss = @unlink(public_path('site/images/icon/' . $category->icon));
        if (!$statuss) {
            return redirect()->route('admin.categories.index')->with($category->icon);
        }
        $category->delete();
        return redirect()->route('admin.categories.index')->with('Success', "$category->name is deleted");
    }
}
