<?php

namespace App\Http\Controllers;

use App\Models\Action;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ActionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $namevaribel['as name'] = from ;
        $data['title'] = 'Movie Actions';
        $data['q'] = $request->query('q');
        $data['action'] = Action::where('title', 'like', '%' . $data['q'] . '%')->get();
        return view('dashboard.action.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Add Action Movie';
        return view('dashboard.action.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required',
        ]);

        $image = $request->file('image');
        $file_name = rand(1000, 9999) . $image->getClientOriginalName();

        $img = Image::make($image->path());
        $img->resize('180', '120')
            ->save(public_path('images/action') . '/small_' . $file_name);

        $image->move('images/action', $file_name);

        $action = new Action();
        $action->title = $request->title;
        $action->image = $file_name;
        $action->description = $request->description;
        $action->save();
        return redirect()->route('action.index')->with('success', 'Action Movie added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Action  $action
     * @return \Illuminate\Http\Response
     */
    public function show(Action $action)
    {
        $data['title'] = $action->title;
        $data['action'] = $action;
        return view('action.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Action  $action
     * @return \Illuminate\Http\Response
     */
    public function edit(Action $action)
    {
        $data['title'] = 'Edit Movie Action';
        $data['action'] = $action;
        return view('dashboard.action.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Action  $action
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Action $action)
    {
        $request->validate([
            'title' => 'required',
        ]);
        if ($request->hasFile('image')) {
            $action->delete_image();
            $image = $request->file('image');
            $file_name = rand(1000, 9999) . $image->getClientOriginalName();
            $img = Image::make($image->path());
            $img->resize('180', '120')
                ->save(public_path('images/action') . '/small_' . $file_name);
            $image->move('images/action', $file_name);
            $action->image = $file_name;
        }
        $action->title = $request->title;
        $action->description = $request->description;
        $action->save();
        return redirect()->route('action.index')->with('success', 'Movie Action edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Action  $action
     * @return \Illuminate\Http\Response
     */
    public function destroy(Action $action)
    {
        $action->delete_image();
        $action->delete();
        return redirect()->route('action.index')->with('success', 'Movie Action deleted successfully');
    }
}
