<?php

namespace App\Http\Controllers;

use App\Models\Romance;


use Illuminate\Http\Request;

class PageRomanceController extends Controller
{
    public function index()
    {
        $data['banner'] = Romance::latest()->paginate(1);
        $data['romance'] = Romance::all();
        return view('homepage.romance', $data);
    }
}
