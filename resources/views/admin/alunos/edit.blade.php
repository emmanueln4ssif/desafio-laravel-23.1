<x-app-layout>

    @include('layouts.link')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar aluno') }}
        </h2>
    </x-slot>

<form action="{{ route('alunos.update', $aluno->id) }}" method="POST">
                    
    @csrf

    <div class="line">

        <div class="container" style="margin-top: 5%">

            <label for="nome" class="required">Nome Completo: </label>
            <input type="text" name="nome" id="nome" autofocus class="form-control" value="{{$aluno->nome}}">

            <label for="email" class="required">Email: </label>
            <input type="email" name="email" id="email" autofocus class="form-control" value="{{$aluno->email}}">

            <label for="data" class="required">Data de Nascimento: </label>
            <input type="date" name="data_nascimento" id="data_nascimento" autofocus class="form-control" value="{{$aluno->data_nascimento}}">

            <label for="endereco" class="required">Endereço: </label>
            <input type="text" name="endereco" id="endereco" autofocus class="form-control" value="{{$aluno->endereco}}">
            
            <label for="telefone" class="required">Telefone: </label>
            <input type="text" name="telefone" id="telefone" autofocus class="form-control" value="{{$aluno->telefone}}">
            
            <label for="data_cadastro" class="required">Data de cadastro: </label>
            <input type="date" name="data_cadastro" id="data_cadastro" autofocus class="form-control" value="{{$aluno->data_cadastro}}">

            <label for="data_pagamento" class="required">Data de pagamento: </label>
            <input type="date" name="data_pagamento" id="data_pagamento" autofocus class="form-control" value="{{$aluno->data_pagamento}}">

            <label for="data_validade" class="required">Data de validade: </label>
            <input type="date" name="data_pagamento" id="data_validade" autofocus class="form-control" value="{{$aluno->data_validade}}">

        
            <div style="margin-top: 2%">
                <button type="submit" class="btn btn-primary float-right ml-1">
                    <a class="">
                        <i class="fa-solid fa-user-check">Adicionar alterações</i> 
                    </a>
                </button>

                <a href="{{ route('alunos.index') }}" class="btn btn-dark float-right">
                    <i class="fas fa-undo-alt"></i> Voltar
                </a>
                
            </div>
        </div>
    </div>  
</form>  

</x-app-layout>

