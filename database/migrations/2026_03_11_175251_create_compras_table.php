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
        Schema::create('compras', function (Blueprint $table) {
            $table->id();
                $table->dateTime('fecha')->useCurrent();
    $table->decimal('total',10,2);

    $table->foreignId('proveedor_id')->constrained('proovedors');
    $table->foreignId('usuario_id')->constrained('users');

    $table->char('estatus',1)->default('A');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compras');
    }
};
