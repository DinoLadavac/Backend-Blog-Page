<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    //Function that defines the attributes of the model Post
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('title');
            $table->foreignId('user_id');
            $table->text('excerpt');
            $table->text('body'); 
            $table->string('tags',50);
            $table->string('coverimage')->nullable();
            $table->timestamps();
            $table->timestamp('published_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
