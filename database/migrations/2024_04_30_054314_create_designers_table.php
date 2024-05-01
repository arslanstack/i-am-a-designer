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
        Schema::create('designers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->string('phone')->nullable();
            $table->string('image')->nullable();
            $table->string('cover_image')->nullable();
            $table->string('resume')->nullable();
            $table->mediumText('about')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('view_count')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->tinyInteger('open')->default(1)->comment('0=Open to work, 1=Not open to work');
            $table->tinyInteger('status')->default(1)->comment('0=Inactive, 1=Active');
            $table->tinyInteger('premium')->default(0)->comment('0=Free, 1=Pro');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('designers');
    }
};
