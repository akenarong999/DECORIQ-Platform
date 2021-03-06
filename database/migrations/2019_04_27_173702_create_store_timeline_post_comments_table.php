<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoreTimelinePostCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_timeline_post_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('store_timeline_post_id')->unsigned()->nullable(); // where post available.
            $table->integer('commentator_user_id')->unsigned()->nullable();
            $table->string('message');
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
        Schema::dropIfExists('store_timeline_post_comments');
    }
}
