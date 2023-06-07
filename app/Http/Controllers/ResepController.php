<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resep;

class ResepController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $resep = Resep::all();
        return view('resep', compact('resep'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tambahresep');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi form
 
        $validatedData = $request->validate([
            'nama' => 'required|string',
            'foto' => 'required|image',
            'deskripsi' => 'required|string',
            'person' => 'required|string',
            'time' => 'required|string',
            'ingredients' => 'required|string',
            'steps' => 'required|string',
        ]);

        $photoPath = $request->file('foto')->store('photos', 'public');


        $resep = Resep::create([
            'nama' => $validatedData['nama'],
            'foto' => $photoPath,
            'deskripsi' => $validatedData['deskripsi'],
            'person' => $validatedData['person'],
            'time' => $validatedData['time'],
            'ingredients' => $validatedData['ingredients'],
            'steps' => $validatedData['steps'],
        ]);
        $resep->save();
         // Redirect ke halaman sukses atau halaman lainnya
        return redirect('/resep')->with('success', 'Resep berhasil ditambahkan!');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $resep = Resep::find($id);
        // return view('detailresep', compact('resep'));
        return view('detailresep', compact('resep'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
