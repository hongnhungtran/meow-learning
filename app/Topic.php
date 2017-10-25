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

    public function searchableAs()
    {
        return 'topic_title';
    }

    public function toSearchableArray()
    {
        $search = collect($this->toArray())->only([
            'topic_id',
            'topic_title',
            'topic_content'
        ])->toArray();


    }

	public function level()
    {
        return $this->belongsTo('App\Level');
    }

}
