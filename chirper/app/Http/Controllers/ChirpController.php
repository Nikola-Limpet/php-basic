<?php

namespace App\Http\Controllers;

use App\Models\Chirp;
use Illuminate\Http\Request;

class ChirpController extends Controller
{
    public function index()
    {
        $chirps = Chirp::with('user')
            ->latest()
            ->take(50)  // Limit to 50 most recent chirps
            ->get();

        return view('home', ['chirps' => $chirps]);
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);
        Chirp::create([
            'message'=> $validated['message'],
        ]);

        return redirect('/')->with('success', 'Chirp created successfully!');
    }

    // delete chirp


    public function edit(Chirp $chirp)
    {
        return view('chirps.edit', compact('chirp'));
    }

    public function update(Request $request, Chirp $chirp)
    {
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);

        $chirp->update([
            'message' => $validated['message'],
        ]);

        return redirect('/')->with('success', 'Chirp updated successfully!');
    }

    public function destroy(Chirp $chirp)
    {
        // $this->authorize('delete', $chirp);
        $chirp->delete();

        return redirect('/')->with('success', 'Chirp deleted successfully!');
    }
}

