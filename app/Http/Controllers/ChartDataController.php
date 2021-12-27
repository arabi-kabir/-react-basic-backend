<?php

namespace App\Http\Controllers;

use App\Models\ChartData;
use Illuminate\Http\Request;

class ChartDataController extends Controller
{
    public function onAllSelect() {
        return ChartData::all();
    }
}
