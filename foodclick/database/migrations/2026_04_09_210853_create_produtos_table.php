<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
{
    Schema::create('produtos', function (Blueprint $table) {
        $table->id();
        $table->string('nome');
        $table->decimal('preco', 10, 2);
        $table->integer('quantidade');
        $table->string('imagem')->nullable();

        $table->enum('status', ['disponivel', 'indisponivel']);

        $table->foreignId('vendedor_id')->constrained('vendedores')->cascadeOnDelete();
        $table->foreignId('tipo_produto_id')->constrained('tipo_produtos')->cascadeOnDelete();

        $table->timestamps();
    });
}
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
