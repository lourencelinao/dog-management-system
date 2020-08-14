<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dogs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('breed')->nullable();
            $table->date('date_of_birth')->nullable();
            //$table->unsignedInteger('age')->nullable(); //idk if this row should be included since we can determine the age from DOB
            $table->enum('sex', ['Male', 'Female']);
            $table->unsignedDecimal('weight')->nullable();
            $table->string('color')->nullable();
            $table->string('marks')->nullable();
            $table->enum('aggressive', ['Yes', 'No'])->default('No');
            $table->enum('trained', ['Yes', 'No'])->default('No');
            $table->enum('status', ['Recuperating', 'Died in Care', 'Adopted', 'Euthanized', 'Transferred', 'Active'])->default('Recuperating');
            $table->text('description')->nullable(); 
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
        Schema::dropIfExists('dogs');
    }
}
