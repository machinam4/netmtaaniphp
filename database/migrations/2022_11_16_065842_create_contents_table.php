<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('type')->nullable();
            $table->string('subcategory')->nullable();
            $table->string('link')->nullable();
            $table->string('thumbnail')->nullable();            
            $table->longtext('description')->nullable();
            $table->integer('status')->default(1);
            $table->string('item_no');            
            $table->integer('contents_sections_id');
            $table->integer('contents_categories_id');            
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
        Schema::dropIfExists('contents');
    }
}
