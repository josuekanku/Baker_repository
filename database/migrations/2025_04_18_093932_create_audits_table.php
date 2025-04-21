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
        Schema::create('audits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vente_id')->constrained()->onDelete('cascade');
            $table->foreignId('achat_id')->nullable()->constrained()->onDelete('cascade');
            $table->decimal('montant', 8, 2);
            $table->string('type'); // 'vente' ou 'achat'
            $table->date('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('audits');
    }
};
