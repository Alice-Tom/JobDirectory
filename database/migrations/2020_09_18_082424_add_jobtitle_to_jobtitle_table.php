<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddJobtitleToJobtitleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('=jobtitle', function (Blueprint $table) {
            $table->id();
            $table->jobtitle();
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
        Schema::table('=jobtitle', function (Blueprint $table) {
            $table->id();
            $table->jobtitle();
            $table->timestamps();
        });
    }
}
