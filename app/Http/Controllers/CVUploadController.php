<?php

namespace App\Http\Controllers;

use App\Models\CvUpload;
use Illuminate\Http\Request;

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

        $filePath = $request->file('cv_file')->store('cvs', 'public');

        CvUpload::create([
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
            'cv_file' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
        ]);

        if ($request->hasFile('cv_file')) {
            $filePath = $request->file('cv_file')->store('cvs', 'public');
            $cvUpload->cv_file = $filePath;
        }

        $cvUpload->update($validated);

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
