<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MarkCarbon;
use App\Http\Requests\MarkCarbonRequest as MarkRequest;
use Validator;

class MarkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mark = MarkCarbon::orderBy('hc', 'ASC')->get();
        return view('DashboardX.Views.Carbon.index')->with('mark', $mark);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('DashboardX.Views.Carbon.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MarkRequest $request)
    {
        // dd( $request->all() );

        $validate = Validator::make($request->all(), $request->rules(), $request->messages());

        if(! $validate->fails() ){
            
            $mark = new MarkCarbon($request->all());
            $mark->save();

            return redirect()->route('mark.index');    
        }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$mark = MarkCarbon::find($id);
        //return view('dashboard.lite.views.mark.edit')->with("mark", $mark);   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mark = MarkCarbon::find($id);
        $mark->state = 2;
        $mark->save();  

        return redirect()->route('mark.index');
    }
}
