<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\MarkCarbon;
use App\Trees;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all()->count();
        $mark = MarkCarbon::all()->count();
        $tree = Trees::all()->count();

        return view('DashboardX.Views.Index.index')
                                                    ->with('user', $user)
                                                    ->with('mark', $mark)
                                                    ->with('tree', $tree);
    }

     public function getChartInfo()
    {
        $tree = Trees::all();
        return response()->json(['trees' => $tree]);            
    }


}
