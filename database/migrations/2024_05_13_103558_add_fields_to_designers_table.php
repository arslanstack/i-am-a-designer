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
            $table->text('bio')->nullable()->after('about');
            $table->string('introVideo')->nullable()->after('about');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('designers', function (Blueprint $table) {
            $table->dropColumn('bio');
            $table->dropColumn('introVideo');
        });
    }
};
