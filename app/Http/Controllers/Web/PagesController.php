<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function services()
    {
        return view('web.services');
    }

    public function checkup()
    {
        return view('web.pages.checkup');
    }

    public function cardiogram()
    {
        return view('web.pages.cardiogram');
    }

    public function dan_testing()
    {
        return view('web.pages.DAN-testing');
    }

    public function BloodBank()
    {
        return view('web.pages.blood-bank');
    }

    public function dermatology()
    {
        return view('web.pages.dermatology');
    }

    public function orthopedic()
    {
        return view('web.pages.orthopedic');
    }

    public function about()
    {
        return view('web.about');
    }
}
