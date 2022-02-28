<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenderprofTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenderprof', function (Blueprint $table) {
            $table->id();
            $table->string('companyname');
            $table->string('pnumber');
            $table->string('email');
            $table->string('experience');
            $table->string('nature');
            $table->string('employee');
            $table->string('companies');
            $table->string('companyref');
            $table->string('pnumberref');
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
        Schema::dropIfExists('tenderprof');
    }
}
