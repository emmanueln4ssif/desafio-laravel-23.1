<x-app-layout>

    @include('layouts.link')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Envio de emails') }}
        </h2>
    </x-slot>

    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form id="form-adicionar" action="{{ route('email.enviar') }}" method="get">

                        <div class = "texto">
                            <h6>
                                <p>Por meio deste sistema, você será capaz de se comunicar com todos os seus alunos em um único envio. Utilize esta funcionalidade para envio de promoções, comunicados e atualizações que sejam do interesse da sua comunidade.<p>
                                <p>Digite sua mensagem no campo abaixo:<p>
                            </h6>
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" placeholder="">
                                

                            </textarea>
                        </div>

                        <div style="margin-top: 2%">

                            <button type="submit" class="btn btn-primary float-right ml-1">
                                Submeter
                            </button>
            
                            <a href="{{ route('alunos.index') }}" class="btn btn-dark float-right">
                                <i class="fas fa-undo-alt"></i> Voltar
                            </a>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
