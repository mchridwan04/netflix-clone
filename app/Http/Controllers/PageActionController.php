<?php

namespace App\Http\Controllers;

use App\Models\Action;

use Illuminate\Http\Request;

class PageActionController extends Controller
{
    public function index()
    {
        $data['banner'] = Action::latest()->paginate(1);
        $data['action'] = Action::all();
        return view('homepage.action', $data);
    }
}
