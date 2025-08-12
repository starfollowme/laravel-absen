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
     * @var string
     */
    protected $table = 'roles';

    protected $fillable = [
        'role_name',
        'role_description',
    ];

    /**
     * Relasi many-to-many ke model User.
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'role_user', 'role_id', 'user_id');
    }
}
