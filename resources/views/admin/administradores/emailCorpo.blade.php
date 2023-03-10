
    @include('layouts.link')
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form id="form-adicionar" action="{{ route('enviando.email') }}" method="post">

                        @csrf

                        <div class = "texto">
                       
                        </div>

                        <div class="form-group">
                            <input class="form-control" name="mensagem" id="exampleFormControlTextarea1" rows="10" placeholder="">
                            
                                Olá, aluno!
 


                                Att, 

                                Comunicação Academia

                        </input>
                        </div>

                        <div style="margin-top: 2%">

                            <button type="submit" class="btn btn-primary float-right ml-1">
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


