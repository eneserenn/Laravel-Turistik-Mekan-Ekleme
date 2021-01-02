<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer("category_id");
            $table->string("title",150);
            $table->string("keywords",250)->nullable();
            $table->string("description",250)->nullable();
            $table->string("image",100)->nullable();
            $table->string("slug",100);
            $table->integer("user_id");
            $table->text("detail")->nullable();
            $table->float("point")->nullable();
            $table->text("country")->nullable();
            $table->float("entry_payment")->nullable();
            $table->string("status",5)->default('false')->nullable();
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
        Schema::dropIfExists('places');
    }
}
