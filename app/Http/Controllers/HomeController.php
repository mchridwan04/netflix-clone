<?php

namespace App\Http\Controllers;

use App\Models\Action;
use App\Models\BannerHome;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $banner_home = BannerHome::latest();
        // $action = Action::all();
        // // return view('home',compact('hero_section'));
        // $data["banner_home"]=$banner_home;
        // $data["action"]=$action;
        $data['action'] = Action::paginate(6);
        $data['banner_home'] = BannerHome::paginate(1);
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
    public function show(Action $action, BannerHome $banner_home)
    {
        // $data['banner_home'] = $banner_home;
        // $data['title'] = $action->title;
        // $data['action'] = $action;
        // return view('homepage.index', $data);
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
    public function destroy($id)
    {
        //
    }
}
