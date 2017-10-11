<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentImage extends Model
{
    protected $table = 'document_image';

    protected $primaryKey = 'document_image_id';

    protected $fillable = [
    	'document_image_id',
    	'document_id',
    	'document_image_link'
	];
}
