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
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'image_url' => 'required|mimes:png,jpg',
            'quantity' => 'required|integer',
        ]);
        //image uploading 1-get image 2-change its current name
        $image= $request->image_url;
        //change it current name
        $newImageName=time().'-'.$image->getClientOriginalName();
        // mive image to my project 
        $image->storeAs('Products',$newImageName,'public');
        $validatedData['image_url']=$newImageName;
        Product::create($validatedData);
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
        
            // التحقق من البيانات
            $validatedData = $request->validate([
                'name' => 'required|string',
                'description' => 'required|string',
                'price' => 'required|numeric',
                'category_id' => 'required|exists:categories,id',
                'image_url' => 'nullable|mimes:png,jpg',
                'quantity' => 'required|integer',
            ]);
        
            // معالجة الصورة إذا تم رفع صورة جديدة
            if ($request->hasFile('image_url')) {
                // الحصول على الصورة
                $image = $request->file('image_url');
        
                // إنشاء اسم جديد للصورة
                $newImageName = time() . '-' . $image->getClientOriginalName();
        
                // تخزين الصورة في المسار المحدد
                $image->storeAs('Products', $newImageName, 'public');
        
                // حذف الصورة القديمة إذا كانت موجودة
                Storage::delete("public/Products/$product->image_url");
        
                // تحديث اسم الصورة في البيانات
                $validatedData['image_url'] = $newImageName;
            }
        
            // تحديث المنتج باستخدام البيانات
            $product->update($validatedData);
        
            // إعادة التوجيه مع رسالة نجاح
            return back()->with('status', 'Updated Successfully');
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
