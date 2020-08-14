<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('people_id');
            $table->longText('comment')->nullable();
            $table->enum('status', ['Open', 'Closed'])->default('Open'); //include Screening??
            $table->unsignedBigInteger('applicationable_id');
            $table->string('applicationable_type');
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
        Schema::dropIfExists('applications');
    }
}
