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
     * Display the specified resource.
     */
    public function show($id)
    {
        $resep = Resep::find($id);
        // return view('detailresep', compact('resep'));
        return view('detailresep', compact('resep'));
        // return view('share', compact('resep'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
