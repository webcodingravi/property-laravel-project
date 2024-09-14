<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index() {
        return view('Frontend.Property.property');
    }



    public function detailProperty() {
        return view('Frontend.detail_property.detail');
    }
}
