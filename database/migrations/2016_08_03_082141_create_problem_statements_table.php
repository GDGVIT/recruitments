<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProblemStatementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('problem_statements', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('domain')->unsigned();
            $table->text('problem_statement');
            $table->integer('display')->default(1); //If the problem statement is not active, switch it to 0
            $table->text('comments');
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
        Schema::drop('problem_statements');
    }
}
