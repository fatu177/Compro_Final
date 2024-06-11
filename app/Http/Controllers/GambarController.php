<?php

namespace App\Http\Controllers;

use App\Models\gambar;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GambarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Gambar Project";
        $datas = Project::get();
        return view('gambar.create', compact('title', 'datas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'id_project' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
        ]);
        $image = $request->file('image');

        // Tentukan nama file dengan waktu saat ini dan ekstensi asli
        $imageName = time() . '.' . $image->getClientOriginalExtension();

        // Pindahkan file gambar ke direktori public/images
        $image->move(public_path('images'), $imageName);

        // Buat array data dengan semua inputan request dan tambahkan nilai image
        $data = $request->all();
        $data['image'] = $imageName;

        // Simpan data ke dalam database
        gambar::create($data);
        return redirect()->route('project.index');
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
    public function edit(string $id)
    {
        $title = "Edit Gambar";
        $edit = gambar::find($id);
        $datas = Project::get();
        return view('gambar.edit', compact('title', 'edit', 'datas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([

            'id_project' => 'required',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
        ]);
        $gambar = gambar::find($id);

        // Buat array data dengan semua inputan request dan tambahkan nilai image
        $data = $request->all();
        if ($request->file('image')) {
            $request->validate([
                'image' => 'required'
            ]);
            $imagePath = public_path('images/' . $gambar->image);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }

            $image = $request->file('image');

            // Tentukan nama file dengan waktu saat ini dan ekstensi asli
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Pindahkan file gambar ke direktori public/images
            $image->move(public_path('images'), $imageName);
            # code...
            $data['image'] = $imageName;
        }
        $gambar->update($data);
        return redirect()->route('project.index')->with('massage', 'tambah gambar berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gambar = gambar::find($id);
        $imagePath = public_path('images/' . $gambar->image);
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }
        $gambar->delete();
        return redirect()->route('project.index')->with('massage', 'Profile berhasil dihapus');
    }
}
