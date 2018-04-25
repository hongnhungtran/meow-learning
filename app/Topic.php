<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Topic extends Model
{
    use Searchable;

    protected $table = 'topic';

    protected $primaryKey = 'topic_id';

    protected $fillable = [
    	'topic_id',
    	'course_id',
    	'level_id',
	    'topic_title',
        'topic_image_link',
	    'topic_content'
    ];

	public function level()
    {
        return $this->belongsTo('App\Level');
    }

    public function searchableAs()
    {
        return 'items_index';
    }

    public function scopeSearchByKeyword($query, $keyword)
    {
        if ($keyword != '') {
            $query->where(function ($query) use ($keyword) {
                $query->where('course_id', 'LIKE',"%$keyword%")
                    ->orwhere('topic_id', 'LIKE', "%$request->topic_title%")
                    ->orwhere('topic_title', 'LIKE', "%$request->topic_title%");

            });
        }
        return $query;
    }

}
