<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntakesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intakes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dog_id');
            $table->unsignedBigInteger('intakeable_id');
            $table->string('intakeable_type');
            $table->text('health_condition');
            $table->date('intake_date'); // ->default(now());
            $table->timestamps();

            $table->index('dog_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('intakes');
    }
}
