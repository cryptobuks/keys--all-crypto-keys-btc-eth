<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiggestRandomPagesTable extends Migration
{
    public function up()
    {
        Schema::create('biggest_random_pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('coin');
            $table->string('page_number');
            $table->timestamps();
        });
    }
}
