<?php
namespace App\Http\Controllers;

use App\Models\SocialAccount;
use Illuminate\Http\Request;

class SocialAccountController extends Controller
{
    public function index()
    {
        $socialAccount = SocialAccount::all();
        return view('partials.social_account.index', compact('socialAccount')); // pass data to about_me page
    }

    public function create()
    {
        return view('partials.social_account.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'url' => 'required|url',
            'icon' => 'required|string',
        ]);

        $socialAccount = SocialAccount::create($validated);

         // Redirect to the same page (e.g., the list of AboutMe entries)
        return redirect()->route('social_account.index')->with('success', 'Record store successfully.');
    }

    public function show($id)
    {
         // Find the record
         $socialAccount = SocialAccount::findOrFail($id);

         return view('partials.social_account.edit', compact('socialAccount')); // pass data to socialAccount page
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'sometimes|string|max:255',
            'url' => 'sometimes|url',
            'icon' => 'sometimes|string',
        ]);

        $socialAccount->update($validated);

        // Redirect to the same page (e.g., the list of AboutMe entries)
        return redirect()->route('social_account.index')->with('success', 'Record update successfully.');
    }

    public function destroy($id)
    {
        // Find the record to delete
        $socialAccount = SocialAccount::findOrFail($id);

        // Delete the record
        $socialAccount->delete();

        // Redirect to the same page (e.g., the list of socialAccount entries)
        return redirect()->route('social_account.index')->with('success', 'Record deleted successfully.');
    }
}
