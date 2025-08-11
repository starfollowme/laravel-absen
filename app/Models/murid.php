<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Murid extends Model
{
    use HasFactory;

    protected $table = 'murid';
    protected $primaryKey = 'MuridID';

    protected $fillable = [
        'NIS',
        'NamaMurid',
        'Kelas',
        'Alamat',
        'TanggalLahir'
    ];
}
