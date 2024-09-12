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
        Schema::create('info_section', function (Blueprint $table) {
            $table->id();
            $table->text('about_us')->nullable();
            $table->string('heading')->nullable();
            $table->text('description')->nullable();
            $table->string('box_1_heading')->nullable();
            $table->text('box_1_description')->nullable();
            $table->string('box_2_heading')->nullable();
            $table->text('box_2_description')->nullable();
            $table->string('box_3_heading')->nullable();
            $table->text('box_3_description')->nullable();
            $table->string('box_1_image')->nullable();
            $table->string('box_2_image')->nullable();
            $table->string('box_3_image')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->text('footer_about')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('linkedin_link')->nullable();
            $table->integer('events_participated')->nullable();
            $table->integer('classes_completed')->nullable();
            $table->integer('awards_won')->nullable();
            $table->integer('student_enrolled')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('info_section');
    }
};
