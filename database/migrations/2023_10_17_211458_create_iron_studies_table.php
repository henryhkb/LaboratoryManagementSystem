<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('iron_studies', function (Blueprint $table) {
            $table->id();
            $table->string('PATIENT_ID')->nullable();
            $table->string('DATE_OF_BIRTH')->nullable();
            $table->string('LAB_NUMBER')->nullable();
            $table->string('TODAY_DATE')->nullable();
            $table->string('GENDER')->nullable();
            $table->string('NAME')->nullable();
            $table->string('DRAWN_DATE_TIME')->nullable();
            $table->string('FERRITIN_MALE')->nullable();
            $table->string('FERRITIN_FEMALE')->nullable();
            $table->string('IRON')->nullable();
            $table->string('TIBC')->nullable();
            $table->string('FOLATE')->nullable();
            $table->string('VITAMINB12')->nullable();
            $table->string('TRANSFERING')->nullable();
            $table->string('COMMENTS')->nullable();
            $table->string('VALIDATED_BY')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('iron_studies');
    }
};
