<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentCategory extends Model
{
    protected $table = 'document_category';

    protected $primaryKey = 'document_category_id';

    public function get_categories()
    {
        $categories = DocumentCategory::all();

        return $categories;
    }
}
