<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsInProblemStatement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('problem_statements', function ($table) {
            $table->integer('level');
            $table->string('category')->default('Others');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('problem_statements', function ($table) {
        $table->dropColumn('level');
        $table->dropColumn('category');
    });
    }
}
