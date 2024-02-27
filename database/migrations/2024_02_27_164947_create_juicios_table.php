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
        Schema::create('juicios', function (Blueprint $table) {
            $table->id();
            $table->char('IDENTIFICADOR_FICHA', 200);
            $table->char('DOCUMENTO_APRENDIZ', 200);
            $table->string('NOMBRE',    300);
            $table->string('APELLIDO', 300);
            $table->string('ESTADO', 300);
            $table->string('COMPETENCIA', 700);
            $table->string('RESULTADO', 700);
            $table->string('JUICIO', 300);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('juicios');
    }
};
