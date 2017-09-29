<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $table = 'topic';

    protected $primaryKey = 'topic_id';

    protected $fillable = [
    	'topic_id',
	    'topic_title',
	    'topic_content'
    ];
}
