<?php

namespace App\Http\Controllers;

use App\Models\Inscricao;
use Illuminate\Http\Request;

class InscricaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        $inscricoes = $user->candidato->inscricoes;
        return view('inscricaos.index', compact('inscricoes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inscricao  $inscricao
     * @return \Illuminate\Http\Response
     */
    public function show(Inscricao $inscricao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inscricao  $inscricao
     * @return \Illuminate\Http\Response
     */
    public function edit(Inscricao $inscricao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inscricao  $inscricao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inscricao $inscricao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inscricao  $inscricao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inscricao $inscricao)
    {
        //
    }
}
