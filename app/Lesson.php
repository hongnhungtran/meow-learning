<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $table = 'lesson';

    protected $primaryKey = 'lesson_id';

    protected $fillable = ['lesson_title','lesson_content'];
}
