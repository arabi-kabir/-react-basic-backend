<?php

namespace App\Http\Controllers;

use App\Models\InformationEtc;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function onSelect() {
        return InformationEtc::all();
    }
}
