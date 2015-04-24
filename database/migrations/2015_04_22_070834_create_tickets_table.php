<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tickets', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('status');
			$table->string('admin_id');
			$table->string('unit_id');
			$table->string('subject');
			$table->text('ticket');
			$table->string('worker_id');
			$table->timestamp('deadline');
			$table->timestamp('created_on');
			$table->timestamp('updated_on');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tickets');
	}

}
