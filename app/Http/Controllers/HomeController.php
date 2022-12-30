<?php

namespace App\Http\Controllers;
// Import use Models
use App\Models\Action;
use App\Models\Banner;
use App\Models\Romance;
use App\Models\Horror;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['banner'] = Banner::paginate(1);
        $data['romance'] = Romance::latest()->paginate(6);
        $data['action'] = Action::latest()->paginate(6);
        $data['horror'] = Horror::latest()->paginate(6);
        return view('homepage.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Action $action, BannerHome $banner_home, Romance $romance)
    {
        $data['banner'] = $banner_home;
        $data['romance'] = $romance;
        $data['act'] = $action;
        return view('homepage.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Action $action, BannerHome $banner_home, Romance $romance)
    {
        return redirect()->route('index');
    }
}
