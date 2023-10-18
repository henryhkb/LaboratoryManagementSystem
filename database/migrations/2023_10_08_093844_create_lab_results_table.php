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
        Schema::create('lab_results', function (Blueprint $table) {
            $table->id();
            $table->string('PATIENT_ID');
            $table->string('DATE_OF_BIRTH');
            $table->string('LAB_NUMBER');
            $table->string('TODAY_DATE');
            $table->string('GENDER');
            $table->string('NAME');
            $table->string('DRAWN_DATE_TIME');
            $table->string('LH');
            $table->string('FSH');
            $table->string('PROLACTIN');
            $table->string('PROGESTERONE');
            $table->string('OBSTROGEN');
            $table->string('TESTOSTERONE');
            $table->string('COMMENTS');
            $table->string('VALIDATED_BY');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lab_results');
    }
};
