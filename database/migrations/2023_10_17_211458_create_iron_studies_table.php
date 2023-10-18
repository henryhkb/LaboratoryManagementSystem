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
            $table->string('DOB');
            $table->string('LAB_NUMBER');
            $table->string('TODAY_DATE');
            $table->string('GENDER');
            $table->string('DRAWN_DATE_TIME');
            $table->string('FERRITIN');
            $table->string('IRON');
            $table->string('TIBC');
            $table->string('FOLATE');
            $table->string('VITAMINB12');
            $table->string('TRANSFERING');
            $table->string('COMMENTS');
            $table->string('VALIDATED_BY');
            $table->string('_token');
            $table->string('_method');
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
