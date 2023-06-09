<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::create('table_pengguna', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('namaDepan', 255);
            $table->string('namaBelakang', 255);
            $table->string('lokasi', 255);
            $table->string('nohp', 255);
            $table->string('email', 255);
            $table->bigInteger('role');

            $table->string('password', 255);
            $table->string('foto')->nullable();            
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_pengguna');
    }
};
