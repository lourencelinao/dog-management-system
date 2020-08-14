<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_records', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dog_id');
            $table->unsignedBigInteger('clinic_id');
            $table->unsignedBigInteger('vet_id');
            $table->string('description');
            $table->string('diagnosis');
            $table->string('test_performed');
            $table->text('action')->nullable();
            $table->text('medications')->nullable();
            $table->text('comments')->nullable();
            $table->timestamps();

            $table->index(['dog_id', 'clinic_id', 'vet_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medical_records');
    }
}
