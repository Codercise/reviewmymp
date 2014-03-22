<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyReviewTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('reviews', function($t) {
			$t->dropColumn('review');
			$t->string('responses', 2);
			$t->string('promises', 2);
			$t->string('community', 2);
			$t->string('knowledge', 2);
			$t->text('additional_review', 550);
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
