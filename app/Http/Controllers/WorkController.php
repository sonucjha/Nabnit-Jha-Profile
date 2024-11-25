<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function index()
    {
        $work = Work::all();
        return view('partials.works.index', compact('work')); // pass data to about_me page
    }

    public function create()
    {
        return view('partials.my_work.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $work = Work::create($validated);
        // Redirect to the same page (e.g., the list of AboutMe entries)
        return redirect()->route('works.index')->with('success', 'Record store successfully.');
    }

    public function show($id)
    {
        // Find the record
        $work = Work::findOrFail($id);

        return view('partials.Works.edit', compact('work')); // pass data to about_me page
    }

    public function update(Request $request, $id)
    {
        // Find the record
        $work = Work::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $work->update($validated);
       
        // Redirect to the same page (e.g., the list of AboutMe entries)
        return redirect()->route('works.index')->with('success', 'Record update successfully.');
    }

    public function destroy($id)
    {
        // Find the record to delete
        $work = Work::findOrFail($id);

        // Delete the record
        $work->delete();

        // Redirect to the same page (e.g., the list of Work entries)
        return redirect()->route('works.index')->with('success', 'Record deleted successfully.');
    }
}
