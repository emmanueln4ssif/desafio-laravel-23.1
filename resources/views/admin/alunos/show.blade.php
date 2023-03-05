<x-app-layout>

    @include('layouts.link')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Visualizar aluno') }}
        </h2>
    </x-slot>

<div class="line">

    <div class="container" style="margin-top: 5%">

        <label for="nome" class="required">Nome Completo: </label>
        <input type="text" name="nome" id="nome" autofocus class="form-control" value="{{$aluno->nome}}" readonly>

        <label for="email" class="required">Email: </label>
        <input type="email" name="email" id="email" autofocus class="form-control" value="{{$aluno->email}}" readonly>

        <label for="data" class="required">Data de Nascimento: </label>
        <input type="date" name="data_nascimento" id="data_nascimento" autofocus class="form-control" value="{{$aluno->data_nascimento}}" readonly>

        <label for="endereco" class="required">Endereço: </label>
        <input type="text" name="endereco" id="endereco" autofocus class="form-control" value="{{$aluno->endereco}}" readonly>
        
        <label for="telefone" class="required">Telefone: </label>
        <input type="text" name="telefone" id="telefone" autofocus class="form-control" value="{{$aluno->telefone}}" readonly>
        
        <label for="data_cadastro" class="required">Data de cadastro: </label>
        <input type="date" name="data_cadastro" id="data_cadastro" autofocus class="form-control" value="{{$aluno->data_cadastro}}" readonly>

        <label for="data_pagamento" class="required">Data de pagamento: </label>
        <input type="date" name="data_pagamento" id="data_pagamento" autofocus class="form-control" value="{{$aluno->data_pagamento}}" readonly>

        <label for="data_validade" class="required">Data de validade: </label>
        <input type="date" name="data_pagamento" id="data_validade" autofocus class="form-control" value="{{$aluno->data_validade}}" readonly>

    
        <div style="margin-top: 2%">

            <a href="{{ route('alunos.index') }}" class="btn btn-dark float-right">
                <i class="fas fa-undo-alt"></i> Voltar
            </a>
            
        </div>
    </div>
</div>  

</x-app-layout>