<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'abilities'
    ];

    protected $casts = [
        'abilities' => 'array',
    ];

    public function admins()
    {
        return $this->belongsToMany(Admin::class, 'role_user');
    }

    public function pivot(){
        return $this->hasMany(RoleUser::class, 'role_id');
    }
}
