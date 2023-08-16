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
        Schema::create('tin_tuc', function (Blueprint $table) {
            $table->id();
            $table->string('tieu_de', 100);
            $table->string('tieu_de_kd', 100);
            $table->text('tom_tat');
            $table->longText('noi_dung');
            $table->string('hinh_anh', 50);
            $table->string('tac_gia', 30);
            $table->string('tags', 20);
            $table->integer('luot_xem');
            $table->bigInteger('id_LT');
            $table->timestamps();
            // $table->foreign('id_LT')->references('id')->on('loai_tin');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tin_tuc');
    }
};