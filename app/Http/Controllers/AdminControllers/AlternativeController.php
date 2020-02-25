<?php

namespace App\Http\Controllers\AdminControllers;

use App\Models\Alternative;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\AdminRequests\AlternativeRequest;

class AlternativeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alternatives = Alternative::paginate(10);

        return view('admin.alternatives.index', compact('alternatives'));
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
    public function store(AlternativeRequest $request)
    {
        $uploadedImage = $this->uploadImage($request->image);

        Alternative::create([
            'name'          => $request->name,
            'image'         => $uploadedImage,
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
        $alternative = Alternative::find($id);

        return $alternative;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Alternative $alternative)
    {
        return view('admin.alternatives.edit', compact('alternative'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AlternativeRequest $request, Alternative $alternative)
    {
        $updatedData = $request->all();

        if ($request->hasFile('image'))
        {
            // Upload image
            $uploadedImage = $this->uploadImage($request->image);
            
            // Delete old image
            $this->deleteImage($alternative->image);

            $updatedData['image'] = $uploadedImage;
        }

        $alternative->update($updatedData);

        session()->flash('updated', 'Data updated successfully!');

        return redirect(route('alternatives.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alternative $alternative)
    {
        $this->deleteImage($alternative->image);

        $alternative->delete();

        session()->flash('deleted', 'Data deleted successfully!');

        return back();
    }

    public function imageDir()
    {
        return 'images\\alternatives\\';
    }

    public function uploadImage($imageFile)
    {
        // Prepare the image file
        $image = $imageFile;

        // Characters for str_replace
        $characters = [' ', '_', '(', ')', '.', '[', ']'];

        // Set upload date
        $uploaded = date('dmY-His');
        // Get original file name
        $originalName = $imageFile->getClientOriginalName();
        // Get original extension
        $extension = $imageFile->getClientOriginalExtension();
        // 'Remove' extension from original file name
        $name = str_replace(".$extension", '', $originalName);
        // Replace all characters in $characters array from $name
        $newName = strtolower(str_replace($characters, '-', $name));
        // Set the new image name
        $imageName = "$uploaded-$newName.$extension";
        // Get the directory for storing uploaded image
        $imageDir = $this->imageDir();
        // Move uploaded image with its new name to the directory
        $image->move($imageDir, $imageName);

        return $imageName;
    }

    public function deleteImage($imageFile)
    {
        if (File::exists(public_path($this->imageDir().$imageFile)))
        {
            File::delete(public_path($this->imageDir().$imageFile));
        }
        else
        {
            return back();
        }
    }
}
