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
        Schema::create('table_pengguna', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('namaDepan', 255);
            $table->string('namaBelakang', 255);
            $table->string('lokasi', 255);
            $table->string('nohp', 255);
            $table->string('email', 255);
            $table->bigInteger('role_id');
            $table->string('password', 255);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
