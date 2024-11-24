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
        return response()->json($aboutMe); // Respond with a JSON of all records
    }

    public function create()
    {
        return view('partials.about_me.create');
    }

    // POST: Create a new about_me
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $aboutMe = AboutMe::create($validated);

        return response()->json($aboutMe, 201); // Return the created resource with 201 status
    }

    // GET: Show a specific about_me
    public function show($id)
    {
        $aboutMe = AboutMe::find($id);

        if (!$aboutMe) {
            return response()->json(['message' => 'AboutMe not found'], 404);
        }

        return response()->json($aboutMe); // Return the specific resource
    }

    // PUT: Update a specific about_me
    public function update(Request $request, $id)
    {
        $aboutMe = AboutMe::find($id);

        if (!$aboutMe) {
            return response()->json(['message' => 'AboutMe not found'], 404);
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $aboutMe->update($validated);

        return response()->json($aboutMe); // Return the updated resource
    }

    // DELETE: Delete a specific about_me
    public function destroy($id)
    {
        $aboutMe = AboutMe::find($id);

        if (!$aboutMe) {
            return response()->json(['message' => 'AboutMe not found'], 404);
        }

        $aboutMe->delete();

        return response()->json(['message' => 'AboutMe deleted successfully']); // Success message
    }
}
