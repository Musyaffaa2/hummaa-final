<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Update existing records
        DB::table('question_types')
            ->where('type', 'Pilihan Ganda')
            ->update(['type' => 'multiple_choice']);

        DB::table('question_types')
            ->where('type', 'Isian Singkat')
            ->update(['type' => 'essay']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Rollback to original values
        DB::table('question_types')
            ->where('type', 'multiple_choice')
            ->update(['type' => 'Pilihan Ganda']);

        DB::table('question_types')
            ->where('type', 'essay')
            ->update(['type' => 'Isian Singkat']);
    }
};