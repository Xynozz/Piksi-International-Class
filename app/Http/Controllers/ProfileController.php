<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Mission;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = Profile::all();
        $mission = Mission::all();
        return view('admin.profile.index', compact('profile', 'mission'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profile = Profile::all();
        $mission = Mission::all();
        return view('admin.profile.index', compact('profile', 'mission'));
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
            'goals' => 'required',
            'vission' => 'required'
        ]);

        $profile = new Profile();
        $profile->goals = $request->goals;
        $profile->vission = $request->vission;
        $profile->save();

        return redirect()->route('profile.index')->with('success', 'Data has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = Profile::findOrFail($id);
        return view('admin.profile.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'goals' => 'required',
            'vission' => 'required'
        ]);

        $profile = Profile::findOrFail($id);
        $profile->goals = $request->goals;
        $profile->vission = $request->vission;
        $profile->save();

        return redirect()->route('profile.index')->with('warning', 'Data has been updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profile = Profile::findOrFail($id);
        $profile->delete();
        return redirect()->route('profile.index')->with('danger', 'Data has been deleted successfully');
    }
}
