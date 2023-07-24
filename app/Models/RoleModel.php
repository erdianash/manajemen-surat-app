<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Role extends Authenticatable
{
    use HasRoles;

    protected $table = 'role';
    protected $primaryKey = 'id';

    protected $fillable = ['role_name'];

}