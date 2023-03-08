<x-app-layout>

@include('layouts.link')

<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Cadastrar funcionário') }}
    </h2>
</x-slot>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@can('view', $leitor = Auth::user())
<form id="form-adicionar" action="{{ route('funcionarios.store') }}" method="post">
                    
    @csrf

    <div class="line">

        <div class="container" style="margin-top: 5%">

            <label for="nome" class="required">Nome completo: </label>
            <input type="text" name="name" id="nome" autofocus class="form-control" required>

            <label for="email" class="required">Email: </label>
            <input type="email" name="email" id="email" autofocus class="form-control" required>

            <label for="senha" class="required">Senha: </label>
            <input type="text" name="password" id="senha" autofocus class="form-control" required>

            <label for="data" class="required">Data de nascimento: </label>
            <input type="date" name="data_nascimento" id="data_nascimento" autofocus class="form-control" required>

            <label for="telefone" class="required">Endereço: </label>
            <input type="text" name="endereco" id="endereco" autofocus class="form-control" required>
            
            <label for="telefone" class="required">Telefone: </label>
            <input type="text" name="telefone" id="telefone" autofocus class="form-control" required>
            
            <label for="telefone" class="required">Período de trabalho: </label>
            <input type="text" name="periodo_trabalho" id="periodo_trabalho" autofocus class="form-control" required>

            <div style="margin-top: 2%">
                <button type="submit" class="btn btn-primary float-right ml-1">
                    Adicionar
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