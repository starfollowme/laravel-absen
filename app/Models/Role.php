<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'role';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'RoleID';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'RoleName',
        'RoleDescription',
    ];

    /**
     * The users that belong to the role.
     */
    public function tenagaPendidik()
    {
        return $this->belongsToMany(TenagaPendidik::class, 'tenaga_pendidik_role_mapping', 'RoleID', 'NIP');
    }
}
