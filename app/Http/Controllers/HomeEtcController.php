<?php

namespace App\Http\Controllers;

use App\Models\HomePageEtc;
use Illuminate\Http\Request;

class HomeEtcController extends Controller
{
    public function onSelect() {
        return HomePageEtc::select(
            'video_description',
            'video_url'
        )->get();
    }

    public function onSelectToTalProjectClient() {
        return HomePageEtc::select(
            'total_project',
            'total_client'
        )->get();
    }

    public function onSelectTechDescription() {
        return HomePageEtc::select(
            'tech_description'
        )->get();
    }

    public function onSelectTopTitle() {
        return HomePageEtc::select(
            'home_title',
            'home_subtitle'
        )->get();
    }
}
