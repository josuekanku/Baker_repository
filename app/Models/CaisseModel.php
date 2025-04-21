<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaisseModel extends Model
{
    use HasFactory;
    protected $fillable = ['montant_total'];
    public function client()
    {
        return $this->belongsTo(ClientModel::class);
    }
}
