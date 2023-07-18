<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class PraductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_uz' => 'required',
            'name_ru' => 'required',
            'name_en' => 'required',
            'category_id' => 'required',
        ]);
        $requestData = $request->all();
        if ($request->hasFile('images')) {
            $files = $request->file('images');
            $image_names = [];
            foreach ($files as $file) {
                $image_name = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('site/images/products'), $image_name);
                $image_names[] = $image_name;
            }
            $requestData['images'] = $image_names;
        }
        if ($request->hasFile('productioncertificate')) {
            $file_icon = $request->file('productioncertificate');
            $icon_name = time() . '.' . $file_icon->getClientOriginalExtension();
            $file_icon->move('site/images/certificate', $icon_name);
            $requestData['productioncertificate'] = $icon_name;
        }
        $product = Product::create($requestData);
        return redirect()->route('admin.products.index')->with('success', 'Product created succuessfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name_uz' => 'required',
            'name_ru' => 'required',
            'name_en' => 'required',
            'category_id' => 'required',

        ]);
        $requestData = $request->all();
        if ($request->hasFile('images')) {
            $files = $request->file('images');
            $image_names = [];
            foreach ($files as $file) {
                $image_name = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('site/images/products'), $image_name);
                $image_names[] = $image_name;
            }
            $requestData['images'] = $image_names;
        }
        if ($request->hasFile('productioncertificate')) {
            $file_icon = $request->file('productioncertificate');
            $icon_name = time() . '.' . $file_icon->getClientOriginalExtension();
            $file_icon->move('site/images/certificate', $icon_name);
            $requestData['productioncertificate'] = $icon_name;
        }
        $product->update($requestData);
        return redirect()->route('admin.products.index')->with('success', 'Product update succuessfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::destroy($id);
        return redirect()->route('admin.products.index')->with('success', 'Product Delete succuessfuly');
    }
    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $fileName = $request->file('upload')->getClientOriginalName();
            // $fileName = pathinfo($originName, PATHINFO_FILENAME);
            // $extension = $request->file('upload')->getClientOriginalExtension();
            // $fileName = $fileName.'_'.time().'.'.$extension;
            $request->file('upload')->move('site/images/products/', $fileName);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/' . $fileName);
            $msg = 'Image successfully uploaded';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }
}
