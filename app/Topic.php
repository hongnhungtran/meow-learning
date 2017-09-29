<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $table = 'topic';

    protected $primaryKey = 'topic_id';

    protected $fillable = [
    	'topic_id',
    	'course_id',
    	'level_id',
	    'topic_title',
        'image_link',
	    'topic_content'
    ];

	public function level()
    {
        return $this->belongsTo('App\Level');
    }
}
