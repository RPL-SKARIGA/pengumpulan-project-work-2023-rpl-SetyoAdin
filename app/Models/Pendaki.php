<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaki extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $primaryKey = 'id_pendaki';
    public function statusPendakian()
    {
        return $this->hasOne(StatusPendakian::class);
    }
    public function gunung()
    {
        return $this->belongsTo(Gunung::class, 'id_gunung', 'id_gunung');
    }
}
