<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trees;

class MapController extends Controller
{
    public function index(){
    	return view('DashboardX.Views.Map.map');
    }

    public function getCoords(Request $request){
        
        if( $request->ajax() ) {
            $coord = Trees::where('state', 1)->get();
            return response()->json(['coord' => $coord]);
        }
    }
   
}
