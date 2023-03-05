<x-app-layout>

    @include('layouts.link')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastrar aula') }}
        </h2>
    </x-slot>

<form id="form-adicionar" action="{{ route('aulas.store') }}" method="post">
                    
    @csrf

    <div class="line">

        <div class="container" style="margin-top: 5%">

            <label for="inicio_treino" class="required">Início do treino: </label>
            <input type="datetime-local" name="inicio_treino" id="inicio_treino" autofocus class="form-control" value="{{$aula->inicio_treino}}" required>

            <label for="termino_treino" class="required">Término do treino: </label>
            <input type="datetime-local" name="termino_treino" id="termino_treino" autofocus class="form-control" value="{{$aula->termino_treino}}" required>

            <label for="custo" class="required">Valor do treino (R$): </label>
            <input type="number" step="any" name="custo" id="custo" autofocus class="form-control" value="{{$aula->custo}}" required>

            <label for="aluno" class="required">Aluno(a):</label>
            <select class = "form-control form-select form-select-sm" name="aluno_id" id="aluno_id"  required onchange=" clientSelected() ">
                <option value = "">Selecione um aluno...</option>
                @foreach ($alunos as $aluno)
                    <option value="{{$aluno->id}}"> {{$aluno->nome}} </option>
                @endforeach
            </select>
            

            <div style="margin-top: 2%">
                <button type="submit" class="btn btn-primary float-right ml-1">
                    Adicionar
                </button>

                <a href="{{ route('aulas.index') }}" class="btn btn-dark float-right">
                    <i class="fas fa-undo-alt"></i> Voltar
                </a>
            </div>

        </div>
    </div>
</form>
</x-app-layout>