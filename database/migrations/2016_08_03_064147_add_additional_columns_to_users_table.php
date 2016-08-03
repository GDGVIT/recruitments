<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAdditionalColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function ($table) {
            $table->integer('role')->default(0);
            $table->integer('domain');
            /*
             * 1->Technical
             * 2->Management
             * 3->Design
             * */
            $table->string('regno',10)->unique();
            $table->text('why_gdg');
            $table->text('experience');
            $table->text('linkedin')->nullable()->default(NULL);
            $table->text('github')->nullable()->default(NULL);
            $table->text('behance')->nullable()->default(NULL);
            $table->integer('selected')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function ($table) {
            $table->dropColumn('regno');
            $table->dropColumn('why_gdg');
            $table->dropColumn('experience');
            $table->dropColumn('linkedin');
            $table->dropColumn('behance');
            $table->dropColumn('github');
            $table->dropColumn('selected');
        });
    }
}
