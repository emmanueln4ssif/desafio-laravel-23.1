<x-app-layout>

    @include('layouts.link')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                  @can('view', $usuario)
                      <div class="card text-center" style="margin-top: 2%">
                        <div class="card-body">
                          <h5 class="card-title"><b>Funcionários</b></h5>
                          <p class="card-text">Gerencie seus funcionários</p>
                          <a href="funcionarios" class="btn btn-success">Acessar</a>
                        </div>
                      </div>

                      <div class="card text-center" style="margin-top: 2%">
                        <div class="card-body">
                          <h5 class="card-title"><b>Envio de emails</b></h5>
                          <p class="card-text">Canal de comunicação direta com os alunos</p>
                          <a href="envio_email" class="btn btn-success">Acessar</a>
                        </div>
                      </div>
                  @endcan

                      <div class="card text-center" style="margin-top: 2%">
                        <div class="card-body">
                          <h5 class="card-title"><b>Alunos</b></h5>
                          <p class="card-text">Gerencie seus alunos</p>
                          <a href="alunos" class="btn btn-success">Acessar</a>
                        </div>
                      </div>

                      <div class="card text-center" style="margin-top: 2%">
                        <div class="card-body">
                          <h5 class="card-title"><b>Aulas</b></h5>
                          <p class="card-text">Gerencie suas aulas</p>
                          <a href="aulas" class="btn btn-success">Acessar</a>
                        </div>
                      </div>
                      
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
