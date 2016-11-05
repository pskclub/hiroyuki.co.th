<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';

    public function products()
    {
        return $this->hasMany('App\Product');
    }

    public function getImageAttribute($value)
    {
        if ($value != null)
            return config('app.url') . '/storage/app/public/' . $value;

        return null;

    }
}
