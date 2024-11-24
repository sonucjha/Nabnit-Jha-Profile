<?php
namespace App\Http\Controllers;

use App\Models\AboutMe;
use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function index()
    {
        $aboutMe = AboutMe::all();
        
        return view('partials.about_me.index', compact('aboutMe'));
    }

    public function create()
    {
        return view('partials.about_me.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        AboutMe::create($request->all());
        return redirect()->route('partials.about_me.index')->with('success', 'Details saved successfully.');
    }

    public function edit(AboutMe $aboutMe)
    {
        return view('partials.about_me.edit', compact('aboutMe'));
    }

    public function update(Request $request, AboutMe $aboutMe)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $aboutMe->update($request->all());
        return redirect()->route('partials.about_me.index')->with('success', 'Details updated successfully.');
    }

    public function destroy(AboutMe $aboutMe)
    {
        $aboutMe->delete();
        return redirect()->route('partials.about_me.index')->with('success', 'Details deleted successfully.');
    }
}