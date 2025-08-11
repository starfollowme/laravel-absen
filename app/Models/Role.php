<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    use HasFactory;

    /**
     * Nama tabel yang terhubung dengan model ini.
     * Secara eksplisit kita beritahu Laravel nama tabelnya adalah 'roles'.
     *
     * @var string
     */
    protected $table = 'roles';

    /**
     * Primary key untuk model ini.
     * Kita pastikan Laravel tahu primary key-nya adalah 'id'.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Menonaktifkan auto-increment jika primary key bukan integer.
     *
     * @var bool
     */
    public $incrementing = true;

    /**
     * Relasi many-to-many ke model User.
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'role_user', 'role_id', 'user_id');
    }
}