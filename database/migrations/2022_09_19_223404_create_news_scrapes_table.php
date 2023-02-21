<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsScrapesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_scrapes', function (Blueprint $table) {
            $table->id();
            $table->string('country')->nullable();
            $table->string('topic')->nullable();
            $table->string('channel')->nullable();
            $table->text('url');
            $table->text('thumbnail');
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
        Schema::dropIfExists('news_scrapes');
    }
}
