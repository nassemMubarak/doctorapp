<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'image_url', 'doctor_id'
    ];

    public function getImagePathAttribute()
    {
        if($this->image_url == null){
            return asset('assets/admin/assets/media/users/blank.png');
        }
        return asset('uploads/' . $this->image_url);
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'doctor_id', 'id');
    }
}
