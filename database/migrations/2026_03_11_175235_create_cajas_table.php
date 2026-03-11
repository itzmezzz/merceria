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
        Schema::create('cajas', function (Blueprint $table) {
            $table->id();
                $table->dateTime('fecha_apertura')->useCurrent();
    $table->dateTime('fecha_cierre')->nullable();

    $table->decimal('monto_inicial',10,2);
    $table->decimal('monto_final',10,2)->nullable();
    $table->decimal('monto_sistema',10,2)->nullable();
    $table->decimal('diferencia',10,2)->nullable();

    $table->char('estatus',1)->default('A');

    $table->foreignId('user_id')->constrained('users');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cajas');
    }
};
