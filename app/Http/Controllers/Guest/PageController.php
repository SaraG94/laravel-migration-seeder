<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        //$trains = Train::where('orario_di_partenza','>=',now())->get()
        $trains = Train::all();
        $data = [
            'trains'=> $trains
        ];
        return view('layouts.index', $data);
    }
}