<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entity extends Model
{
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public function courses()
    {
        return $this->hasOne(Course::class, 'entity_id', 'id');
    }
}
