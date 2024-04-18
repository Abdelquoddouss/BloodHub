<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('blood_donation_questions', function (Blueprint $table) {
            $table->id();
            $table->string('question');
            $table->enum('answer', ['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-', 'Oui', 'Non']);
            $table->boolean('is_correct')->default(false);
            $table->timestamps();
        });
    

    }
    
    public function down(): void
    {
        Schema::dropIfExists('blood_donation_questions');
    }
    
};
