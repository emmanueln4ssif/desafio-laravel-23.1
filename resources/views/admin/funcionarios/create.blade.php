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

                <label for="email" class="required" style="margin-top: 1%">Email: </label>
                <input type="email" name="email" id="email" autofocus class="form-control" required>

                <label for="senha" class="required" style="margin-top: 1%">Senha: </label>
                <input type="text" name="password" id="senha" autofocus class="form-control" required>

                <label for="data" class="required" style="margin-top: 1%">Data de nascimento: </label>
                <input type="date" name="data_nascimento" id="data_nascimento" autofocus class="form-control" required>

                <label for="telefone" class="required" style="margin-top: 1%">Endereço: </label>
                <input type="text" name="endereco" id="endereco" autofocus class="form-control" required>
                
                <label for="telefone" class="required" style="margin-top: 1%">Telefone: </label>
                <input type="text" name="telefone" id="telefone" autofocus class="form-control" required>
                
                <label for="telefone" class="required" style="margin-top: 1%">Período de trabalho: </label>
                <select class = "form-control form-select form-select-sm" name="periodo_trabalho" id="periodo_trabalho" required>
                    <option value = "">Selecione...</option>
                        <option value="Manhã"> Manhã </option>
                        <option value="Tarde"> Tarde </option>
                        <option value="Noite"> Noite </option>
                </select>

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