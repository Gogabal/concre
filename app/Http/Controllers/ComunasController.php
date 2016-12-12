<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Comuna;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\Redirect;
use App\Region;


class ComunasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
     
      $comunas = comuna::Searchcomuna($request->nombre)->orderBy('id','ASC')->paginate(5);
        if(($comunas->count()) == 0) {
            flash('La comuna no se ha encontrado','warning');
        }
        $regiones = Region::orderBy('nombre','ASC')->lists('nombre','id');
       return view('backend.variables.comunas.index')->with('comunas',$comunas)->with('regionesList',$regiones)->with('comunas',$comunas);
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
        $comuna = new Comuna($request->all());
        $comuna->save();
        Flash::success('La comuna '.$comuna->nombre." ha sido creada");
        return redirect()->route('backend.comunas.index');
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
        $comuna = Comuna::find($id);
        $comuna->nombre = $request->nombre;
        $comuna->region_id = $request->region_id;
        $comuna->save();
        return redirect()->route('backend.comunas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $comuna = Comuna::find($id);
       if(!is_null($comuna)){
           $comuna->delete();
       }
       Flash::warning('La comuna fue eliminada satisfactoriamente');
       return redirect()->route('backend.comunas.index');
    }
    
}
