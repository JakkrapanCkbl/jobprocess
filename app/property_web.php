<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class property_web extends Model
{
    protected $table='property_web';
    protected $fillable=['id','list_project_name','projectname_e','list_project_name_href','highlight',
				'quick_info','location','level','building_no','unit_no',
				'project_size','prices','map','map1','map2',
				'map3','utility1','utinity2','project_room_size','open_year',
				'project_progress','project_near','park','owner1','owner2',
				'owner3','owner4','travel','web_scraper_order','web_scraper_order1',
				'web_scraper_order2'
				];
}
