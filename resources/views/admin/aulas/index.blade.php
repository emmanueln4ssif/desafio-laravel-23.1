<x-app-layout>

    @include('layouts.link')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Minhas aulas') }}
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
                                    
                                    <th scope="col"><h6><b>Aluno<h6></th>
                                    <th scope="col"><h6><b>Início da aula<h6></th>
                                    <th scope="col"><h6><b>Término<h6></th>
                                    <th scope="col"><h6><b>Custo<h6></th>
                                    <th scope="col" style="">
                                        <a href="{{ route('aulas.create') }}" class="btn btn-secondary float-right">
                                            <i class="fas fa-undo-alt"></i>
                                            +
                                        </a>
                                    </th>
                                    
                                </tr>
                                </thead>

                                <tbody>
                                    @foreach($aulas as $aula)
                                    <tr> 

                                        @if($aula->funcionario_id == Auth::user()->id)
                                        
                                        <td>{{$aula->aluno->nome}}</td>
                                        <td>{{$aula->inicio_treino}}</td>
                                        <td>{{$aula->termino_treino}}</td>
                                        <td>R$ {{$aula->custo}}</td>
                                        <td></td>

                                        @endif
                                        
                                    </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</x-app-layout>