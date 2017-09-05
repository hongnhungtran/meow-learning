<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
     return $this->belongsTo(User::class);
}
