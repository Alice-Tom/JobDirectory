<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tender', function (Blueprint $table) {
            $table->id();
            $table->string('tendertitle');
            $table->string('tenderdescription');
            $table->string('file');
            $table->string('companyname');
            $table->string('tenderlocation');
            $table->string('budget');
            $table->string('fee');
            $table->string('deadline');
            $table->string('tags');
            $table->string('tendertype');
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
        Schema::dropIfExists('tender');
    }
}
