<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trees;
use App\Http\Requests\TreesRequest as TreesRequest;
use Validator;
use Dompdf\Dompdf;
use Dompdf\Options;
use DB;

class TreesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trees = Trees::orderBy('name', 'ASC')->get();
        return view('DashboardX.Views.Trees.index')->with('trees', $trees);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('DashboardX.Views.Trees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TreesRequest $request)
    {

        $validator = Validator::make($request->all(), $request->rules(), $request->messages());

        if(! $validator->fails() ){

        $trees = new Trees($request->all());
        $trees->save();

        }

        return redirect()->route('trees.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $tree = Trees::find($id);
        return view('DashboardX.Views.Trees.edit')->with('tree', $tree);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( Trees $tree, Request $request)
    {
        if($request->place != "") { $tree->place = $request->place;  }
        if($request->healt != ""){ $tree->healt   = $request->healt ; }
        if($request->nest != "") { $tree->nest    = $request->nest ; }
        if($request->bats != "") { $tree->bats    = $request->bats ; }
        if($request->iguana != "") { $tree->iguana    = $request->iguana ; }
        if($request->chipmunk != "") { $tree->chipmunk    = $request->chipmunk ; }
        if($request->zariguella != "") { $tree->zariguella    = $request->zariguella ; }
        if($request->nest_insect != "") { $tree->nest_insect    = $request->nest_insect ; }
        if($request->dove != "") { $tree->dove    = $request->dove ; }
        if($request->ants != "") { $tree->ants    = $request->ants ; }
        if($request->root_tree != "") { $tree->root_tree    = $request->root_tree ; }
        if($request->trunk_distorted != "") { $tree->trunk_distorted    = $request->trunk_distorted ; }
        if($request->branch_dry != "") { $tree->branch_dry    = $request->branch_dry ; }
        if($request->root_healt != "") { $tree->root_healt    = $request->root_healt ; }
        if($request->trunk_healt != "") { $tree->trunk_healt    = $request->trunk_healt ; }
        if($request->root_wounds != "") { $tree->root_wounds    = $request->root_wounds ; }
        if($request->steam_wounds != "") { $tree->steam_wounds    = $request->steam_wounds ; }
        if($request->cut_tecnic != "") { $tree->cut_tecnic    = $request->cut_tecnic ; }
        if($request->trunk_wounds != "") { $tree->trunk_wounds    = $request->trunk_wounds ; }
        if($request->parasite != "") { $tree->parasite    = $request->parasite ; }
        if($request->structure_floor != "") { $tree->structure_floor    = $request->structure_floor ; }
        if($request->infraestructure_private != "") { $tree->infraestructure_private    = $request->infraestructure_private ; }
        if($request->infraestructure_public != "") { $tree->infraestructure_public    = $request->infraestructure_public ; }
        if($request->cable_light != "") { $tree->cable_light    = $request->cable_light ; }
        if($request->branch_wounds != "") { $tree->branch_wounds    = $request->branch_wounds ; }
        if($request->cup_healt != "") { $tree->cup_healt    = $request->cup_healt ; }

        
        $tree->update($request->except(['place', 'healt', 'nest', 'bats', 'iguana', 'chipmunk', 'zariguella', 'nest_insect', 'dove', 'ants', 'root_tree', 'trunk_distorted', 'branch_dry', 'root_healt', 'trunk_healt', 'root_wounds', 'steam_wounds', 'cut_tecnic', 'trunk_wounds', 'parasite', 'structure_floor', 'infraestructure_private', 'infraestructure_public', 'cable_light', 'branch_wounds', 'cup_healt'])); 

        return redirect()->route('trees.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $trees = Trees::where('id', $id)->update(['state' => 2, 'cause' => $request->cause]);        
 
        return redirect()->route('trees.index');
    }

    public function GeneratePdf()
    {
        $tree = Trees::all();
        $options = new Options();
        $options->set('defaultFont', 'Raleway');
        
        $pdf  = new Dompdf($options);
        $view = View('DashboardX.Views.Trees.trees_pdf', compact('tree'));    

        $pdf->loadHTML($view); 
        $pdf->render();       
        
        return $pdf->stream('tree');
    }    

}
