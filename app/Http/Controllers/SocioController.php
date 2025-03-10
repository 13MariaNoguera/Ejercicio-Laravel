<?php

namespace App\Http\Controllers;

use App\Models\Socio;
use App\Models\Libro;
use Illuminate\Http\Request;


class SocioController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $socios = Socio::paginate(5);
        return view('socios.index', compact('socios'));
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
    public function show(string $id)
    {
        $socio = Socio::find($id);
        $libros = $socio->libros;
        $libros = Libro::findOrFail($id)->libros;
        return view('socios.show', compact('socio'));
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
