<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class provinces extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id', 'code', 'name_th', 'name_en', 'geography_id',
        'doc_searches', 'deleted_at'
    ];
}
