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
        Schema::table('makanans', function (Blueprint $table) {
            $table->string('id_pengunggah')->after('availability')->nullable();
        });

        Schema::table('makanans', function (Blueprint $table) {
            $table->string('user_pengunggah')->after('availability')->nullable();
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
