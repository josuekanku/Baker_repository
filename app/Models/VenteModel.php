<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VenteModel extends Model
{
    use HasFactory;
    
    protected $fillable = ['client_id','montant_total'];

    public function client()
    {
        return $this->belongsTo(ClientModel::class);
    }
}
/*
            $table->foreignId('client_id')->constrained()->onDelete('cascade');
            $table->decimal('montant_total', 8, 2);
            $table->string('statut');
*/