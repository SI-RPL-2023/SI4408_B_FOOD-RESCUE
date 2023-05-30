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
<<<<<<< HEAD
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
=======
>>>>>>> master
     * Display the specified resource.
     */
    public function show($id)
    {
        $resep = Resep::find($id);
        // return view('detailresep', compact('resep'));
        return view('detailresep', compact('resep'));
<<<<<<< HEAD
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
=======
        // return view('share', compact('resep'));
>>>>>>> master
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
