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
		'document_description',
		'document_download_link',
		'document_image_link'
	];

	public function document_category() {
    	return $this->belongsTo('DocumentCategory', 'document_category_id');
  	}

  	public function getDocument()
    {
        $document = Document::join('document_category', 'document.document_category_id', '=', 'document_category.document_category_id')->get();
        return $document;
    }

	public function search($input)
	{
		$query = $this->getDocumentQuery();

		if ($input['document_category'] !== null) {
			$query->where('document_category.document_category_id', 'LIKE', $input['document_category']);
		}
		if ($input['document_title'] !== null) {
			$query->where('document.document_title', 'LIKE', '%'.$input['document_title'].'%');
		}
		if ($input['document_content'] !== null) {
			$query->where('document.document_content', 'LIKE', '%'.$input['document_content'].'%');
		}
		if ($input['document_flag'] === 1) {
			$query->where('document.document_flag', 'LIKE', 1);
		}
		if ($input['document_flag'] === 0) {
			$query->where('document.document_flag', 'LIKE', 0);
		}
		if ($input['document_flag'] === 3) {
			$query;
		}
	
		return $query;
	}

	public function getDocumentQuery()
	{
		$document = Document::join(
			'document_category', 
			'document_category.document_category_id', 
			'document.document_category_id'
			)
			->select(
				'document_category.document_category_id',
				'document_category.document_category_title',
				'document.document_id',
				'document.document_title',
				'document.document_content',
				'document.document_description',
				'document.document_download_link',
				'document.document_image_link',
				'document.document_flag'
			);
		return $document;
	}
}