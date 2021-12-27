<?php

namespace App\Http\Controllers;

use App\Models\ClientReview;
use Illuminate\Http\Request;

class ClientReviewController extends Controller
{
    public function onAllSelect() {
        return ClientReview::all();
    }
}
