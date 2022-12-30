<?php

namespace App\Http\Controllers;

use App\Models\Horror;
use Illuminate\Http\Request;

class HorrorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horror = Horror::latest()->paginate(5);
        return view('dashboard.horror.index',compact('horror'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.horror.create');
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
            'name' => 'required',
            'detail' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        Horror::create($input);
        return redirect()->route('horror.index')
            ->with('success', 'Movie Horror created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Horror  $horror
     * @return \Illuminate\Http\Response
     */
    public function show(Horror $horror)
    {
        return view('dashboard.horror.show', compact('horror'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Horror  $horror
     * @return \Illuminate\Http\Response
     */
    public function edit(Horror $horror)
    {
        return view('dashboard.horror.edit', compact('horror'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Horror  $horror
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Horror $horror)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
            // 'Actor' => 'required'
        ]);
        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        } else {
            unset($input['image']);
        }
        $horror->update($input);
        return redirect()->route('horror.index')
            ->with('success', 'Movie Horror updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Horror  $horror
     * @return \Illuminate\Http\Response
     */
    public function destroy(Horror $horror)
    {
        $horror->delete();
        return redirect()->route('horror.index')
                        ->with('success','Movie Horror deleted successfully');
    }
}
