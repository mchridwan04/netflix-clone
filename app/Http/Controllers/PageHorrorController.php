<?php

namespace App\Http\Controllers;
use App\Models\Horror;

use Illuminate\Http\Request;

class PageHorrorController extends Controller
{
    public function index()
    {
        $data['banner'] = Horror::latest()->paginate(1);
        $data['horror'] = Horror::all();
        return view('homepage.horror', $data);
    }
}
