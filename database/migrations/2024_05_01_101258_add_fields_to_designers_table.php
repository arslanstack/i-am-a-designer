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
        Schema::table('designers', function (Blueprint $table) {
            $table->string('facebook')->nullable()->after('country');
            $table->string('instagram')->nullable()->after('country');
            $table->string('dribbble')->nullable()->after('country');
            $table->string('pinterest')->nullable()->after('country');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('designers', function (Blueprint $table) {
            $table->dropColumn('facebook');
            $table->dropColumn('instagram');
            $table->dropColumn('dribbble');
            $table->dropColumn('pinterest');
        });
    }
};
