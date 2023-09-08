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
        Schema::create('murids', function (Blueprint $table) {
            // $table->id();
            $table->char('NIK',16)->unique();
            $table->string('Nama Lengkap',100);
            $table->enum('Jenis Kelamin',['P','W']);
            $table->string('Alamat',100);
            $table->char('No Hp',20);
            $table->primary('NIK');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('murids');
    }
};
