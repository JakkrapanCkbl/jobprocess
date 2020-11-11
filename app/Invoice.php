<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invoice extends Model
{
    use SoftDeletes;

     protected $table = 'invoice'; 

     protected $fillable = ['id','invoiceno','invoicedate','customer','address','description','qty','amountjob','remark','receiptno','receiptdate','created_at','updated_at','deleted_at'];

}

