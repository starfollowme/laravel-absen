<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;

    protected $table = 'absensi';
    protected $primaryKey = 'AbsensiID';

    protected $fillable = [
        'MuridID',
        'tanggal',
        'status'
    ];

    public function murid()
    {
        return $this->belongsTo(Murid::class, 'MuridID');
    }
}
