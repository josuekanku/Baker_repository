<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuditModel extends Model
{
    use HasFactory;
    protected $fillable = ['vente_id', 'achat_id', 'montant', 'type', 'date'];

    public function vente()
    {
        return $this->belongsTo(VenteModel::class);
    }

    public function achat()
    {
        return $this->belongsTo(AchatModel::class);
    }
}
