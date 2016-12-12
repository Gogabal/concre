<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Comuna;
use App\Ciudad;
use Laracasts\Flash\Flash;



class CiudadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $ciudades = Ciudad::SearchCiudad($request->nombre)->orderBy('id','ASC')->paginate(5);
        $comunas = Comuna::orderBy('nombre','ASC')->lists('nombre','id');

        if(($ciudades->count()) == 0){
            flash('No se ha encontrado resultados','warning');
        }

        return view('backend.variables.ciudades.index')
        ->with('ciudades',$ciudades)
        ->with('comunasList',$comunas);
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
        $ciudad = new Ciudad($request->all());
        $ciudad->save();
        Flash::success('La ciudad '. $ciudad->nombre . " ha sido creada");
        return redirect()->route('backend.ciudades.index');
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
    public function update(CiudadRequest $request, $id)
    {
        $ciudad = Ciudad::find($id);
        $ciudad->nombre = $request->nombre;
        $ciudad->comuna_id = $request->comuna_id;
        $ciudad->save();
        return redirect()->route('backend.ciudades.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ciudad = Ciudad::find($id);
        if(!is_null($ciudad)){
            $ciudad->delete();
        }
        Flash::warning('La ciudad fue eliminada satifactoriamente');
        return redirect()->route('backend.ciudades.index');
    }
}
