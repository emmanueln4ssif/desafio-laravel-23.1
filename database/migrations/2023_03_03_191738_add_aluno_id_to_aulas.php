<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('aulas', function (Blueprint $table) {
            
            $table->unsignedBigInteger('aluno_id')->nullable();

            $table->foreign('aluno_id')->references('id')->on('alunos')->nullOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('aulas', function (Blueprint $table) {
            
            $table->dropForeign(['aluno_id']);

        });
    }
};
