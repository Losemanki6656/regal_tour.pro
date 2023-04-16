<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Populary;
use App\Models\Country;
use App\Models\Destination;

class HomeController extends Controller
{
    public function index()
    {
        $banners = Banner::get();
        $popularies = Populary::get();
        $destinations = Destination::get();
        $countries = Country::get();

        return view('welcome', [
            'banners' => $banners,
            'popularies' => $popularies,
            'destinations' => $destinations,
            'countries' => $countries
        ]);
    }
}
