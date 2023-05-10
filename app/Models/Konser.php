<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;

class Konser extends Model
{
    use HasFactory, Uuids;
    protected $table = 'konser';
    public $primaryKey = 'id';
    protected $fillable = [
        'nama_konser',
        'tgl_konser'
    ];
}
