<?php

namespace App\Listeners;

use App\Events\NovoEmail;
use App\Models\Aluno;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class EnviarEmailNovoEmail implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */


    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\NovoEmail  $event
     * @return void
     */
    public function handle(\App\Events\NovoEmail $event)
    {
        
        $mensagem = $event->mensagem;

        $alunos = Aluno::all();

        foreach($alunos as $indice => $aluno){

           $multiplicador = $indice + 1;

           Mail::to($aluno->email)
            ->later(now()->addSecond($multiplicador * 5), 
            new \App\Mail\NovoEmail($mensagem));

        }
    }
}
