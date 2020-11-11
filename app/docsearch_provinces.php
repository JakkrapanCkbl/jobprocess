<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class docsearch_provinces extends Model
{
    use SoftDeletes;

    protected $fillable=['id','province_code','name_th','name_en','doc_category_id',
    'filepath','doc_searches','deleted_at'];
    
}

