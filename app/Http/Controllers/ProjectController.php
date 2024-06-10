<?php

namespace App\Http\Controllers;

use App\Models\gambar;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {

        $datas = Project::all()->sortByDesc('start_date');
        $image = gambar::all()->sortBy('id_project');


        return view('project.index', compact('datas', 'image'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Project";
        return view('project.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required',

            'start_date' => 'required',
            'end_date' => 'required',
            'description' => 'required',
        ]);
        Project::create($request->all());
        return redirect()->route('project.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $Project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = "Edit Project";
        $edit = Project::find($id);
        return view('project.edit', compact('title', 'edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([

            'name' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'description' => 'required',
        ]);
        $Project = Project::find($id);
        $Project->update($request->all());
        return redirect()->route('project.index')->with('massage', 'tambah Project berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Project = Project::find($id);
        $Project->delete();
        return redirect()->route('project.index')->with('massage', 'Project berhasil dihapus');
    }
}
