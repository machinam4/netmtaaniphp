<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Soko extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sokos', function (Blueprint $table) {
            $table->id();
            $table->integer('section_id');
            $table->string('subcategory')->nullable();
            $table->string('location')->nullable();
            $table->string('model')->nullable();
            $table->decimal('price')->nullable();
            $table->longtext('description')->nullable();            
            $table->string('name')->nullable();
            $table->integer('soko_categories_id');
            $table->integer('status')->default(1);
            $table->string('item_no');
            $table->softDeletes();
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
        //
    }
}
