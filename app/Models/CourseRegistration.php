<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseRegistration extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'course_id'];
    public function courseRegistrations()
    {
        return $this->hasMany('App\Models\CourseRegistration');
    }
}
