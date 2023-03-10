<x-app-layout>

    @include('layouts.link')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Envio de emails') }}
        </h2>
    </x-slot>
    
    @can('view', $usuario = Auth::user())
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class = "texto">
                        <h6>
                            <p>Por meio deste sistema, você será capaz de se comunicar com todos os seus alunos em um único envio. Utilize esta funcionalidade para o envio de promoções, comunicados e atualizações que sejam do interesse da sua comunidade.<p>
                            <p>Digite o corpo do seu email no campo abaixo:<p>
                        </h6>
                    </div>

                    <form id="form-adicionar" action="{{ route('enviando.email') }}" method="post">

                        @csrf

                        <div class="form-group">
                            <input class="form-control" name="mensagem" id="exampleFormControlTextarea1" rows="10" placeholder=""></input>
                        </div>

                        <div style="margin-top: 2%">

                            <button type="submit" class="btn btn-primary float-right ml-1" style="margin-bottom: 2%">
                                Submeter
                            </button>
            
                            <a href="{{ route('dashboard') }}" class="btn btn-dark float-right">
                                <i class="fas fa-undo-alt"></i> Voltar
                            </a>

                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
    @endcan

</x-app-layout>