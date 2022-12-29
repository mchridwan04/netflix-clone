<?php

namespace App\Http\Controllers;

use App\Models\Romance;
use Illuminate\Http\Request;

class RomanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $data['title'] = 'Movie Romance';
        // $data['q'] = $request->query('q');
        // $data['romance'] = Romance::where('name', 'like', '&' . $data['q'] . '%')->get();
        // return view('dashboard.romance.index', $data);
        $romance = Romance::latest()->paginate(5);
        return view('dashboard.romance.index',compact('romance'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.romance.create');
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
            'Actor' => 'required'
        ]);
        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        Romance::create($input);
        return redirect()->route('romance.index')
            ->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Romance  $romance
     * @return \Illuminate\Http\Response
     */
    public function show(Romance $romance)
    {
        return view('dashboard.romance.show', compact('romance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Romance  $romance
     * @return \Illuminate\Http\Response
     */
    public function edit(Romance $romance)
    {
        return view('dashboard.romance.edit', compact('romance'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Romance  $romance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Romance $romance)
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
        $romance->update($input);
        return redirect()->route('romance.index')
            ->with('success', 'Movie Romance updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Romance  $romance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Romance $romance)
    {
        $romance->delete();
        return redirect()->route('romance.index')
                        ->with('success','Movie Romance deleted successfully');
    }
}
