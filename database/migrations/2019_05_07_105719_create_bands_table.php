<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bands', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('bio');
            $table->string('genre_ids');
            $table->string('members');
            $table->string('email');
            $table->string('website');
            $table->string('spotify_link')->nullable();
            $table->string('soundcloud_link')->nullable();
            $table->longText('post_access')->nullable();
            $table->longText('edit_access')->nullable();
            $table->longText('admin_access')->nullable();
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
        Schema::dropIfExists('bands');
    }
}
