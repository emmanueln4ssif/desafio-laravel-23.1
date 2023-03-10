<x-app-layout>

    @include('layouts.link')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastrar aula') }}
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

    <form id="form-adicionar" action="{{ route('aulas.store') }}" method="post">
                        
        @csrf

        <div class="line">

            <div class="container" style="margin-top: 5%">

                <div class = "row" style="margin-bottom: 3%">
                    <div class="col-3">
                        <label for="professor" class="required">ID: </label>
                        <input type="name" name="funcionario_id" id="funcionario_id" autofocus class="form-control" value="{{$professor->id}}" readonly>
                    </div>
                    <div class="col-9">
                        <label for="aluno" class="required">Aluno(a):</label>

                        <select class = "form-control form-select form-select-sm" name="aluno_id" id="aluno_id" required>
                            <option value = "">Selecione um aluno...</option>
                            @foreach ($alunos as $aluno)
                                <option value="{{$aluno->id}}"> {{$aluno->nome}} </option>
                            @endforeach
                        </select>

                    </div>
                </div>

                <label for="inicio_treino" class="required" style="margin-top: 1%">Início do treino: </label>
                <input type="datetime-local" name="inicio_treino" id="inicio_do_treino" autofocus class="form-control" value="{{$aula->inicio_treino}}" required>

                <label for="termino_treino" class="required" style="margin-top: 1%">Término do treino: </label>
                <input type="datetime-local" name="termino_treino" id="termino_treino" autofocus class="form-control" value="{{$aula->termino_treino}}" required>

                <label for="custo" class="required" style="margin-top: 1%">Valor do treino (R$): </label>
                <input type="number" step="any" name="custo" id="custo" autofocus class="form-control" value="{{$aula->custo}}" required>
                
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