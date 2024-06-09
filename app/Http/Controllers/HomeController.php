<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\experience;
use App\Models\profile;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $experience = experience::get()->sortByDesc('end_date');
        $profile = profile::get()->last();
        $skill = Skill::get();
        $education = Education::all()->sortByDesc('end_date');
        return view('home.index', compact('profile', 'skill', 'education','experience'));
    }
}
