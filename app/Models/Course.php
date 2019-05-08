<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $hidden = [];
    public $timestamps = false;
    public function classes()
    {
        return $this->belongsToMany(TypeOfClass::class, 'type_of_class_courses', 'course_id', 'type_of_class_id');
    }
    public function accounting_period()
    {
        return $this->belongsTo(AccountingPeriod::class, 'accounting_period_id', 'id');
    }
}
