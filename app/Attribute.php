<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{

    protected $guarded = [];


    public function attributeValues()
    {
        return $this->hasMany(AttributeValue::class);
    }
}
