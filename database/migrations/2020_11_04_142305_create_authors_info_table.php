<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors_info', function (Blueprint $table) {
            $table->foreignId("author_id")->constrained();
            $table->string("nationality", 50);
            $table->text("biography", 1000);
            $table->string('photo')->default('https://image.shutterstock.com/image-illustration/very-big-size-man-without-260nw-126920099.jpg');
            $table->tinyInteger("total_production");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('authors_info');
    }
}
