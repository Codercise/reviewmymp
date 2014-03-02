<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//Create Members (of parliament) table
		Schema::create('members', function($t){
			$t->increments('id');
			$t->string('name', 80);
			$t->string('email', 150);
			$t->string('phone', 20);
			$t->string('address', 100);
			$t->string('electorate', 35);
			$t->string('area_of_government', 7);
			$t->string('ministry', 128);
			$t->string('state', 35);
			$t->string('country', 25);
			$t->binary('image');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
