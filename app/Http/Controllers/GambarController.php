<?php

namespace App\Http\Controllers;

use App\Models\gambar;
use Illuminate\Http\Request;

class GambarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = gambar::all();

        return view('experience.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(gambar $gambar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(gambar $gambar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, gambar $gambar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(gambar $gambar)
    {
        //
    }
}
