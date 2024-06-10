<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\experience;
use App\Models\gambar;
use App\Models\profile;
use App\Models\Project;
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
        $project = Project::get()->sortByDesc('end_date');
        $gambar = gambar::get()->sortBy('id_project');
        return view('home.index', compact('profile', 'gambar', 'project', 'skill', 'education', 'experience'));
    }
    public function detail(string $id)
    {
        $project = Project::find($id);
        $gambar = gambar::where('id_project', $id)->get();

        return view('home.detail', compact('project', 'gambar'));
    }
}
