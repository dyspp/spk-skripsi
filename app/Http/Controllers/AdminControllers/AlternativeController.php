<?php

namespace App\Http\Controllers\AdminControllers;

use App\Models\Alternative;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlternativeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.alternatives.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.alternatives.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $img = $request->image;

        $uploaded = date('dmY-His');
        $originalName = $request->image->getClientOriginalName();
        $newName = strtolower(str_replace([' ', '_'], '-', $originalName));
        $imageName = "$uploaded-$newName";

        $uploadDir = 'images\alternatives';
        $img->move($uploadDir, $imageName);

        Alternative::create([
            'name'          => $request->name,
            'image'         => $imageName,
            'brand'         => $request->brand,
            'price'         => $request->price,
            'processor'     => $request->processor,
            'gpu'           => $request->gpu,
            'ram'           => $request->ram,
            'storage'       => $request->storage,
            'screen'        => $request->screen,
            'unit_weight'   => $request->unit_weight,
            'features'      => $request->features
        ]);

        session()->flash('created', 'Data created successfully!');

        return redirect(route('alternatives.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
