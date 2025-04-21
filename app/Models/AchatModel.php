<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AchatModel extends Model
{
    use HasFactory;
    protected $fillable = ['fournisseur_id', 'produit_id', 'quantite', 'montant_total','statut'];

    public function fournisseur()
    {
        return $this->belongsTo(FournisseurModel::class);
    }

    public function produit()
    {
        return $this->belongsTo(ProduisModel::class);
    }

    public function audits()
    {
        return $this->hasMany(AuditModel::class);
    }
}
