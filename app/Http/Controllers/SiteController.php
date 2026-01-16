<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class SiteController extends Controller
{
        public function index (){


        return view("\components\inicio");
    }

    public function dashboard(): View
    {
        $habits = Auth::user()->habits()->with('habitLogs')->get();

        return view('components.dashboard', compact('habits'));
    }
}
