<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class serviceModel extends Model
{
    use HasFactory;
    protected $fillable = ['client_id','fournisseurs_id','libelle'];

    public function client()
    {
        return $this->belongsTo(ClientModel::class);
    }
    public function fournisseur()
    {
        return $this->belongsTo(FournisseurModel::class);
    }
}
