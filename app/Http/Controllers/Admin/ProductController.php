<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use  Illuminate\Http\UploadedFile;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=Product::get();
        return view('admin.Product.index',compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=Category::get();
        return view('admin.Product.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $data=$request->validated();
        //image uploading 1-get image 2-change its current name
        $image= $request->image_url;
        //change it current name
        $newImageName=time().'-'.$image->getClientOriginalName();
        // mive image to my project 
        $image->storeAs('Products',$newImageName,'public');
        $data['image_url']=$newImageName;
        Product::create($data);
        return back()->with('status','added Successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {  
        $categories=Category::get();
        return view('admin.Product.edit',compact('categories','product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $data=$request->validated();
        if($request->hasFile('image_url')){
             //image uploading 1-get image 2-change its current name
        $image= $request->image_url;
        //change it current name
        $newImageName=time().'-'.$image->getClientOriginalName();
        // mive image to my project 
        $image->storeAs('Products',$newImageName,'public');
        $data['image_url']=$newImageName;
        Storage::delete("public/Product/$product->image_url");
        }
       
        Product::update($data);
        return back()->with('status','Updated Successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        Storage::delete("public/Product/$product->image_url");
        $product->delete();
        return back()->with('status','deleted  Successfuly');


        
    }
}
