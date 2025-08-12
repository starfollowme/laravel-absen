<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Absensi extends Model
{
    use HasFactory;

    protected $table = 'absensi';
    protected $primaryKey = 'id';

    protected $fillable = [
        'murid_id',
        'user_id',
        'tanggal',
        'jam_datang',
        'status',
        'keterangan',
    ];

    public function murid(): BelongsTo
    {
        return $this->belongsTo(Murid::class, 'murid_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}