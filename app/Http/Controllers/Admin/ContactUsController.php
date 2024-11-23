<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact_us;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts_us=Contact_us::get();
        return view ('admin.Contact.index',compact('contacts_us'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('admin.Contact.contact');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContactUsRequest $request)
    {
        
            $data=$request->validated();
            Contact::create($data);
            return back()->with('status-message','Thank You for Contact us ');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Contact_us $contact_us)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact_us $contact_us)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact_us $contact_us)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact_us $contact_us)
    {
        //
    }
}
