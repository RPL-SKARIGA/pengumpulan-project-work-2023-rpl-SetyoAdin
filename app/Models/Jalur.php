<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jalur extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'lokasi_basecamp', 'tingkat_kesulitan'];

    public function gunung()
    {
        return $this->belongsTo(Gunung::class);
    }
}
