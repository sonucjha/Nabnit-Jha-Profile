<?php
namespace App\Http\Controllers;

use App\Models\SocialAccount;
use Illuminate\Http\Request;

class SocialAccountController extends Controller
{
    public function index()
    {
        $socialAccounts = SocialAccount::all();
        return view('partials.social_account.index', compact('socialAccounts')); // pass data to about_me page
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
        ]);

        $socialAccounts = SocialAccount::create($validated);

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
        // Find the record to delete
        $socialAccount = SocialAccount::findOrFail($id);

        $validated = $request->validate([
            'name' => 'sometimes|string|max:255',
            'url' => 'sometimes|url',
        ]);

        $socialAccount->update($validated);

        // Redirect to the same page (e.g., the list of AboutMe entries)
        return redirect()->route('social_account.index')->with('success', 'Record update successfully.');
    }

    public function destroy($id)
    {
        // Find the record to delete
        $socialAccounts = SocialAccount::findOrFail($id);

        // Delete the record
        $socialAccounts->delete();

        // Redirect to the same page (e.g., the list of socialAccounts entries)
        return redirect()->route('social_account.index')->with('success', 'Record deleted successfully.');
    }
}
