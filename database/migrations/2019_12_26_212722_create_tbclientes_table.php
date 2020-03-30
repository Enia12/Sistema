<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbclientesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbclientes', function(Blueprint $table)
		{
			$table->integer('idClientes', true);
			$table->string('NomeCli', 45);
			$table->string('EnderecoCli', 100);
			$table->string('TelefoneCli', 45);
			$table->string('EmailCli', 60);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbclientes');
	}

}
