<?php

namespace App\Http\Controllers;

use App\Models\Mission;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mission = Mission::all();
        return view('admin.profile.create', compact('mission'));
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
            'mission' => 'required',
        ]);

        $mission = new Mission();
        $mission->mission = $request->mission;
        $mission->save();

        return redirect()->route('profile.index')->with('success', 'Data has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function show(Mission $mission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mission = Mission::findOrFail($id);
        return view('admin.profile.edit', compact('missi$mission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'mission' => 'required',
        ]);

        $mission = Mission::findOrFail($id);
        $mission->mission = $request->mission;
        $mission->save();

        return redirect()->route('profile.index')->with('warning', 'Data has been updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mission = Mission::findOrFail($id);
        $mission->delete();

        return redirect()->route('profile.index')->with('danger', 'Data has been deleted successfully');
    }
}
