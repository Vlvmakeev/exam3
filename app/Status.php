<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $guarded = [];

    protected $table = 'statuses';

    public function user() {
        return $this->belongsTo('App\User');
    }
}
