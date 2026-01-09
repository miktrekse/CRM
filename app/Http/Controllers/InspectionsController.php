<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inspections;

class InspectionsController extends Controller
{
    public function index()
    {
        $inspections = Inspections::all();
        return view('inspections.index', ['inspections' => $inspections]);
    }
        public function show($id)
    {
        $inspection = Inspections::findOrFail($id);
        return view('inspections.show', ['inspection' => $inspection]);
    }
        public function edit($id)
    {
        $inspection = Inspections::findOrFail($id);
        return view('inspections.edit', ['inspection' => $inspection]);
    }
        public function update(Request $request, $id)
    {
        $inspection = Inspections::findOrFail($id);
        $inspection->update($request->all());
        return redirect()->route('inspections.show', ['inspection' => $inspection]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'inspection_number' => 'required|unique:inspections,inspection_number',
            'vehicle_id' => 'required',
            'inspector_name' => 'required',
            'status' => 'required'
        ]);

        $inspection = Inspections::create($request->all());

        return redirect()->route('inspections.index')->with('success', __('Inspection created successfully.'));
    }
}
