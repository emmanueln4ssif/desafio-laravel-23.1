<x-app-layout>

    @include('layouts.link')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Visualizar funcionário') }}
        </h2>
    </x-slot>

<div class="line">

    <div class="container" style="margin-top: 5%">

        <label for="nome" class="required" style="margin-top: 1%">Nome completo: </label>
        <input type="text" name="name" id="name" autofocus class="form-control" value="{{$funcionario->name}}" readonly>

        <label for="email" class="required" style="margin-top: 1%">Email: </label>
        <input type="email" name="email" id="email" autofocus class="form-control" value="{{$funcionario->email}}" readonly>

        <label for="senha" class="required" style="margin-top: 1%">Senha: </label>
        <input type="text" name="password" id="senha" autofocus class="form-control" value="{{$funcionario->password}}" readonly>

        <label for="data" class="required" style="margin-top: 1%">Data de nascimento: </label>
        <input type="date" name="data_nascimento" id="data_nascimento" autofocus class="form-control" value="{{$funcionario->data_nascimento}}" readonly>

        <label for="endereco" class="required" style="margin-top: 1%">Endereço: </label>
        <input type="text" name="endereco" id="endereco" autofocus class="form-control" value="{{$funcionario->endereco}}" readonly>
        
        <label for="telefone" class="required" style="margin-top: 1%">Telefone: </label>
        <input type="text" name="telefone" id="telefone" autofocus class="form-control" value="{{$funcionario->telefone}}" readonly>
        
        <label for="periodo" class="required" style="margin-top: 1%">Período de trabalho:</label>
        <input type="text" name="periodo_trabalho" id="periodo_trabalho" autofocus class="form-control" value="{{$funcionario->periodo_trabalho}}" readonly>

        <div style="margin-top: 2%">

            <a href="{{ route('funcionarios.index') }}" class="btn btn-dark float-right">
                <i class="fas fa-undo-alt"></i> Voltar
            </a>
        </div>

    </div>
</div>

</x-app-layout>