<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function getImageAttribute($value)
    {
        if ($value != null)
            return config('app.url') . '/storage/app/public/' . $value;

    }
}
