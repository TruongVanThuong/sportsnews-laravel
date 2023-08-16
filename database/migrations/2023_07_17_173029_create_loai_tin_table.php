<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('loai_tin', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_TL');
            $table->string('ten_LT', 50);
            $table->string('ten_LT_KD', 50);
            $table->timestamps();
            // $table->foreign('id_TL')->references('id')->on('the_loai');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loai_tin');
    }
};