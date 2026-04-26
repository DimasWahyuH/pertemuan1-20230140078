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
        Schema::table('category', function (Blueprint $table) {
            // Drop constraint if exists (some drivers need dropForeign first, but SQLite is complicated)
            // It's safer to drop the column directly, or recreate table if SQLite.
            // Assuming MySQL based on .env
            $table->dropForeign(['product_id']);
            $table->dropColumn('product_id');
            // Adding unique manually might fail if there's duplicate data, but since it's asked:
            $table->unique('name');
        });

        Schema::table('product', function (Blueprint $table) {
            $table->foreignId('category_id')->nullable()->after('user_id')->constrained('category')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('product', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
            $table->dropColumn('category_id');
        });

        Schema::table('category', function (Blueprint $table) {
            $table->dropUnique(['name']);
            $table->foreignId('product_id')->nullable()->constrained('product')->cascadeOnDelete();
        });
    }
};
