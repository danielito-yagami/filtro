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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_categoria');
            $table->string('nombre', 100);
            $table->string('descripcion', 200);
            $table->decimal('precio', 10, 2);
            $table->string('imagen',255);
            $table->timestamps();

            //Para crear la relacion de uno a muchos con categorias
            //Una categoria puede tener muchos productos

            $table->foreign('id_categoria')->references('id')->on('categorias')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
