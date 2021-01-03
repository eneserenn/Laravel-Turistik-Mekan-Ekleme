<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('title',200);
            $table->string('keywords',200)->nullable();
            $table->string('description',200)->nullable();
            $table->string('company',200)->nullable();
            $table->string('address',200)->nullable();
            $table->string('phone',200)->nullable();
            $table->string('fax',50)->nullable();
            $table->string('email',50)->nullable();
            $table->string('smtpserver',50)->nullable();
            $table->string('smtpemail',50)->nullable();
            $table->string('smtppassword',80)->nullable();
            $table->integer('setport')->nullable()->default(0);
            $table->string('facebook',200)->nullable();
            $table->string('instagram',200)->nullable();
            $table->string('twitter',200)->nullable();
            $table->string('youtube',200)->nullable();
            $table->text('aboutus')->nullable();
            $table->text('contact')->nullable();
            $table->text('references')->nullable();
            $table->string('status',200)->nullable()->default('false');
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
        Schema::dropIfExists('settings');
    }
}
