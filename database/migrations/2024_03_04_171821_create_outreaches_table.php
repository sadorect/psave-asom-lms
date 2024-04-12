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
        Schema::create('outreaches', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('bannerImage');
            $table->text('summary');
            $table->longText('details');
            $table->string('raised')->nullable();
            $table->string('goal')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->string('destination')->nullable();
            $table->string('slug')->nullable();
            $table->text('gallery')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('outreaches');
    }
};
