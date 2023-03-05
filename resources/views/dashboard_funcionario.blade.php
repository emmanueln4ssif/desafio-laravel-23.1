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
                    
                        <div class="col-sm-6">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title"><b>Alunos</b></h5>
                              <p class="card-text">Gerencie seus alunos</p>
                              <a href="alunos" class="btn btn-success">Acessar</a>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                          <div class="card">
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
    </div>
</x-app-layout>