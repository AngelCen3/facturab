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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->string('nombre') ; 
            $table->string('contacto') ->default('valor_predeterminado');
            $table->enum('forma_pago',  ['Contado', 'Credito']);
            $table->enum('metodo_pago', ['Efectivo', 'Tarjeta', 'Transferencia', 'Cheque']);
            $table->string('tel_celular') ->default('valor_predeterminado');
            $table->string('tel_local') ->default('valor_predeterminado');
            $table->string('correouno')->unique();
            $table->string('correodos') ->default('valor_predeterminado');
            $table->string('direccion');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
