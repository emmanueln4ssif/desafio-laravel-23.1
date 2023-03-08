<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $funcionarios = User::all(); //pega todos os membros da tabela, como objeto
        return view('/admin.funcionarios.index', compact('funcionarios')); //olhar o caminho a partir da pasta views
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $funcionario = new User();
        return view('/admin.funcionarios.create', compact('funcionario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //armazenar do front para o back
    {
        $data = $request->all();
        User::create($data);

        return redirect()->route('funcionarios.index')->with('success', true); //dps cria succes na index
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function show(User $funcionario) //esspe parametro identifica aquele id que voce quer ver
    {
        return view('/admin.funcionarios.show', compact('funcionario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function edit(User $funcionario)
    {
        return view('/admin.funcionarios.edit', compact('funcionario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $funcionario)
    {
        $data = $request->all();

        $data['password'] = Hash::make($data['password']);
        $funcionario->update($data);

        return redirect()->route('funcionarios.index')->with('success', true);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $funcionario)
    {
        $funcionario->delete();

        return redirect()->route('funcionarios.index')->with('success', true);
    }

    public function email()
    {
        return view('admin.administradores.email'); //olhar o caminho a partir da pasta views
    }
}
