<?php

namespace App\Http\Controllers;

use App\Models\ImageUpload;
use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
    public function index()
    {
        $images = ImageUpload::paginate(3);
        return view('partials.image_upload.index', compact('images'));
    }

    public function create()
    {
        return view('image_upload.create');
    }

    public function store(Request $request)
    {
        // Validate inputs
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'type' => 'required|string|max:255',
        ]);

        // Handle file upload
        $imageName = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension(); // Get the original extension
            $imageName = time() . '.' . $extension; // Generate a unique name using time
            $image->storeAs('uploads', $imageName, 'public'); // Save the file in the 'uploads' directory
        }

        // Save the image information to the database
        $imageUpload = new ImageUpload();
        $imageUpload->type = $request->type;
        $imageUpload->image = 'uploads/' . $imageName; // Save the relative path
        $imageUpload->save();

        return redirect()->route('image_upload.index')->with('success', 'Image uploaded successfully.');

        // Redirect back with success message
        // return redirect()->back()->with('success', 'Image uploaded successfully!')->with('image_path', $imageUpload->path);
    }

    public function show($id)
    {
        // Find the record
        $imageUpload = ImageUpload::findOrFail($id);

        return view('partials.image_upload.edit', compact('imageUpload')); // pass data to about_me page
    }

    public function update(Request $request, $id)
    {
        // Find the record
        $imageUpload = ImageUpload::findOrFail($id);

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

    public function destroy($id)
    {
        // Find the record
        $imageUpload = ImageUpload::findOrFail($id);

        $imageUpload->delete();
        return redirect()->route('image_upload.index')->with('success', 'Image deleted successfully.');
    }
}
