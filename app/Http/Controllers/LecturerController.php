<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Lecturer;
use App\Models\Faculties;
use App\Models\StudyProgram;
use Illuminate\Http\Request;

class LecturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lecture = Lecturer::all();
        $faculties = Faculties::all();

        return view('admin.lecture.index', compact('lecture', 'faculties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lecture = Lecturer::all();
        $faculties = Faculties::all();

        return view('admin.lecture.create', compact('lecture', 'faculties'));
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
            'lecture_name' => 'required|string|max:255',
            'faculty_id' => 'required',
            'prody_name' => 'nullable',
        ]);

        $lecture = new Lecturer();
        $lecture->lecture_name = $request->lecture_name;
        $lecture->faculty_id = $request->faculty_id;
        $lecture->prody_name = $request->prody_name;
        $lecture->save();

        return redirect()->route('lecture.index')->with('success', 'Data has been added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lecturer  $lecturer
     * @return \Illuminate\Http\Response
     */
    public function show(Lecturer $lecturer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lecturer  $lecturer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lecture = Lecturer::findOrFail($id);
        $faculties = Faculties::all();

        return view('admin.lecture.edit', compact('lecture', 'faculties'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lecturer  $lecturer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'lecture_name' => 'required|string|max:255',
            'faculty_id' => 'required',
        ]);

        $lecturer = Lecturer::findOrFail($id);
        $lecturer->lecture_name = $request->lecture_name;
        $lecturer->faculty_id = $request->faculty_id;
        $lecturer->save();

        return redirect()->route('lecture.index')->with('warning', 'Data has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lecturer  $lecturer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lecture = Lecturer::findOrFail($id);

        $lecture->delete();

        return redirect()->route('lecture.index')->with('danger', 'Data has been deleted!');
    }
}
