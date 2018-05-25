<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $table = 'document';

    protected $primaryKey = 'document_id';

    protected $fillable = [
    	'document_id',
    	'document_category_id',
    	'document_title',
    	'document_content',
	    'document_download_link',
	    'document_image_link'
	];

    public function search($input)
    {
        if ($input->has('product_list')) {
    }

    public function getDocumentQuery
}
