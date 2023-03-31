<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Courses;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function adminHomme(){

        return view('Admin.dashboard');
    }

    public function userHomme(){
        return view('User.dashboard');
    }

    public function chauffeurHomme(){
        return view('Chauffeur.dashboard');
    }

    public function infoClient()
    {
        $projets = User::where('role', 0)->get();
        return view('Admin.infoClient', ['client' => $projets]);
       
    }

    public function infoChauffeur()
    {
        $projets = User::where('role', 1)->get();
        return view('Admin.infoChauffeur', ['chaufeure' => $projets]);
       
    }

    public function delectuser(Request $request){
        $users=User::find($request->id);
        $users->delete();
        return redirect()->route('admin.home');
    }

    
    
    

    public function taketaxi(Request $request){
        $users=User::find(auth()->user()->id);
        $users->courses()->attach($request->id,['comander' => 1]);

    }

    public function takeCourses(Request $request){
        $user = User::find($request->id);
        $user->courses()->updateExistingPivot($request->idCourses, ['comander' => 0]);

    }

    public function index()
    {
        $projets = Courses::all();
        return view('Admin.dashboard', ['courses' => $projets]);
    }

    public function indexChauffeur()
    {
        $projets = Courses::with(['users' => function ($query) {
            $query->wherePivot('comander', '=', 1);
        }])
        ->get();

        return view('Chauffeur.dashboard', ['chaufeure' => $projets]);
    }
    

}
