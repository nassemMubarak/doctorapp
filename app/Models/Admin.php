<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Admin extends User
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guard = 'admin';

    protected $fillable = [
        'name',
        'email',
        'password',
        'image_url',
        'description',
        'specialization',
        'specialization_desc',
        'years_of_experience',
        'city',
        'country_of_graduation',
        'gender',
        'type',
        'age',
        'appointments'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getImagePathAttribute()
    {
        if($this->image_url == null){
            return asset('assets/admin/assets/media/users/blank.png');
        }
        return asset('uploads/' . $this->image_url);
    }

    public function hasAbility($ability){
        foreach ($this->roles as $role){
            if (in_array($ability, $role->abilities)){
                return true;
            }
        }
        return false;
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_user');
    }

    public function pivot(){
        return $this->hasMany(RoleUser::class, 'admin_id');
    }

    public function news()
    {
        return $this->hasMany(News::class, 'doctor_id');
    }

    public function appointments()
    {
        return $this->hasMany(Appointments::class, 'doctor_id', 'id');
    }
}
