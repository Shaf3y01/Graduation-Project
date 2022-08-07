<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategroiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categroies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->longText('description');
            $table->tinyInteger('status')->default('0');
            $table->tinyInteger('popular')->default('0');
            $table->string('image');
            $table->string('meta_title');
            $table->string('meta_descripe');
            $table->string('meta_keyword');
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
        Schema::dropIfExists('categroies');
    }
}
