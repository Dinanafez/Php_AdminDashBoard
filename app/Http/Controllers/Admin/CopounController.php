<?php

namespace App\Http\Controllers\Admin;

use App\Models\Copoun;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCopounRequest;

class CopounController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $copouns=Copoun::get();
        return view('admin.copoun.index',compact('copouns'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.copoun.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCopounRequest $request)
    {
        $data=$request->validated();
       
        Copoun::create($data);
        return back()->with('status','added Successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(Copoun $copoun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Copoun $copoun)
    {    
        return view('admin.copoun.edit', compact('copoun'));
      

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $data = $request->validate([
        'name' => 'required|string',
        'discount' => 'required|numeric',
        'expiry_date' => 'required|date',
    ]);

    if ($request->hasFile('image')) {
        // معالجة رفع الصورة
        $image = $request->file('image');
        $newImageName = time() . '-' . $image->getClientOriginalName();
        $image->storeAs('public/copouns', $newImageName);

        // تحديث مسار الصورة
        $data['image'] = $newImageName;

        // حذف الصورة القديمة (إذا لزم الأمر)
        $copoun = Copoun::findOrFail($id);
        if ($copoun->image) {
            Storage::delete('public/copouns/' . $copoun->image);
        }
    }

    // تحديث السجل
    $copoun = Copoun::findOrFail($id);
    $copoun->update($data);

    return back()->with('status', 'Updated Successfully');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Copoun $copoun)
    {
        
        $copoun->delete();
        return back()->with('status','deleted  Successfuly');
    }
}
