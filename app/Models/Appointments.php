<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    use HasFactory;
    protected $table = 'appointments'; // Add this line if your table name is 'appointments'

    
    protected $fillable = [
        'user_id', 'doctor_id',  'date', 'message'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function doctor()
    {
        return $this->belongsTo(Admin::class, 'doctor_id', 'id');
    }

}
