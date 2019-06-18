<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('display_name');
            $table->string('username');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('phone_number')->nullable();
            $table->integer('role')->default(1);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('avatar')->default('user.jpg');
            $table->string('birthday')->nullable();
            $table->boolean('share_birthday')->default(false);
            $table->string('address')->nullable();
            $table->string('country')->nullable();
            $table->boolean('share_country')->default(false);
            $table->string('language')->default('en');
            $table->string('spotify_account')->nullable();
            $table->string('soundcloud_account')->nullable();
            $table->longText('bio')->nullable();
            $table->string('fav_band')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
