<?php

namespace App\Http\Controllers;

use App\Models\ServiceLocation;
use Illuminate\Http\Request;

class ServiceLocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('service_locations');
    }
}
