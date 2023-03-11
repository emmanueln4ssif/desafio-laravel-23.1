<!--
    extends: puxar conteudo de uma pagina
    sectioncontent: local do template que joga as info p ele
    component: renderizado, no caso uma tabela
        slot: as variaveis que voce renderiza
        body: a pagina em si
-->
<x-app-layout>

    @include('layouts.link')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Funcionários') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white  shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    @if(Auth::user()->id != 1)
                    Você não pode gerenciar funcionários.
                    @endif

                    <div class="table-responsive-xl">

                        <table class="table table-striped">

                            @can('view', $leitor = Auth::user())
                            
                                <thead>
                                <tr>
                                    <th scope="col"><h5>Nome do funcionário<h5></th>
                                    
                                    <th scope="col" style="">
                                        <a href="{{ route('funcionarios.create') }}" class="btn btn-secondary float-right">
                                            <i class="fas fa-undo-alt"></i>
                                            +
                                        </a>
                                    </th>
                                </tr>
                                </thead>

                                <tbody>
                                    
                                    @foreach ($funcionarios as $funcionario )
                                    @if($funcionario->id != 1 || $funcionario->name != 'Administrador')
                                        <tr>
                                            <td>{{$funcionario->name}}</td>
                                            <td>
                                                <form action="{{ route('funcionarios.destroy', $funcionario->id) }}" method="post">
                                                    @csrf
                                                        
                                                    <div class="btn-group float-right" role="group" aria-label="...">
                                                    
                                                        <a href="{{ route('funcionarios.show', $funcionario->id) }}" class="btn btn-dark float-right">
                                                            <i class="fas fa-undo-alt">Ver</i>  
                                                        </a>

                                                        <a href="{{ route('funcionarios.edit', $funcionario->id) }}" class="btn btn-secondary float-right">
                                                            <i class="fas fa-undo-alt">Editar</i>  
                                                        </a>

                                                        <button class="btn btn-danger float-right" type="submit">
                                                            <i class="fas fa-undo-alt">Excluir</i> 
                                                        </button>

                                                    </div>
                                                </form>
                                            </td>
                                        </tr>
                                    @endif
                                    @endforeach
                                
                                </tbody>
                            @endcan
                                    
                        </table>

                    </div>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
