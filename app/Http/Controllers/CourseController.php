<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function onSelectFour() {
        return Course::limit(4)->get();
    }

    public function onSelectAll() {
        return Course::all();
    }

    public function onSelectDetails(Request $request) {
        return $request;
        return Course::findOrFail($request->id);
    }
}
