<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasColumn('courses', 'user_id')) {
            Schema::table('courses', function (Blueprint $table) {
                $table->foreignId('user_id')
                    ->constrained()
                    ->cascadeOnDelete();
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasColumn('courses', 'user_id')) {
            Schema::table('courses', function (Blueprint $table) {
                $table->dropConstrainedForeignId('user_id');
            });
        }
    }
};
