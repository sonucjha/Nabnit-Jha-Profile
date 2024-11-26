<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        $skills = Skill::all();
        return view('partials.skills.index', compact('skills')); // pass data to about_me page
    }

    public function create()
    {
        return view('partials.skills.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'icon' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $skill = Skill::create($validated);
        // Redirect to the same page (e.g., the list of AboutMe entries)
        return redirect()->route('skills.index')->with('success', 'Record store successfully.');
    }

    public function show($id)
    {
        // Find the record
        $skill = Skill::findOrFail($id);

        return view('partials.skills.edit', compact('skill')); // pass data to about_me page
    }

    public function update(Request $request, $id)
    {
        // Find the record
        $skill = Skill::findOrFail($id);

        $validated = $request->validate([
            'icon' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $skill->update($validated);
       
        // Redirect to the same page (e.g., the list of AboutMe entries)
        return redirect()->route('skills.index')->with('success', 'Record update successfully.');
    }

    public function destroy($id)
    {
        // Find the record to delete
        $skill = Skill::findOrFail($id);

        // Delete the record
        $skill->delete();

        // Redirect to the same page (e.g., the list of skill entries)
        return redirect()->route('skills.index')->with('success', 'Record deleted successfully.');
    }
}
