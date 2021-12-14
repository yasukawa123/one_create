<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('comments', function (Blueprint $table) {
        //     // $table->increments('id');
        //     // $table->timestamps();
        //     // $table->string('is_deleted', 4)->default('0');
        //     // $table->integer('post_id');
        //     // $table->string('name');
        //     // $table->text('comment');
        //     $table->bigIncrements('id');
    
        //      // index()いらない？20211130
        //     // $table->bigInteger('user_id')->usingned()->index();
        //     // $table->bigInteger('category_id')->unsigned()->index();
               
        //     $table->string('comment')->nullable();

        //     $table->foreignId('user_id')
        //             ->constrained()
        //             ->onDelete('cascade');
        //     $table->foreignId('post_id')
        //             ->constrained()
        //             ->onDelete('cascade');

        //     $table->timestamps();

        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->unsignedInteger('user_id')->comment('ユーザID');
            // $table->unsignedInteger('post_id')->comment('ポストID');
            $table->string('text')->comment('本文');
            $table->softDeletes();
            $table->timestamps();

            $table->index('id');
            $table->index('user_id');
            $table->index('post_id');

            $table->foreignId('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreignId('post_id')
                ->references('id')
                ->on('posts')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
