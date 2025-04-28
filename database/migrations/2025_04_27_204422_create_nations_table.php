<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('nations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cover_image'); 
            $table->string('main_image');
            $table->string('bg_image');
            $table->string('icon_image');
            $table->string('title');
            $table->text('introduction');
            $table->text('history_text_1');
            $table->string('history_image_1_1');
            $table->text('history_description_1_1');
            $table->string('history_image_1_2');
            $table->text('history_description_1_2');
            $table->text('history_text_2');
            $table->string('history_image_2_1');
            $table->text('history_description_2_1');
            $table->string('history_image_2_2');
            $table->text('history_description_2_2');
            $table->text('history_text_3');
            $table->string('history_image_3_1');
            $table->text('history_description_3_1');
            $table->string('history_image_3_2');
            $table->text('history_description_3_2');
            $table->text('history_text_4');
            $table->string('history_image_4_1');
            $table->text('history_description_4_1');
            $table->string('history_image_4_2');
            $table->text('history_description_4_2');
            $table->string('distribution_image');
            $table->string('traditional_clothing_image');
            $table->text('traditional_clothing_description');
            $table->text('music_and_culture_description');
            $table->string('video_link')->nullable();
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('nations');
    }
};
