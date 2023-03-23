<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFamiliesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('families', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->text('full_name')->nullable();
			$table->text('nik')->nullable();
			$table->text('gender')->nullable();
			$table->text('birth_place')->nullable();
			$table->text('birth_date')->nullable();
			$table->text('religion')->nullable();
			$table->text('education')->nullable();
			$table->text('job')->nullable();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('families');
	}

}
