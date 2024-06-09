<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Skill::all()->sortByDesc('start_date');

        return view('skill.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Kemampuan";
        return view('skill.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required',
            'level' => 'required',
        ]);
        Skill::create($request->all());
        return redirect()->route('skill.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Skill $Skill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = "Edit Kemampuan";
        $edit = Skill::find($id);
        return view('skill.edit', compact('title', 'edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([

            'name' => 'required',
            'level' => 'required',
        ]);
        $Skill = Skill::find($id);
        $Skill->update($request->all());
        return redirect()->route('skill.index')->with('massage', 'tambah Kemampuan berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Skill = Skill::find($id);
        $Skill->delete();
        return redirect()->route('skill.index')->with('massage', 'Kemampuan berhasil dihapus');
    }
}
