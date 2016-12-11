<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $table = 'slide';

    public function getImageAttribute($value)
    {
        if ($value != null)
            return config('app.url') . '/storage/app/public/' . $value;

        return null;

    }
}
