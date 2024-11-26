<?php

namespace App\Http\Controllers;

use App\Models\CvUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
// Add this at the top of the file

class CvUploadController extends Controller
{
    public function index()
    {
        $cvUploads = CvUpload::all();

        return view('partials.cv_upload.index', compact('cvUploads'));
    }

    public function create()
    {
        return view('partials.cv_uploads.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'cv_file' => 'required|file|mimes:pdf,doc,docx|max:2048',
        ]);

        // Generate a custom filename
        $fileExtension = $request->file('cv_file')->getClientOriginalExtension();
        $fileName = Str::slug($request->name) . '_' . time() . '.' . $fileExtension;

        // Save the file with the new name
        $filePath = $request->file('cv_file')->storeAs('cvs', $fileName, 'public');

        CvUpload::create([
            'name' => $request->name,
            'cv_file' => $filePath,
        ]);

        return redirect()->route('cv_uploads.index')->with('success', 'CV uploaded successfully!');
    }

    public function show($id)
    {
        // Find the record
        $cvUpload = CvUpload::findOrFail($id);

        return view('partials.cv_upload.edit', compact('cvUpload')); // pass data to about_me page
    }

    public function update(Request $request, $id)
    {
        // Find the record
        $cvUpload = CvUpload::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'cv_file' => 'required|file|mimes:pdf,doc,docx|max:2048',
        ]);

        if ($request->hasFile('cv_file')) {
            $filePath = $request->file('cv_file')->store('cvs', 'public');
            $cvUpload->cv_file = $filePath;
        }

        $cvUpload->name = $request->name;
        $cvUpload->save();

        return redirect()->route('cv_uploads.index')->with('success', 'CV updated successfully!');
    }

    public function destroy($id)
    {
        // Find the record
        $cvUpload = CvUpload::findOrFail($id);

        $cvUpload->delete();
        return redirect()->route('cv_uploads.index')->with('success', 'CV deleted successfully!');
    }
}
