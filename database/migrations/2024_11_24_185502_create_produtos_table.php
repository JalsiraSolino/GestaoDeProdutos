<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{

    public function up(): void{
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categoria_id')->constrained('categorias')->onDelete('cascade');
            $table->float('preco');
            $table->string('estoque');
            $table->string('nome');
            $table->timestamps();
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
