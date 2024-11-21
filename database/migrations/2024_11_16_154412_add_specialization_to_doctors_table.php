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
        Schema::table('doctors', function (Blueprint $table) {
            // First check if the 'name' column exists before proceeding
            if (!Schema::hasColumn('doctors', 'name')) {
                $table->string('name')->after('id');  // Add 'name' if it doesn't exist
            }

            // Now add 'specialization' column after 'name'
            $table->string('specialization')->after('name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('doctors', function (Blueprint $table) {
            // Drop the 'specialization' column
            $table->dropColumn('specialization');

            // Optionally, drop 'name' if you don't want it anymore (comment if not needed)
            // $table->dropColumn('name');
        });
    }
};
