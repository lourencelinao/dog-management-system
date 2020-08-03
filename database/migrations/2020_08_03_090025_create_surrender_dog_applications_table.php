<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurrenderDogApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surrender_dog_applications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dog_id');
            $table->enum('indoor_type', ['Yes', 'No']);
            $table->unsignedInteger('years_owned');
            $table->enum('spayed_or_neutered', ['Yes', 'No']);
            $table->date('date_of_last_vet_visit')->nullable();
            $table->text('comment')->nullable();
            $table->text('reason_for_surrendering');
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
        Schema::dropIfExists('surrender_dog_applications');
    }
}
