<x-app-layout>

    @include('layouts.link')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar funcionário') }}
        </h2>
    </x-slot>

    @can('view', $leitor = Auth::user())
    <form action="{{ route('funcionarios.update', $funcionario->id) }}" method="POST">
                        
        @csrf

        <div class="line">

            <div class="container" style="margin-top: 5%">

                <label for="nome" class="required">Nome Completo: </label>
                <input type="text" name="name" id="nome" autofocus class="form-control" value="{{$funcionario->name}}">

                <label for="email" class="required" style="margin-top: 1%">Email: </label>
                <input type="email" name="email" id="email" autofocus class="form-control" value="{{$funcionario->email}}">

                <label for="senha" class="required" style="margin-top: 1%">Senha: </label>
                <input type="text" name="password" id="senha" autofocus class="form-control" value="{{$funcionario->password}}">

                <label for="data" class="required" style="margin-top: 1%">Data de Nascimento: </label>
                <input type="date" name="data_nascimento" id="data_nascimento" autofocus class="form-control" value="{{$funcionario->data_nascimento}}">

                <label for="telefone" class="required" style="margin-top: 1%">Endereço: </label>
                <input type="text" name="endereco" id="endereco" autofocus class="form-control" value="{{$funcionario->endereco}}">
                
                <label for="telefone" class="required" style="margin-top: 1%">Telefone: </label>
                <input type="text" name="telefone" id="telefone" autofocus class="form-control" value="{{$funcionario->telefone}}">
                
                <label for="telefone" class="required" style="margin-top: 1%">Período de trabalho: </label>
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
    @endcan
    
</x-app-layout>

