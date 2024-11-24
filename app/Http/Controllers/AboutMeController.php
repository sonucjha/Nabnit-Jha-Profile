<?php
namespace App\Http\Controllers;

use App\Models\AboutMe;
use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    // GET: List all about_me
    public function index()
    {
        $aboutMe = AboutMe::all();
        return view('partials.about_me.index', compact('aboutMe')); // pass data to about_me page
    }

    public function create()
    {
        return view('partials.about_me.create');
    }

    // POST: Create a new about_me
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $aboutMe = AboutMe::create($validated);

        // Redirect to the same page (e.g., the list of AboutMe entries)
        return redirect()->route('about_me.index')->with('success', 'Record store successfully.');
    }

    // GET: Show a specific about_me
    public function show($id)
    {
        // Find the record
        $aboutMe = AboutMe::findOrFail($id);

        return view('partials.about_me.edit', compact('aboutMe')); // pass data to about_me page
    }

    // PUT: Update a specific about_me
    public function update(Request $request, $id)
    {
        // Find the record
        $aboutMe = AboutMe::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $aboutMe->update($validated);

        // Redirect to the same page (e.g., the list of AboutMe entries)
        return redirect()->route('about_me.index')->with('success', 'Record update successfully.');
    }

    // DELETE: Delete a specific about_me
    // Delete method
    public function destroy($id)
    {
        // Find the record to delete
        $aboutMe = AboutMe::findOrFail($id);

        // Delete the record
        $aboutMe->delete();

        // Redirect to the same page (e.g., the list of AboutMe entries)
        return redirect()->route('about_me.index')->with('success', 'Record deleted successfully.');
    }
}
