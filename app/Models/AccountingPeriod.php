<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountingPeriod extends Model
{
    protected $hidden = [];
    public function courses()
    {
        return $this->hasMany(Course::class, 'accounting_period_id', 'id');
    }
}
