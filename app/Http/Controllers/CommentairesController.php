<?php

namespace App\Http\Controllers;

use App\Models\Commentaires;
use Illuminate\Http\Request;

class CommentairesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commentaires = new Commentaires();
        $commentaires->Nom = request('name');
        $commentaires->Prenom = request('prenom');
        $commentaires->Email = request('email');
        $commentaires->Telephone =request('phone');
        $commentaires->Message =request('message');
        $commentaires->save();
        return redirect()->back()->with('success', 'Votre message a bien été envoyé!');
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
     * @param  \App\Models\Commentaires  $commentaires
     * @return \Illuminate\Http\Response
     */
    public function show(Commentaires $commentaires)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Commentaires  $commentaires
     * @return \Illuminate\Http\Response
     */
    public function edit(Commentaires $commentaires)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Commentaires  $commentaires
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Commentaires $commentaires)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commentaires  $commentaires
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commentaires $commentaires)
    {
        //
    }
}
