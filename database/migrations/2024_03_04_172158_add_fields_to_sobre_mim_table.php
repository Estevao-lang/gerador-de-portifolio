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
        Schema::table('sobre_mim', function (Blueprint $table) {
            $table->text('short_description')->nullable();
            $table->text('about_yourself')->nullable();
            $table->text('additional_info')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sobre_mim', function (Blueprint $table) {
            $table->dropColumn(['short_description', 'about_yourself', 'additional_info']);
        });
    }
};
