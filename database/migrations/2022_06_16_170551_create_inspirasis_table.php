<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('inspirasi', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('judul')->nullable();
        //     $table->longText('deskripsi')->nullable();
        //     $table->enum('status',['ACTIVE','INACTIVE'])->default('ACTIVE');
        //     $table->string('gambar')->nullable();
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inspirasis');
    }
};
