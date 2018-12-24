<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdddocTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adddoc', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('topic_num');
            $table->string('topic_name');
            $table->integer('subtopic_num');
            $table->string('subtopic_name');
            $table->string('subtopic_detail');
            $table->string('subtopic_result');
            $table->integer('insub_num');
            $table->string('insub_name');
            $table->string('insub_detail');
            $table->string('insub_result');
            $table->unsignedInteger('meeting_id');
            $table->foreign('meeting_id')->references('id')->on('meetings');
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
        Schema::dropIfExists('adddoc');
    }
}
