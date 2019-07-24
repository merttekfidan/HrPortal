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
    public function accounting_periods()
    {
        return $this->belongsTo(AccountingPeriod::class, 'accounting_period_id', 'id');
    }
    public function semesters()
    {
        return $this->belongsTo(Semester::class, 'semester_id', 'id');
    }
    public function terms()
    {
        return $this->belongsTo(Term::class, 'term_id', 'id');
    }
    public function languages()
    {
        return $this->belongsTo(Language::class, 'language_id', 'id');
    }
}
