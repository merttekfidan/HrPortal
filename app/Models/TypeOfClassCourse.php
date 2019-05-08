<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeOfClassCourse extends Model
{
    protected $hidden = [];

    public function classes()
    {
        return $this->hasMany(TypeOfClass::class, 'id');
    }
}
