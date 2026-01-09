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
        $request->validate([
            'external_ref' => 'required',
            'priority' => 'required',
            'arrival_ts' => 'required',
            'checkpoint_id' => 'required',
            'origin_country' => 'required',
            'destination_country' => 'required',
            'risk_flags' => 'required',
            'declarant' => 'required',
            'consignee' => 'required',
            'active' => 'required'
        ]);

        $cases = Keis::findOrFail($id);
        $cases->update($request->all());

        return redirect()->route('cases.index')->with('success', __('Case updated successfully.'));
    }
}
