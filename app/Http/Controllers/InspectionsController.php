<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inspections;

class InspectionsController extends Controller
{
    public function index($username){
        $inspections = Inspections::where('assigned_to', $username)->get();
        return view('inspections.index', ['inspections' => $inspections]);
    }

    public function show($id){
        $inspection = Inspections::findOrFail($id);
        return view('inspections.show', compact('inspection'));
    }

    public function review($id){
        $inspection = Inspections::findOrFail($id);
        return view('inspections.review', compact('inspection'));
    }

    public function reviewed(Request $request, $id) {
        $inspection = Inspections::findOrFail($id);
        $validated = $request->validate([
            'decision' => 'required|string|max:255',
            'statement' => 'required|string|max:255',
        ]);
        $validated['is_reviewed'] = 1;
        $inspection->update($validated);
        return redirect()->route('inspections.show', $inspection->id);
    }
}
