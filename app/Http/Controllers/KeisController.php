<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keis;

class KeisController extends Controller
{
    public function index()
    {
        $cases = Keis::all();
        return view('cases.index', ['cases' => $cases]);
    }
        public function show($id)
    {
        $cases = Keis::findOrFail($id);
        return view('cases.show', ['cases' => $cases]);
    }
        public function edit($id)
    {
        $cases = Keis::findOrFail($id);
        return view('cases.edit', ['cases' => $cases]);
    }
    public function update(Request $request, $id)
    {
        $cases = Keis::findOrFail($id);
        $cases->update($request->all());
        return redirect()->route('cases.show', ['cases' => $cases]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'case_number' => 'required|unique:keis,case_number',
            'description' => 'required',
            'status' => 'required'
        ]);

        $cases = Keis::create($request->all());

        return redirect()->route('cases.index')->with('success', __('Case created successfully.'));
    }
}
