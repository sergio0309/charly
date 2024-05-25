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
            $table->string('nombre', 50);
            $table->text('descripcion');
            $table->string('imagen');
            $table->decimal('precio', 10,2);
            $table->integer('stock');
            $table->boolean('estado')->default(true);

            $table->foreignId('categoria_id')
                ->constrained('categorias')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('proveedor_id')
                ->constrained('proveedores')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->timestamps();
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
