<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurrenderAcquisitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surrender_acquisitions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('people_id');
            $table->longText('reason_of_surrender');
            $table->timestamps();

            $table->index('people_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surrender_acquisitions');
    }
}
