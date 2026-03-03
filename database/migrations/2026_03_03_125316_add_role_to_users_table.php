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
        // Provjerava da li stupac 'role' već postoji
        if (!Schema::hasColumn('users', 'role')) {
            Schema::table('users', function (Blueprint $table) {
                $table->string('role')->default('user'); // dodaje novi stupac role
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Provjerava da li stupac postoji prije nego ga briše
        if (Schema::hasColumn('users', 'role')) {
            Schema::table('users', function (Blueprint $table) {
                $table->dropColumn('role'); // briše stupac role ako se rollbacka
            });
        }
    }
};