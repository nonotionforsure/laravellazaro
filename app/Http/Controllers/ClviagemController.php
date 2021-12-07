<?php

namespace App\Http\Controllers;

use App\Models\Clviagem;
use Illuminate\Http\Request;
use App\Models\User;

class ClviagemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clviagem = Clviagem::all();
        return view("paginas/clviagem", compact('clviagem'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view("paginas/clviagem/create", compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|integer',
            'nome' => 'required|max:255',
        ]);

        if ($validated) {
            $clviagem = new Clviagem();
            $clviagem->user_id = $request->get('user_id');
            $clviagem->nome = $request->get('nome');


            $clviagem->save();
            return redirect("clviagem");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\clviagem
     * @return \Illuminate\Http\Response
     */
    public function show(Clviagem $clviagem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Clviagem
     * @return \Illuminate\Http\Response
     */
    public function edit(Clviagem $clviagem)
    {
        $users = User::all();
        return view("paginas/clviagem/edit", compact('users', 'clviagem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Clviagem  $clviagem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clviagem $clviagem)
    {
        $validated = $request->validate([
            'user_id' => 'required|integer',
            'nome' => 'required|max:255',

        ]);
        if ($validated) {
            $clviagem->user_id = $request->get('user_id');
            $clviagem->nome = $request->get('nome');

            $clviagem->save();
            return redirect("clviagem");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Clviagem  $clviagem
     * @return \Illuminate\Http\Response
     */
    public function destroy(clviagem $clviagem)
    {
        $clviagem->delete();
        return redirect("clviagem");
    }
}
