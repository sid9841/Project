<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->string('fundraising_type');
            $table->string('zip_code');
            $table->integer('goal_amount');
            $table->string('currency');
            $table->integer('category_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            $table->foreign('category_id')->references('id')->on('categories');
            $table->string('cover_photo_video')->nullable();;
            $table->integer('raised');
            $table->integer('no_of_donors');
            $table->integer('no_of_shares');
            $table->integer('no_of_followers');

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
        Schema::dropIfExists('campaigns');
    }
}
