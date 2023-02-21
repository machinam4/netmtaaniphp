<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adverts', function (Blueprint $table) {
            $table->id();
            $table->string('advert_no');
            $table->string('name');
            $table->string('type');
            $table->string('link');
            $table->string('owner');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->string('tags')->nullable();
            $table->string('duration');
            $table->string('status');
            $table->integer('position');
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
        Schema::dropIfExists('adverts');
    }
}
