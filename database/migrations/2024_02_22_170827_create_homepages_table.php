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
        Schema::create('homepages', function (Blueprint $table) {
            $table->id();
            $table->text('bannerImage');
            $table->text('bannerTitle')->nullable();
            $table->text('description')->nullable();
            $table->enum('showDonateBtn', ['yes', 'no'])->nullable()->default('yes');
            $table->string('donateBtnTxt')->default('Donate Now');
            $table->enum('showVideoBtn', ['yes', 'no'])->nullable()->default('no');
            $table->string('videoBtnTxt')->default('Watch Video');
            $table->string('videoUrl')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homepages');
    }
};
