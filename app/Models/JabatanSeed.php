<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JabatanSeed extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function Dosen()
    {
        return $this->hasMany(Dosen::class);
    }
}
