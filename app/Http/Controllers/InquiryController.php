<?php

namespace App\Http\Controllers;

use App\Events\EventoConsulta;
use App\Models\Inquiry;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($property_id)
    {
        return view('contact', ['property_id' => $property_id]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inquiry = new Inquiry;
        $inquiry->name = $request->name;
        $inquiry->message = $request->message;
        $inquiry->email = $request->email;
        $inquiry->property_id = $request->property_id;

        $inquiry->save();

        EventoConsulta::dispatch($inquiry);

        return redirect('/propiedades');
    }

    /**
     * Display the specified resource.
     */
    public function show(Inquiry $inquiry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inquiry $inquiry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Inquiry $inquiry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inquiry $inquiry)
    {
        //
    }
}
