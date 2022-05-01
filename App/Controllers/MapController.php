<?php
namespace App\Controllers;

use App\Models\MapModel;

class MapController extends Controller {

    public function loc()
    {
        $this->render('map/map');

    }

}