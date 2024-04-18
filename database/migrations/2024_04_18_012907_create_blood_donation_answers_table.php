<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBloodDonationAnswersTable extends Migration
{
    public function up()
    {
        Schema::create('blood_donation_answers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('blood_donation_question_id');
            $table->enum('answer', ['Oui', 'Non']);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('blood_donation_question_id')->references('id')->on('blood_donation_questions')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('blood_donation_answers');
    }
}
