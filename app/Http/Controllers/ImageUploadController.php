<?php

namespace App\Http\Controllers;

use App\Models\ImageUpload;
use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
    public function index()
    {
        $images = ImageUpload::all();
        return view('partials.image_upload.index', compact('images'));
    }

    public function create()
    {
        return view('image_upload.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'type' => 'required|string|max:255',
        ]);

        $path = $request->file('image')->store('uploads', 'public');

        ImageUpload::create([
            'image' => $path,
            'type' => $request->type,
        ]);

        return redirect()->route('image_upload.index')->with('success', 'Image uploaded successfully.');
    }

    public function edit(ImageUpload $imageUpload)
    {
        return view('image_upload.edit', compact('imageUpload'));
    }

    public function update(Request $request, ImageUpload $imageUpload)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'type' => 'required|string|max:255',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('uploads', 'public');
            $imageUpload->image = $path;
        }

        $imageUpload->type = $request->type;
        $imageUpload->save();

        return redirect()->route('image_upload.index')->with('success', 'Image updated successfully.');
    }

    public function destroy(ImageUpload $imageUpload)
    {
        $imageUpload->delete();
        return redirect()->route('image_upload.index')->with('success', 'Image deleted successfully.');
    }
}
