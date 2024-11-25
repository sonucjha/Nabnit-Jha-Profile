<?php
namespace App\Http\Controllers;

use App\Models\SocicalAccount;
use Illuminate\Http\Request;

class SocicalAccountController extends Controller
{
    public function index()
    {
        $socicalAccounts = SocicalAccount::all();
        return view('partials.socical_account.index', compact('socicalAccounts')); // pass data to about_me page
    }

    public function create()
    {
        return view('partials.socical_account.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'url' => 'required|url',
            'icon' => 'required|string',
        ]);

        $socicalAccounts = SocicalAccount::create($validated);

         // Redirect to the same page (e.g., the list of AboutMe entries)
        return redirect()->route('socical_account.index')->with('success', 'Record store successfully.');
    }

    public function show($id)
    {
         // Find the record
         $socicalAccounts = SocicalAccount::findOrFail($id);

         return view('partials.socical_account.edit', compact('socicalAccounts')); // pass data to socicalAccounts page
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'sometimes|string|max:255',
            'url' => 'sometimes|url',
            'icon' => 'sometimes|string',
        ]);

        $socicalAccounts->update($validated);

        // Redirect to the same page (e.g., the list of AboutMe entries)
        return redirect()->route('socical_account.index')->with('success', 'Record update successfully.');
    }

    public function destroy($id)
    {
        // Find the record to delete
        $socicalAccounts = SocicalAccount::findOrFail($id);

        // Delete the record
        $socicalAccounts->delete();

        // Redirect to the same page (e.g., the list of socicalAccounts entries)
        return redirect()->route('socical_account.index')->with('success', 'Record deleted successfully.');
    }
}
