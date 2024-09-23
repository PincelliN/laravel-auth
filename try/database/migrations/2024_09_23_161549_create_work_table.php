<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('works', function (Blueprint $table) {
             $table->id();
            $table->string('title',100)->unique();
            $table->string('slug',100)->unique();
            $table->string('subject',100);
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->tinyInteger('post');
            $table->tinyInteger('collaborators')->default(0);
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('work');
    }
};