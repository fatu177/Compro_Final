<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
        $title = "Tambah Profile";
        return view('profile.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'profession' => 'required',
            'email' => 'required',
            'birthday' => 'required',
            'phone' => 'nullable',
            'address' => 'required',
            'github' => 'nullable',
            'linkedin' => 'nullable',
            'twitter' => 'nullable',
            'facebook' => 'nullable',
            'instagram' => 'nullable',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
        ]);

        // Ambil file gambar dari input
        $image = $request->file('image');

        // Tentukan nama file dengan waktu saat ini dan ekstensi asli
        $imageName = time() . '.' . $image->getClientOriginalExtension();

        // Pindahkan file gambar ke direktori public/images
        $image->move(public_path('images'), $imageName);

        // Buat array data dengan semua inputan request dan tambahkan nilai image
        $data = $request->all();
        $data['image'] = $imageName;

        // Simpan data ke dalam database
        Profile::create($data);

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
        $title = "Edit Profile";
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
            'profession' => 'required',
            'email' => 'required',
            'birthday' => 'required',
            'phone' => 'nullable',
            'address' => 'required',
            'github' => 'nullable',
            'linkedin' => 'nullable',
            'twitter' => 'nullable',
            'facebook' => 'nullable',
            'instagram' => 'nullable',
            'description' => 'required',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
        ]);
        $Profile = Profile::find($id);

        // Buat array data dengan semua inputan request dan tambahkan nilai image
        $data = $request->all();
        if ($request->file('image')) {
            $request->validate([
                'name' => 'required'
            ]);
            $imagePath = public_path('images/' . $Profile->image);
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
        $Profile->update($data);
        return redirect()->route('profile.index')->with('massage', 'tambah Profile berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Profile = Profile::find($id);
        $imagePath = public_path('images/' . $Profile->image);
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }
        $Profile->delete();
        return redirect()->route('profile.index')->with('massage', 'Profile berhasil dihapus');
    }
}
