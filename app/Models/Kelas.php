<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kelas extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama_kelas',
        'jurusan',
        'tingkat',
    ];

    /**
     * Nama tabel yang terhubung dengan model ini.
     * @var string
     */
    protected $table = 'kelas';

    /**
     * Primary key untuk model ini.
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Mendefinisikan relasi one-to-many ke model Murid.
     * Satu kelas memiliki banyak murid.
     */
    public function murid(): HasMany
    {
        return $this->hasMany(Murid::class, 'kelas_id', 'id');
    }
}