<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Experience::all()->sortByDesc('start_date');

        return view('experience.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Pengalaman";
        return view('experience.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'company_name' => 'required',
            'position' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'description' => 'required',
        ]);
        Experience::create($request->all());
        return redirect()->route('experience.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Experience $Experience)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = "Edit Pengalaman";
        $Experience = Experience::find($id);
        return view('experience.edit', compact('title', 'Experience'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([

            'company_name' => 'required',
            'position' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'description' => 'required',
        ]);
        $Experience = Experience::find($id);
        $Experience->update($request->all());
        return redirect()->route('experience.index')->with('massage', 'tambah Pengalaman berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Experience = Experience::find($id);
        $Experience->delete();
        return redirect()->route('experience.index')->with('massage', 'Pengalaman berhasil dihapus');
    }
}
