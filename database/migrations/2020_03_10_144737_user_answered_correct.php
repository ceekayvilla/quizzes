<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserAnsweredCorrect extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_correctly_answered', function(Blueprint $table){
            $table->uuid('id')->unique()->primary();
            $table->uuid('user_id');
            $table->uuid('question_id');
            $table->uuid('topic_id');
            $table->uuid('outlet_id');
            $table->timestamps();

            $table->foreign('outlet_id')->references('id')->on('outlets');
            $table->foreign('question_id')->references('id')->on('questions');
            $table->foreign('user_id')->references('id')->on('users');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_correctly_answered');
    }
}
