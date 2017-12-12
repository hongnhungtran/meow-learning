<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Topic extends Model
{
<<<<<<< HEAD

=======
>>>>>>> mix
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

}
