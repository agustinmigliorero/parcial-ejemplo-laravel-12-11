<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
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
        $imagenes = Image::all()->where('property_id', '=', $property_id);

        return view('images', ['property_id' => $property_id, 'imagenes' => $imagenes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rutaImagen = Storage::put('', $request->imagen);

        $imagen = new Image;
        $imagen->property_id = $request->property_id;
        $imagen->image_url = $rutaImagen;

        $imagen->save();

        return redirect('/imagenes/'.$request->property_id);
    }

    /**
     * Display the specified resource.
     */
    public function show($nombreImagen)
    {
        $contents = Storage::get($nombreImagen);
        $mime = Storage::mimeType($nombreImagen);

        return response($contents, 200)
            ->header('Content-Type', $mime);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Image $image)
    {
        //
    }
}
