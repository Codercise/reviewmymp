<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInitialReviewsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reviews', function($t) {
			$t->increments('id');
			$t->integer('member_id', false)->unsigned();
			$t->integer('user_id', false)->unsigned();
			$t->text('review');
			$t->foreign('member_id')->references('id')->on('members');
			$t->foreign('user_id')->references('id')->on('users');
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
