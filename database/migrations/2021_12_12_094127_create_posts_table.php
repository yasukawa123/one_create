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
            // $table->increments('id');
            // $table->timestamps();   // created_at, updated_atが自動設定されるとのこと
            // $table->string('is_deleted', 4)->default('0');
            // $table->integer('category_id');
            // $table->string('subject');
            // $table->text('message');
            // $table->string('name');
            // $table->integer('price');
            // $table->string('project _image')->default('default.png');
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
