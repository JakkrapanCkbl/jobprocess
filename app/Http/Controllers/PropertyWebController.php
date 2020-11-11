<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\property_web;
use App\condo_temp;
use DB;


class PropertyWebController extends Controller
{
    function index(){
    	return view('test.testdb');
    }


    function InsertNoDup(){
    	DB::Insert('insert into property_web(list_project_name)
            SELECT list_project_name
            FROM condo_temps
            GROUP BY list_project_name');
    	return redirect()->route('testdb');
    }

    function update(){
        DB::updateOrInsert('insert into property_web(list_project_name)
            SELECT list_project_name
            FROM condo_temps
            GROUP BY list_project_name');
        return redirect()->route('testdb');
    }
    


    function Insert_update(){
        $a = condo_temp::all();
        //dd($a);
        foreach($a as $current){
            //dd($current);
            $b = property_web::where("list_project_name", "=", $current->list_project_name)->first();
            if(!$b) $b = new property_web;

            if($b->list_project_name != $current->list_project_name) {
                $b->list_project_name = $current->list_project_name;               
                $b->save(); 
            }
            if($b->projectname_e != $current->projectname_e) {
                $b->projectname_e = $current->projectname_e;               
                $b->save(); 
            }
            if($b->list_project_name_href != $current->list_project_name_href) {
                $b->list_project_name_href = $current->list_project_name_href;               
                $b->save(); 
            }
            if($b->highlight != $current->highlight) {
                $b->highlight = $current->highlight;               
                $b->save(); 
            }
             if($b->quick_info != $current->quick_info) {
                $b->quick_info = $current->quick_info;               
                $b->save(); 
            }
             if($b->location != $current->location) {
                $b->location = $current->location;               
                $b->save(); 
            }
             if($b->level != $current->level) {
                $b->level = $current->level;               
                $b->save(); 
            }
             if($b->building_no != $current->building_no) {
                $b->building_no = $current->building_no;               
                $b->save(); 
            }
             if($b->unit_no != $current->unit_no) {
                $b->unit_no = $current->unit_no;               
                $b->save(); 
            }

            if($b->project_size != $current->project_size) {
                $b->project_size = $current->project_size;               
                $b->save(); 
            }
             if($b->prices != $current->prices) {
                $b->prices = $current->prices;               
                $b->save(); 
            }
             if($b->map != $current->map) {
                $b->map = $current->map;               
                $b->save(); 
            }
             if($b->map1 != $current->map1) {
                $b->map1 = $current->map1;               
                $b->save(); 
            }
             if($b->map2 != $current->map2) {
                $b->map2 = $current->map2;               
                $b->save(); 
            }
            if($b->map3 != $current->map3) {
                $b->map3 = $current->x;               
                $b->save();
            }
             if($b->utility1 != $current->utility1) {
                $b->utility1 = $current->utility1;               
                $b->save(); 
            }
             if($b->utinity2 != $current->utinity2) {
                $b->utinity2 = $current->utinity2;               
                $b->save(); 
            }
             if($b->project_room_size != $current->project_room_size) {
                $b->project_room_size = $current->project_room_size;               
                $b->save(); 
            }
             if($b->open_year != $current->open_year) {
                $b->open_year = $current->open_year;               
                $b->save(); 
            }
            if($b->project_progress != $current->project_progress) {
                $b->project_progress = $current->project_progress;               
                $b->save(); 
            }
             if($b->project_near != $current->project_near) {
                $b->project_near = $current->project_near;               
                $b->save(); 
            }
             if($b->park != $current->park) {
                $b->park = $current->park;               
                $b->save(); 
            }
             if($b->owner1 != $current->owner1) {
                $b->owner1 = $current->owner1;               
                $b->save(); 
            }
             if($b->owner2 != $current->owner2) {
                $b->owner2 = $current->owner2;               
                $b->save(); 
            }
            if($b->owner3 != $current->owner3) {
                $b->owner3 = $current->owner3;               
                $b->save(); 
            }
             if($b->owner4 != $current->owner4) {
                $b->owner4 = $current->owner4;               
                $b->save(); 
            }
             if($b->travel != $current->travel) {
                $b->travel = $current->travel;               
                $b->save(); 
            }
             if($b->web_scraper_order != $current->web_scraper_order) {
                $b->web_scraper_order = $current->web_scraper_order;               
                $b->save(); 
            }
             if($b->web_scraper_order1 != $current->web_scraper_order1) {
                $b->web_scraper_order1 = $current->web_scraper_order1;               
                $b->save(); 
            }
            if($b->web_scraper_order2 != $current->web_scraper_order2) {
                $b->web_scraper_order2 = $current->web_scraper_order2;               
                $b->save(); 
            }
        }
        return redirect()->route('testdb');
    }

    

}
