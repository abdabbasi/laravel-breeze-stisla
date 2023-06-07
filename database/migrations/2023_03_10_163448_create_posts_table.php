<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->text('head')->nullable();
            $table->longText('body')->nullable();
            $table->string('img')->default('def.png')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->string('slider')->nullable();
            $table->string('tags')->nullable();
            $table->integer('views')->default(0)->nullable();
            $table->integer('draft')->default(0)->nullable();
            $table->longText('files')->nullable();
            $table->string('slug')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
