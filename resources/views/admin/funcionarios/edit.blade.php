<x-app-layout>

    @include('layouts.link')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar funcionário') }}
        </h2>
    </x-slot>

<form action="{{ route('funcionarios.update', $funcionario->id) }}" method="POST">
                    
    @csrf

<div class="line">

    <div class="container" style="margin-top: 5%">

        <label for="nome" class="required">Nome Completo: </label>
        <input type="text" name="name" id="nome" autofocus class="form-control" value="{{$funcionario->name}}">

        <label for="email" class="required">Email: </label>
        <input type="email" name="email" id="email" autofocus class="form-control" value="{{$funcionario->email}}">

        <label for="senha" class="required">Senha: </label>
        <input type="text" name="password" id="senha" autofocus class="form-control" value="{{$funcionario->password}}">

        <label for="data" class="required">Data de Nascimento: </label>
        <input type="date" name="data_nascimento" id="data_nascimento" autofocus class="form-control" value="{{$funcionario->data_nascimento}}">

        <label for="telefone" class="required">Endereço: </label>
        <input type="text" name="endereco" id="endereco" autofocus class="form-control" value="{{$funcionario->endereco}}">
        
        <label for="telefone" class="required">Telefone: </label>
        <input type="text" name="telefone" id="telefone" autofocus class="form-control" value="{{$funcionario->telefone}}">
        
        <label for="telefone" class="required">Período de trabalho: </label>
        <input type="text" name="periodo_trabalho" id="periodo_trabalho" autofocus class="form-control" value="{{$funcionario->periodo_trabalho}}">

        <div style="margin-top: 2%">
            <button type="submit" class="btn btn-primary float-right ml-1">
            <a class="">
                <i class="fa-solid fa-user-check"></i> Adicionar alterações
            </a>
            </button>

            <a href="{{ route('funcionarios.index') }}" class="btn btn-dark float-right">
                <i class="fas fa-undo-alt"></i> Voltar
            </a>
        </div>
    </div>
</div>
        
    </form> 
    
</x-app-layout>

