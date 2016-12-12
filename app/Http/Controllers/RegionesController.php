<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\Redirect;
use App\Region;
use App\Http\Requests\RegionRequest;

class RegionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

          $regiones = Region::orderBy('id','ASC')->get();

       // $regiones = Region::SearchRegion($request->nombre)->orderBy('id','ASC')->paginate(5);
        if(($regiones->count()) == 0) {
            flash('La Region no se ha encontrado','warning');
        }
       return view('backend.variables.regiones.index')->with('regiones',$regiones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $region = new Region($request->all());
        $region->save();
        Flash::success('La region '.$region->nombre." ha sido creada");
        return redirect()->route('backend.regiones.index');
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
    public function edit($id)
    {
        //
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
        $region = Region::find($id);
        $region->save();
        return redirect()->route('backend.regiones.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $region = Region::find($id);
       if(!is_null($region)){
           $region->delete();
       }
       Flash::warning('La region fue eliminada satisfactoriamente');
       return redirect()->route('backend.regiones.index');
    }
}
