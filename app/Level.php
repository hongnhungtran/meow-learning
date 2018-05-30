<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $table = 'level';

    protected $primaryKey = 'level_id';

    public function topic()
    {
        return $this->hasMany('App\Topic', 'level_id');
    }

    public function lesson()
    {
        return $this->hasMany('App\Lesson');
    }

    public function get_level()
    {
        $level = Level::all();
        return $level;
    }
}
