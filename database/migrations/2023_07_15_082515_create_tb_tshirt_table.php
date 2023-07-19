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
        Schema::create('tb_tshirt', function (Blueprint $table) {
            $table->increments('produk_id');
            $table->string('produk_name', 100);
            $table->string('produk_jenis', 50);
            $table->string('produk_harga', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_tshirt');
    }
};
