<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewController extends Controller
{
    public function viewCharge(){
        return view('partials.dashboards.dashboardCharge');
    }
    public function viewChiffreAff(){
        return view('partials.dashboards.dashboardCA');
    }
    public function viewPrixH(){
        return view('partials.dashboards.dashboardPH');
    }
    public function viewQuality(){
        return view('partials.dashboards.dashboardQuality');
    }
    public function viewFormation(){
        return view('partials.dashboards.dashboardFormation');
    }
    public function viewRemun(){
        return view('partials.dashboards.dashboardRemun');
    }
    public function viewRH(){
        return view('partials.dashboards.dashboardRH');
    }
    public function viewRent(){
        return view('partials.dashboards.dashboardRentb');
    }
    public function viewBranding(){
        return view('partials.dashboards.dashboardbrand');
    }
}
