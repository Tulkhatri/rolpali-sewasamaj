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
        Schema::create('aboutuses', function (Blueprint $table) {
            $table->id();
            $table->string('aboutus_title')->nullable();
            $table->text('aboutus_detail')->nullable();
            $table->string('aboutus_image')->nullable();
            $table->string('chairman_image')->nullable();
            $table->text('chairman_message')->nullable();

            $table->string('vision_title')->nullable();
            $table->text('vision_detail')->nullable();
            $table->string('vision_image')->nullable();

            $table->string('mission_short_quote')->nullable();

            $table->string('mission1_title')->nullable();
            $table->text('mission1_detail')->nullable();
            $table->string('mission1_image')->nullable();

            $table->string('mission2_title')->nullable();
            $table->text('mission2_detail')->nullable();
            $table->string('mission2_image')->nullable();

            $table->string('mission3_title')->nullable();
            $table->text('mission3_detail')->nullable();
            $table->string('mission3_image')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aboutuses');
    }
};
