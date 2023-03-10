<?php

namespace App\Console\Commands;

use App\Mail\EnvioVencimento;
use App\Models\Aluno;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class EnviarEmailVencimento extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'envio:emailVencimento';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Avisar ao aluno que seu cadastro vence amanhã';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $tomorrow = Carbon::tomorrow();

        $alunos = Aluno::all();

        foreach($alunos as $aluno)
        {
            $diff = 0;
            $diff = $tomorrow->diff($aluno->data_validade);

            if($diff->days == 0)
            {
                Mail::to($aluno->email)->send(new EnvioVencimento($aluno->nome, $aluno->data_validade));
            }
        }
    }
}
