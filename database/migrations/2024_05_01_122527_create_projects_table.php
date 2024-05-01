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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('designer_id')->unsigned();
            $table->string('title');
            $table->string('slug');
            $table->string('banner');
            $table->text('description');
            $table->mediumText('images');
            $table->mediumText('videos');
            $table->integer('views')->default(0);
            $table->integer('likes')->default(0);
            $table->integer('saves')->default(0);
            $table->tinyInteger('status')->default(1)->comment('1=active, 0=inactive');
            $table->tinyInteger('is_featured')->default(0)->comment('1=featured, 0=not featured');
            $table->tinyInteger('is_published')->default(1)->comment('1=published, 0=unpublished');
            $table->foreign('designer_id')->references('id')->on('designers')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
