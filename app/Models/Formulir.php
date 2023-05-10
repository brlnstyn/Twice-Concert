<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Konser;

class Formulir extends Model
{
    use HasFactory, Uuids;

    protected $table = 'formulir';
    public $primaryKey = 'id';
    protected $fillable = [
        "nama",
        "no_hp",
        "email",
        "nik",
        "ttl",
        "umur",
        "ktp",
        "tgl_pemesanan",
        "nama_konser",
        "tgl_konser",
        "status",
        "created_at",
        "updated_at"
    ];

    public function konser()
    {
        return $this->hasOne(Konser::class, 'id', 'id');
    }
}
