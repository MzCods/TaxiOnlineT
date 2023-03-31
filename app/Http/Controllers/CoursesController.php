<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    //
    public function create(Request $request)
    {
        return view('Admin.dashboard');
    }
    public function store(Request $request)
    {
         Courses::create([
            'departZone' => $request->debut,
            'arriverZone' => $request->fin,
            'prix' => $request->prix,
        ]);
        
        return redirect()->route('admin.home');
    }

    public function index()
    {
        $projets = Courses::all();
        return view('User.dashboard', ['courses' => $projets]);
    }

    public function delect(Request $request){
        $candidat=Courses::find($request->id);
        $candidat->delete();
        return redirect()->route('admin.home');
    }

    
}
