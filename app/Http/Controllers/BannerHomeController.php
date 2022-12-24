<?php

namespace App\Http\Controllers;

use App\Models\BannerHome;
use Illuminate\Http\Request;

// Add library for image
use Intervention\Image\Facades\Image;

class BannerHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // show in dashboard
        $data['title'] = 'Banner Home';
        $data['q'] = $request->query('q');
        $data['banner'] = BannerHome::where('title', 'like', '%' . $data['q'] . '%')->get();
        return view('dashboard.bannerhome.index', $data);

        // patch dashboard/bannerhome/index
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Function create
        $data['title'] = 'Add Banner Home';
        return view('dashboard.bannerhome.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Function Validation Create  -> Resize image

        $request->validate([
            'title' => 'required',
            'image' => 'required',
        ]);

        $image = $request->file('image');
        $file_name = rand(1000, 9999) . $image->getClientOriginalName();

        $img = Image::make($image->path());
        $img->resize('180', '120')
            ->save(public_path('images/banner') . '/small_' . $file_name);

        $image->move('images/banner', $file_name);

        $action = new BannerHome();
        $action->title = $request->title;
        $action->image = $file_name;
        $action->description = $request->description;
        $action->save();
        return redirect()->route('bannerhome.index')->with('success', 'Banner Homepage added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BannerHome  $bannerHome
     * @return \Illuminate\Http\Response
     */
    public function show(BannerHome $bannerHome)
    {
        $data['title'] = $bannerHome->title;
        $data['banner'] = $bannerHome;
        return view('bannerhome.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BannerHome  $bannerHome
     * @return \Illuminate\Http\Response
     */
    public function edit(BannerHome $bannerHome)
    {
        //
        $data['title'] = 'Edit Banner Home';
        $data['banner'] = $bannerHome;
        return view('dashboard.bannerhome.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BannerHome  $bannerHome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BannerHome $bannerHome)
    {
        $request->validate([
            'title' => 'required',
        ]);
        if ($request->hasFile('image')) {
            $bannerHome->delete_image();
            $image = $request->file('image');
            $file_name = rand(1000, 9999) . $image->getClientOriginalName();
            $img = Image::make($image->path());
            $img->resize('180', '120')
                ->save(public_path('images/banner') . '/small_' . $file_name);
            $image->move('images/banner', $file_name);
            $bannerHome->image = $file_name;
        }
        $bannerHome->title = $request->title;
        $bannerHome->description = $request->description;
        $bannerHome->save();
        return redirect()->route('bannerhome.index')->with('success', 'Movie Action edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BannerHome  $bannerHome
     * @return \Illuminate\Http\Response
     */
    public function destroy(BannerHome $bannerHome)
    {
        $bannerHome->delete_image();
        $bannerHome->delete();
        return redirect()->route('bannerhome.index')->with('success', 'BannerHome deleted successfully');
    }
}
