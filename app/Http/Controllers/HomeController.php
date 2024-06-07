<?php

namespace App\Http\Controllers;

use App\Models\profile;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $profile = profile::get()->last();
        $skill = Skill::get();
        return view('home.index', compact('profile', 'skill'));
    }
}
