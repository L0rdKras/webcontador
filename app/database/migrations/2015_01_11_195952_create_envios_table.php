<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEnviosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('envios', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			//$table->integer('documento_id');
			$table->enum('estado',['no enviado','enviado']);
			$table->date('fecha_envio')->nullable();
			$table->date('fecha_ultimo_envio')->nullable();
			$table->timestamps();

			//$table->foreign('user_id')->references('id')->on('users');
			//$table->foreign('documento_id')->references('id')->on('documentos');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('envios');
	}

}
