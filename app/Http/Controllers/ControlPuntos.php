<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Puntos;
use App\Models\Datos;

class ControlPuntos extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $punto = Puntos::orderBy('created_at')->paginate(10); // Cambiado de get() a paginate()
        return view('points.index', compact('punto'));
     }
     public function show1($idpunto)
    {
        // Obtener los datos del punto especificado y paginarlos
        $data = Datos::where('punto', $idpunto)->orderBy('created_at')->paginate(5);

        // Pasar los datos y el idpunto a la vista
        return view('points.show', compact('data', 'idpunto'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('points.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Puntos::create($request->all());

        return redirect()->route('puntos')->with('success', 'Punto añadido correctamente');
    }
    public function add(Request $request)
{
    $t = $request->t;
    $h = $request->h;
    $v = $request->v;
    $c = $request->c;
    $ubicacion = $request->u;

    // Guardar los datos en la base de datos
    $thm = new Datos;
    $thm->punto = $ubicacion;
    $thm->temperatura = $t;
    $thm->humedad = $h;
    $thm->vibracion = $v;
    $thm->corriente = $c;
    $thm->save();

    // Obtener los últimos 2 registros para la ubicación dada
    $ultimosValores = Datos::where('punto', $ubicacion)
        ->orderBy('id', 'desc')
        ->take(2)
        ->get(['temperatura', 'humedad', 'vibracion', 'corriente']);

    // Si hay menos de 2 registros, no calcular varianza
    if ($ultimosValores->count() < 2) {
        return "great";
    }

    // Calcular la varianza para cada variable
    $variables = ['temperatura', 'humedad', 'vibracion', 'corriente'];
    $umbral = 50; // Ajustar según sea necesario

    foreach ($variables as $variable) {
        $valores = $ultimosValores->pluck($variable);
        $media = $valores->average();
        $varianza = $valores->reduce(function ($carry, $item) use ($media) {
            return $carry + pow($item - $media, 2);
        }, 0) / $valores->count();

        // Comprobar si la varianza excede el umbral
        if ($varianza > $umbral) {
            // Cambiar el estado del punto a "Error"
            $punto = Puntos::where('id', $ubicacion)->first();

            $punto->estado = "Error";
            $punto->save();
            return $ubicacion;
        }
    }

    return "great";
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Datos::where('punto', $id)->get();
        $idpunto=$id;
        return view('points.show', compact('data','idpunto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $punto = Puntos::findOrFail($id);

        return view('points.edit', compact('punto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $punto = Puntos::findOrFail($id);

        $punto->update($request->all());

        return redirect()->route('puntos')->with('success', 'Punto editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $punto = Puntos::findOrFail($id);

        $punto->delete();

        return redirect()->route('puntos')->with('success', 'Punto eliminado correctamente');
    }

    public function editdata(string $id)
    {
        $dato = Datos::findOrFail(id: $id);

        return view('points.editdata', compact('dato','id'));
    }

    public function updatedata(Request $request, string $id)
    {
        $dato = Datos::findOrFail($id);

        $dato->update($request->all());

        return redirect()->route('puntos')->with('success', 'Dato editado correctamente');
    }

    public function destroydata(string $id)
    {
        $dato = Datos::findOrFail($id);

        $dato->delete();

        return redirect()->route('puntos')->with('success', 'Valor eliminado correctamente');
    }

    public function createdata(string $idpunto)
    {
        return view('points.createdata',compact('idpunto'));
    }

    public function storedata(Request $request, string $idpunto)
    {
        $v=$request->vibracion;
        $t=$request->temperatura;
        $h=$request->humedad;
        $c=$request->corriente;

        $thm = new Datos;
        $thm->punto = $idpunto;
        $thm->temperatura = $t;
        $thm->humedad = $h;
        $thm->vibracion = $v;
        $thm->corriente = $c;
        $thm->save();
        return redirect()->route('puntos')->with('success', 'Dato añadido correctamente');
    }

}
