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
        Schema::create('chamados', function (Blueprint $table) {
            $table->id();
            $table->string('categoria')->nullable();
            $table->string('prioridade')->nullable();
            $table->string('status')->nullable();
            $table->string('mensagem', 1000)->nullable();
            $table->integer('responsavel_id')->nullable();
            $table->foreign('responsavel_id')->references('id')->on('responsavel')->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chamados');
    }
};
