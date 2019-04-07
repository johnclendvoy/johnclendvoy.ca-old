<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSmMdLgScreenColumnsToProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->boolean('xs_screen')->default(0);
            $table->boolean('sm_screen')->default(0);
            $table->boolean('md_screen')->default(0);
            $table->boolean('lg_screen')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn('xs_screen');
            $table->dropColumn('sm_screen');
            $table->dropColumn('md_screen');
            $table->dropColumn('lg_screen');
        });
    }
}
