<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Role extends Authenticatable
{
    use HasRoles;

    protected $table = 'user_role';
    protected $primaryKey = 'id';

    protected $fillable = ['role_id','user_id'];

}