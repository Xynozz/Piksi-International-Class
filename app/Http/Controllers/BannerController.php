<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner = Banner::all();
        return view('admin.banner.index', compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $banner = Banner::all();
        return view('admin.banner.create', compact('banner'));
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
            'banner_picture' => 'required',
        ]);

        $banner = new Banner();
        if ($request->hasFile('banner_picture')) {
            $img = $request->file('banner_picture');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/banner_picture/', $name);
            $banner->banner_picture = $name;
        }

        $banner->save();

        return redirect()->route('banner.index')->with('success', 'Data has been added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banner = Banner::findOrFail($id);
        return view('admin.banner.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'banner_picture' => 'required',
        ]);

        $banner = Banner::findOrFail($id);
        if ($request->hasFile('banner_picture')) {
            $banner->deleteImage();
            $img = $request->file('banner_picture');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/banner_picture/', $name);
            $banner->banner_picture = $name;
        }
        $banner->save();

        return redirect()->route('banner.index')->with('warning', 'Data has been updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);
        $banner->delete();
        $banner->deleteImage();

        return redirect()->route('banner.index')->with('danger', 'Data has been deleted successfully!');
    }
}
