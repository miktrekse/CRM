<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inspections;

class InspectionsController extends UserController
{
    public function index()
    {
        $inspections = Inspections::all();
        return view('inspections.index', ['inspections' => $inspections]);
    }
}
