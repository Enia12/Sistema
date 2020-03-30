<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Utilizadores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilizadores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

           // $table->integer('idutilizador', true);
           // $table->integer('nome', 50);
            // $table->integer('telefone', 100);
			//$table->string('password', 100);
        //	$table->string('Email', 100);
        //  $table->string('remember_token'100);
        //	$table->string('Activo', 45);
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utilizadores');
    }
}
