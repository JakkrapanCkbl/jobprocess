<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class condo_temp extends Model
{
    protected $table='condo_temps';   
	protected $fillable=['web_scraper_order','web_scraper_start_url','pagination','pagination_href', 'list_project_name',
		'list_project_name_href','name_e_1','name_e_2','highlight','quick_info',
		'quick_info',
		'prices','map','utility','project_room_size','open_year',
		'project_progress','project_near','park','owner','travel',
		'list_room_type','list_image_src','web_scraper_order1','web_scraper_order2','map1',
		'map2','map3','utility1','utility2','owner1',
		'owner2','owner3','owner4','list_room_type1','list_room_type2',
		'projectname_e'
	];
}
