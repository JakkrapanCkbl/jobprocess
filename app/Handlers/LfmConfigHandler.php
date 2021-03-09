<?php

namespace App\Handlers;

class LfmConfigHandler extends \UniSharp\LaravelFilemanager\Handlers\ConfigHandler
{
    public function userField()
    {
        return parent::userField();
        //return public_path('storage').'/project_reports/LC_64BF-0321/';
        //return storage_path('app');
        //return 'LC_64BF-9999/';
    }

    

}
