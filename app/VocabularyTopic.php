<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VocabularyTopic extends Model
{
    protected $table = 'vocabulary_topic';

    protected $fillable = ['vocabulary_topic_title', 'vocabulary_topic_content', 'status'];
}
