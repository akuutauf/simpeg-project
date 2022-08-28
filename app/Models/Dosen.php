<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'dosens';
    public function jabatanSeed()
    {
        return $this->belongsTo(JabatanSeed::class);
    }
}
