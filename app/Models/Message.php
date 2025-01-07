<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'doctor_id', 'message', 'replay' , 'doctor_prescription', 'patient_prescription'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function getDoctorFilePathAttribute()
    {
       
        return asset('uploads/' . $this->doctor_prescription);
    }
    public function getPatientFilePathAttribute()
    {
       
        return asset('uploads/' . $this->patient_prescription);
    }

    public function doctor()
    {
        return $this->belongsTo(Admin::class, 'doctor_id', 'id');
    }
}
