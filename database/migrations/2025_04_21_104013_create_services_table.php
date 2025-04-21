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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained()->onDelete('cascade');
            $table->foreignId('fournisseurs_id')->constrained()->onDelete('cascade');
            $table->string('libelle');
            $table->timestamps();
        });
    }

    /**php artisan make:model Fournisseur
php artisan make:model Client
php artisan make:model Produit
php artisan make:model Employe
php artisan make:model Vente
php artisan make:model Achat
php artisan make:model Audit
php artisan make:model Caisse
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
