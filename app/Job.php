<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\User;

class Job extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id', 'projectname', 'jobsize',
        'jobtype', 'client', 'prop_size',
        'proplocation', 'lcduedate',  'percentfinish',
        'created_at', 'updated_at',
        'propd_id', 'obj_id',
        'customer_company', 'assessmentvalue',
        'customer_address', 'customer_title', 'customer_tel',
        'percentsell', 'startprice',
        'broker',  'buildingprogress', 'inforesource', 'easydiff', 'valuationfee', 'valuationfee_case',
        'moo', 'materialscore', 'stylescore',

        // page 1
        'jobcode', 'clientcode', 'prop_type', 'customer', 'startdate', 'inspectiondate', 'submissiondate', 'lcduedate',
        //page 2
        'lat', 'lng', 'roomno'/* */, 'level', 'deedno', 'buildingno', 'buildingregno',/*'province_code',*/ 'deedtumbon', 'deedamphur', 'landsize',
        /**/ 'roomarea', 'ownership',/* */ 'mortgage', 'sequester', 'deprive',
        // page 3 
        'roomtype', 'buildingyear', 'buildingstatus', 'roomlocation', 'roomview',
        'material_room1', 'material_room2', 'material_room3', 'material_floor1', 'material_floor2', 'material_floor3', 'material_floor4',
        'material_wall1', 'material_wall2', 'material_wall3', 'material_wall4', 'material_ceiling1', 'material_ceiling2', 'material_ceiling3',
        'material_bath1', 'material_bath2', 'material_bath3', 'material_door1', 'material_door2', 'material_door3', 'material_door4',
        'material_window1', 'material_window2', 'material_window3', 'material_window4',
        // page 4
        'yearstart', 'buildinghight', 'units', 'percentsell', 'percenttransfer', 'salesname', 'percenliverate', 'commonfee', 'commonoverdue', 'facilities', 'maintainstatus',
        // page 5
        'soi', 'road', 'province_code', 'amphure_code', 'district', 'estimatecondition', 'remark', 'nearmrt', 'transport_id', 'nearmrtdistance', 'frontstreet', 'publicentrance',
        'materialstreet', 'streetwide', 'streetareawide', 'utilities', 'cmn_transportation', 'remark2',
        //page6
        'propertiesnearused', 'prosperity', 'liquidity', 'planlaw', 'marketvalue', 'forcesale', 'valuer_n', 'headvaluer_n', 'fireinsurance',
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
