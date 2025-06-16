<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Building;

class BuildingController extends Controller
{
    public function apiIndex()
    {
        return response()->json([
            'buildings' => Building::all()
        ]);
    }
}