<?php

namespace App\Http\Controllers\AdminControllers;

use App\Models\Alternative;
use Illuminate\Support\Str;
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
    public function index(Request $request)
    {
        if ($request->ajax())
        {
            $keyword = $request->search;

            $alternatives = Alternative::search($keyword);

            return view('admin.partials.data-tables.alternatives-table', compact('alternatives'));
        }
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
        $newData = $request->validated();

        $uploadedImage = $this->uploadImage($request->image);

        $newData['image'] = $uploadedImage;

        $newData['slug'] = Str::slug($newData['name'], '-');

        Alternative::create($newData);

        session()->flash('created', config('messages.created'));

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

        if ($alternative === null)
        {
            return "no data";
        }
        else
        {
            return view('admin.partials.alternative-details', compact('alternative'));
        }
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
        $updatedData = $request->validated();

        if ($request->hasFile('image'))
        {
            $uploadedImage = $this->uploadImage($request->image);
            
            $this->deleteImage($alternative->image);

            $updatedData['image'] = $uploadedImage;
        }

        $updatedData['slug'] = Str::slug($updatedData['name'], '-');

        $alternative->update($updatedData);

        session()->flash('updated', config('messages.updated'));

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

        session()->flash('deleted', config('messages.deleted'));

        return back();
    }

    // A function to set the directory for storing the uploaded image.
    public function imageDirectory()
    {
        return 'images\\alternatives\\';
    }

    public function uploadImage($imageFile)
    {
        $image = $imageFile;

        // Characters for str_replace parameter.
        // $characters = [' ', '_', '(', ')', '.', '[', ']'];

        // Set upload date.
        // $uploaded = date('dmY-His');

        $originalName = $imageFile->getClientOriginalName();

        // $extension = $imageFile->getClientOriginalExtension();

        // 'Remove' extension from the original image name.
        // $name = str_replace(".$extension", '', $originalName);

        // Replace all characters in $name that matches with characters $characters.
        // $newName = strtolower(str_replace($characters, '-', $name));

        // Set the new image name
        // $imageName = "$uploaded-$newName.$extension";
        $imageName = $originalName;

        // Get the directory for storing the uploaded image
        $imageDirectory = $this->imageDirectory();

        $image->move($imageDirectory, $imageName);

        return $imageName;
    }

    public function deleteImage($imageFile)
    {
        if (File::exists(public_path($this->imageDirectory().$imageFile)))
        {
            File::delete(public_path($this->imageDirectory().$imageFile));
        }
    }
}
