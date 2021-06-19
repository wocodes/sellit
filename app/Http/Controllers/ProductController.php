<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware(['has_store']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
//        dd($request->all());
        $this->validate($request, [
           'name' => 'required|string',
           'primary_description' => 'required|string',
            'secondary_description' => 'nullable|string',
            'amount' => 'required',
            'image' => 'required'
        ]);

        $image_path = Storage::put('public/products', $request->image, 'public');
        $slug = Str::slug($request->name);

        $product = auth()->user()->stores()->first()->create([
            'name' => $request->name,
            'slug' => $slug,
            'primary_description' => $request->primary_description,
            'secondary_description' => $request->secondary_description,
            'amount' => $request->amount,
            'image' => $image_path
        ]);

        session()->flash('status', "New Product ({$product->name}) created successfully. <a href='product/{$slug}-{$product->id}'>Preview</a>");

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($product_slug)
    {
        $slug_array = explode('-', $product_slug);
        $product_id = array_pop($slug_array);
        $actual_slug = implode('-', $slug_array);

        $product = Product::where('slug', $actual_slug)->where('id', $product_id)->first();

        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
