<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\User;

class Job extends Model
{
    use SoftDeletes;

    protected $fillable=['id','jobcode','reportcode','projectname','jobsize',
    'jobtype','client','customer','prop_type','prop_size',
    'proplocation','lcduedate','headvaluer','valuer','percentfinish',
    'startdate','inspectiondate','clientduedate','created_at','updated_at',
    'propd_id', 'province_id', 'amphure_id', 'district', 'obj_id', 
    'marketvalue', 'assessmentvalue', 'lat', 'lng', 'customer_company',
    'customer_address', 'customer_title', 'customer_tel', 'level', 'soi', 'road',
    'estimatecondition', 'remark',
    'landsize', 'units', 'percentsell', 'startprice', 'roomtype', 'convenient', 
    'broker', 'yearstart', 'buildingprogress', 'inforesource', 'easydiff', 'valuationfee', 'valuationfee_case'
    ];
    
    /*
    public function getRouteKeyName(){
        return 'jobsize';
    }
    */


   public function showavatar()
    {
      //return $this->belongsTo(User::class);
        return $this->hasOne('App\User', 'id', 'valuer');
    }
  
}
