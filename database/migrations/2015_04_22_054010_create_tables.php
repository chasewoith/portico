<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('units', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('unit_number');
			$table->string('beds');
			$table->string('baths');
			$table->string('detectors');
			$table->text('notes');
			$table->timestamp('painted_on');
			$table->timestamp('carpeted_on');
		});
		Schema::create('tenants', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('status');
			$table->string('unit_id');
			$table->string('lease_id');
			$table->string('fname');
			$table->string('lname');
			$table->string('phone');
			$table->string('phone_alt');
			$table->string('email');
			$table->text('notes');
			$table->string('cosigner');
			$table->string('parking_id');
			$table->string('storage_id');
			$table->string('pet');
			$table->timestamp('move_in');
			$table->timestamp('move_out');
		});
		Schema::create('storage', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('location');
			$table->string('price');
			$table->text('notes');
			$table->timestamp('rented_on');
		});
		Schema::create('parking', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('location');
			$table->string('plate');
			$table->string('make');
			$table->string('model');
			$table->string('color');
			$table->string('price');
			$table->text('notes');
			$table->timestamp('rented_on');
		});
		Schema::create('leases', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('status');
			$table->string('unit_id');
			$table->text('tenants');
			$table->string('price');
			$table->string('sec_deposit');
			$table->string('ncf_deposit');
			$table->string('pet_deposit');
			$table->string('lmr_deposit');
			$table->timestamp('deposit_collected_on');
			$table->timestamp('deposited_on');
			$table->text('notes');
			$table->timestamp('start_date');
			$table->timestamp('expire_date');
		});
		Schema::create('buildings', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('address');
			$table->text('logo');
			$table->string('utilities');
			$table->string('app_fee');
			$table->string('bank');
			$table->string('manager_id');
		});
		Schema::create('workers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('company');
			$table->string('contact');
			$table->string('phone');
			$table->string('utility');
			$table->string('email');
			$table->text('notes');
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
		Schema::drop('units');
		Schema::drop('tenants');
		Schema::drop('storage');
		Schema::drop('parking');
		Schema::drop('leases');
		Schema::drop('buildings');
		Schema::drop('workers');
	}

}
