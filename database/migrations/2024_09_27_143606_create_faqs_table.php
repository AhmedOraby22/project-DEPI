<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaqsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
<<<<<<< HEAD
        Schema::create('faqs1', function (Blueprint $table) {
=======
        Schema::create('faq', function (Blueprint $table) {
>>>>>>> 9cbbb0c879e90d128002f0c28c3d97280d4ab73e
            $table->id();
            $table->string('question');
            $table->text('answer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faqs1');
    }
}

