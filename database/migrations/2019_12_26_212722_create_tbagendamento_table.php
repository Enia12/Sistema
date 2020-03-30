<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbagendamentoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbagendamento', function(Blueprint $table)
		{
			$table->integer('Codagenda', true);
			$table->string('DataAgenda');
			$table->string('Hora');
			$table->string('idservico', 11);
			$table->string('idclientes', 11);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbagendamento');
	}

}
