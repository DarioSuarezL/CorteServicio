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
        Schema::table('coordenadas', function (Blueprint $table) {
            $table->unsignedInteger('codigo_unidad_vecinal');
            $table->unsignedInteger('cantidad_facturas');
            $table->string('UMZ');
            $table->string('tipo_de_red')->default('Domestica');
            $table->string('codigo_factura');
            $table->float('importe_factura');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('coordenadas', function (Blueprint $table) {
            //
        });
    }
};
