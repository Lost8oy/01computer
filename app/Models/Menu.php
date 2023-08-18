<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'link',
        'name',
        'updated_at',
        'created_at'
    ];
    protected $guarded = [];
    public function setWeightAttribute($weight)
    {
        $this->attributes['weight'] = $weight ?? 0;
    }
}
