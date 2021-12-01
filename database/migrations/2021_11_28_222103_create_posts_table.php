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
            $table->bigIncrements('id');

            // index()いらない？20211130
            // $table->bigInteger('user_id')->usingned()->index();
            // $table->bigInteger('category_id')->unsigned()->index();
           
            $table->string('title')->nullable();
            $table->text('content')->nullable();
            $table->integer('price')->nullable();
            
            // これここ？
            // $table->integer('raiseHand')->nullable();

            $table->foreignId('user_id')
                    ->constrained()
                    ->onDelete('cascade');
            $table->foreignId('category_id')
                    ->constrained()
                    ->onDelete('cascade');
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

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
