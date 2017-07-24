<?php
// COMANDAS
namespace WIT\Http\Controllers;

use Illuminate\Http\Request;
use WIT\Comanda;
use WIT\Product;

class ComandaController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comandas = Comanda::all();
        return view('comanda.home', compact('comandas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comandas = Comanda::all();
        return view('comanda.create', compact('comandas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = new Product;
        $this->validate($request, [
                'nombre' => 'required',
                'descripcion' => 'required',
                'precio' => 'required',
                'campo' => 'required',
            ]);

        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->comanda_id = $request->campo;
        $producto->seccion_comanda = 0;
        $producto->save();

        return redirect('comandas');
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
        $item = Product::find($id);
        return view('comanda.edit',compact('item'));
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
        $producto = Product::find($id);
        $this->validate($request, [
                'nombre' => 'required',
                'descripcion' => 'required',
                'precio' => 'required',
                'campo' => 'required',
            ]);

        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->comanda_id = $request->campo;
        $producto->seccion_comanda = 0;
        $producto->save();

        return redirect('comandas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Product::find($id);
        $item->delete();
        session()->flash('message','¡Correctamente borrado!');
        return redirect('/comandas');
    }
}
