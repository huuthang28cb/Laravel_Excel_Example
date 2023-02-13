<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Special_user_healths extends Model
{
    protected $table = 'special_user_healths';

    protected $fillable = [
        'user_id',
        'data_healths',
        'file_name'
    ];

    public $timestamps = true;

    protected function serializeDate(\DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
