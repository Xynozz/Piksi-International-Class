<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Profile;
use App\Models\Accreditation;
use App\Models\Achievement;
use App\Models\Faculties;
use App\Models\StudyProgram;
use App\Models\Banner;
use App\Models\Mission;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function welcome()
    {
        $news = News::paginate(6);
        $banner = Banner::all();
        $achievement = Achievement::all();
        $accreditation = Accreditation::all();
        return view('user.welcome',compact('news','accreditation','achievement', 'banner'));
    }
    public function about()
    {
        return view('about');
    }
    public function faculty()
    {
        $faculties = Faculties::all();
        $prody1 = StudyProgram::whereIn('faculty_id', [1])->get();
        $prody2 = StudyProgram::whereIn('faculty_id', [2])->get();
        $prody3 = StudyProgram::whereIn('faculty_id', [3])->get();

        return view('faculty',compact('faculties', 'prody1', 'prody2', 'prody3'));
    }
    public function structure()
    {
        return view('structure');
    }
    public function news()
    {
        $news = News::paginate(6);
        return view('news',compact('news'));
    }
    public function visimisi()
    {
        $mission = Mission::all();
        $profile = Profile::all();
        return view('visimisi',compact('profile', 'mission'));
    }
    public function newsDetail($id)
    {
        $news = News::findOrFail($id);
        return view('newsDetail',compact('news'));
    }
    public function detailprodi($id)
    {
        $prody = StudyProgram::findOrFail($id);
        return view('detailprodi',compact('prody'));
    }
    public function acreditation()
    {
        $akred = Accreditation::all();
        return view('acreditation',compact('akred'));
        return view('detailprodi');
    }
}
