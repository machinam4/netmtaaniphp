<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotspotLoginController extends Controller
{
    public function index(Request $request)
    {
        $request->session()->put('hotspotInfo', $request->all());
        // dd($request);
        return view('Hotspot.login');
    }
}
