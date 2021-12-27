<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function onSelectAll() {
        return Projects::all();
    }

    public function onSelect3() {
        return Projects::limit(3)->get();
    }

    public function onSelectDetail(Request $request) {
        return Projects::findOrFail($request->id);
    }
}
