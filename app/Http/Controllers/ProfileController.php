<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Profile::all()->sortByDesc('start_date');

        return view('profile.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Pengalaman";
        return view('profile.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required',
            'email' => 'required',
            'birthday' => 'required',
            'phone' =>   'nullable',
            'address' => 'required',
            'github' =>   'nullable',
            'linkedin' =>   'nullable',
            'twitter' =>   'nullable',
            'facebook' =>   'nullable',
            'instagram' =>   'nullable',
            'description' => 'required',
        ]);
        Profile::create($request->all());
        return redirect()->route('profile.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Profile $Profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = "Edit Pengalaman";
        $edit = Profile::find($id);
        return view('profile.edit', compact('title', 'edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([


            'name' => 'required',
            'email' => 'required',
            'birthday' => 'required',
            'phone' =>   'nullable',
            'address' => 'required',
            'github' =>   'nullable',
            'linkedin' =>   'nullable',
            'twitter' =>   'nullable',
            'facebook' =>   'nullable',
            'instagram' =>   'nullable',
            'description' => 'required',
        ]);
        $Profile = Profile::find($id);
        $Profile->update($request->all());
        return redirect()->route('profile.index')->with('massage', 'tambah Pengalaman berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Profile = Profile::find($id);
        $Profile->delete();
        return redirect()->route('profile.index')->with('massage', 'Pengalaman berhasil dihapus');
    }
}
