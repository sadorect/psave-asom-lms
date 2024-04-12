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
        Schema::table('smtp_settings', function (Blueprint $table) {
            $table->string('from_name')->nullable()->after('from_address');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('smtp_settings', function (Blueprint $table) {
            $table->dropColumn('from_name');
        });
    }
};
