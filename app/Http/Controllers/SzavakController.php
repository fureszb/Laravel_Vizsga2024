<?php

namespace App\Http\Controllers;

use App\Models\Szavak;
use App\Models\Tema;
use Illuminate\Http\Request;

class SzavakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $temak = Tema::all();
        if ($request->has('temaId') && $request->temaId != '') {
            $szavak = Szavak::where('temaId', $request->temaId)->get();
        } else {
            $szavak = Szavak::all();
        }

        return view('szavak.index', compact('szavak', 'temak'));
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
    public function show(Szavak $szavak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Szavak $szavak)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Szavak $szavak)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Szavak $szavak)
    {
        //
    }

    public function temaMegSzavak()
    {
        $szavak = Szavak::with('temak')->get();
        return $szavak;
    }
}
