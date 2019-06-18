<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->longText('attendees');
            $table->longText('info');
            $table->string('type');
            $table->integer('venue_id');
            $table->boolean('presale')->default(false);
            $table->string('presale_name')->nullable();
            $table->string('presale_start')->nullable();
            $table->string('presale_end')->nullable();
            $table->string('presale_price')->nullable();
            $table->dateTime('public_start');
            $table->dateTime('public_end');
            $table->string('public_price');
            $table->dateTime('start_date');
            $table->bigInteger('genre_id');
            $table->integer('max_order_quantity');
            $table->string('cover_photo');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
