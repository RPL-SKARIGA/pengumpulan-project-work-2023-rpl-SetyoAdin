<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gunung extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $primaryKey = 'id_gunung';
    public function jalurGunung()
    {
        return $this->hasOne(JalurGunung::class);
    }
    protected $fillable = ['nama', 'lokasi', 'ketinggian', 'deskripsi'];

    // Model Gunung

    public function jalurs()
    {
        return $this->hasMany(Jalur::class, 'jalur_pendakians');
    }
    public function gunung()
    {
        return $this->belongsTo(Gunung::class, 'id_gunung', 'id_gunung');
    }
    public function pendakis()
    {
        return $this->hasMany(Pendaki::class, 'gunung_id');
    }
}
