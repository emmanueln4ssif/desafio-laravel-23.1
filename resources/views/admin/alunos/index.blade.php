<x-app-layout>

    @include('layouts.link')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Alunos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="table-responsive-xl">
                        
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col"><h5>Nome do aluno<h5></th>
                                
                                <th scope="col" style="">
                                    <a href="{{ route('alunos.create') }}" class="btn btn-secondary float-right">
                                        <i class="fas fa-undo-alt"></i>
                                        +
                                    </a>
                                </th>
                            </tr>
                            </thead>

                            <tbody>
                                @foreach ( $alunos as $aluno )
                            <tr>
                                <td>{{$aluno->nome}}</td>
                                <td>
                                    <form action="{{ route('alunos.destroy', $aluno->id) }}" method="post">
                                        @csrf
                                        
                                        <div class="btn-group float-right" role="group" aria-label="...">
                                    
                                        <a href="{{ route('alunos.show', $aluno->id) }}" class="btn btn-dark float-right">
                                            <i class="fas fa-undo-alt">Ver</i>  
                                        </a>
                                        
                                            <a href="{{ route('alunos.edit', $aluno->id) }}" class="btn btn-secondary float-right">
                                            <i class="fas fa-undo-alt">Editar</i>  
                                        </a>

                                        <button class="btn btn-danger float-right" type="submit">
                                            <i class="fas fa-undo-alt">Excluir</i> 
                                        </button>
                                    
                                        </div>
                                    </form>
                                </td>
                                @endforeach
                            </tr>
                            </tbody>

                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>