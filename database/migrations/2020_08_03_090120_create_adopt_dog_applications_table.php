<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdoptDogApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adopt_dog_applications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dog_id');
            $table->enum('does_have_other_pet', ['Yes', 'No']);
            $table->string('other_pet_breed')->nullable();
            $table->text('behavior_towards_dogs')->nullable();
            $table->enum('owned_or_rent', ['Owned', 'Rent']);
            $table->enum('does_have_a_yard', ['Yes', 'No']);
            $table->enum('is_yard_fenced', ['Yes', 'No'])->nullable();
            $table->string('landlord_name')->nullable();
            $table->unsignedInteger('landlord_contact_number')->nullable();          
            $table->longtext('references');
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
        Schema::dropIfExists('adopt_dog_applications');
    }
}
