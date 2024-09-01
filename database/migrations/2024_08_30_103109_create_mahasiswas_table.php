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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('jenis_kelamin');
            $table->string('status');
            $table->string('umur');
            $table->string('status_nikah');
            $table->string('ips1');
            $table->string('ips2');
            $table->string('ips3');
            $table->string('ips4');
            $table->string('ips5');
            $table->string('ips6');
            $table->string('ips7');
            $table->string('ips8');
            $table->string('ipk');
            $table->string('status_kelulusan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
