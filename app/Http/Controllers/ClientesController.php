<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cliente;
use App\Obra;
use App\Venta;
use App\Ciudad;
use App\Region;
use App\Comuna;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\Redirect;



class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $clientes = Cliente::SearchClienteNombre($request->nombre)->orderBy('id','ASC')->paginate(10);
        $deletedClientes = Trabajador::onlyTrashed()->orderBy('nombre','ASC')->paginate(6);
        if (($clientes->count())==0) {
            flash('No hay resultados','warning');
        }
        return view('backend.clientes.index')
        ->with('clientes',$clientes)
        ->with('deletedClientes',$deletedClientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ciudades = Ciudad::orderBy('nombre','ASC')->lists('nombre','id');
        $comunas = Comuna::orderBy('nombre','ASC')->lists('nombre','id');
        $regiones = Region::orderBy('nombre','ASC')->lists('nombre','id');

        return view('backend.clientes.create')
        ->with('ciudadesList',$ciudades)
        ->with('comunasList',$comunas)
        ->with('regionesList',$regiones);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = new Cliente($request->all());
        $cliente->save();
        Flash::success('La cliente '.$cliente->nombre .' ha sido creada con éxito');
        return redirect()->route('backend.clientes.index');
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
        $cliente = Cliente::find($id);
        $ciudades = Ciudad::orderBy('nombre','ASC')->lists('nombre','id');
        $comunas = Comuna::orderBy('nombre','ASC')->lists('nombre','id');
        $regiones = Region::orderBy('nombre','ASC')->lists('nombre','id');

        return view('backend.clientes.edit')
        ->with('cliente',$cliente)        
        ->with('ciudadesList',$ciudades)
        ->with('comunasList',$comunas)
        ->with('regionesList',$regiones);
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
        $cliente = Empresa::find($id);
        //dd($empresa);
        $cliente->fill($request->all());
        $cliente->save();
        Flash::warning($cliente->nombre.' se ha editado correctamente');
        return redirect()->route('backend.clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $cliente = Cliente::find($id);
        if($cliente == null){
            Cliente::withTrashed()->where('id',$id)->forceDelete();
            Flash::error('El cliente ha sido eliminado');
        }else{
            $cliente->delete();
            Cliente::warning('El cliente ha sido quitado de la lista');
        }

        return redirect()->route('backend.clientes.index');
    }

    public function restore($id){
        Cliente::withTrashed()->where('id',$id)->restore();
        Flash::info('El cliente fue restaurado');
        return redirect()->route('backend.clientes.index');
    }


}
