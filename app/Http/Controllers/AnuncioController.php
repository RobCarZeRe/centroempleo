<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anuncio;
use Carbon\Carbon;


class AnuncioController extends Controller
{
    
    public function index()
    {
          
        
        
    }

    
    public function create()
    {
        return view('pages.Anuncio');

    }

   
    public function store(Request $request)
    {
        $attributes = request()->validate([
            'empresa' => 'required|max:255|min:2',
            'email_emp'=> 'required',
            'texto_anuncio' => 'required',
            'remuneracion' => 'required',
            'inicio' => 'required',
            'fin' => 'required',
            'link' => ''
        ]);
        $anuncio = Anuncio::create($attributes);
        

        return redirect('/dashboard');
    }

    
    public function show()
    {
        return view('pages.Anuncio');
    }

    
    public function edit(string $id)
    {
        
    }

    
    public function update(Request $request, string $id)
    {
        
    }

    
    public function destroy(string $id)
    {
        
    }

    public function ListarAnuncio()
    {
        // $now = Carbon::now('America/Lima');   
        // $datos = Anuncio::all(); // obtener solo los anuncios que vencen hoy o después
        // $convocatorias_activas = $datos->where('fin', '>=', $now);
        // $convocatorias_pasadas = $datos->where('fin', '<', $now);

        // // return view('pages.ListaAnuncio', compact('datos'));

        // return view('pages.ListaAnuncio', [
        //     'convocatorias_activas' => $convocatorias_activas,
        //     'convocatorias_pasadas' => $convocatorias_pasadas,
        // ]);
    
        // $now = Carbon::now('America/Lima');   
        // $datos = Anuncio::all();
    
        // // Convertir la columna "fin" en objetos Carbon
        // foreach ($datos as $anuncio) {
        //     $anuncio->fin = Carbon::parse($anuncio->fin);
        // }
    
        // $convocatorias_activas = $datos->where('fin', '>=', $now);
        // $convocatorias_pasadas = $datos->where('fin', '<', $now);
    
        // return view('pages.ListaAnuncio', [
        //     'convocatorias_activas' => $convocatorias_activas,
        //     'convocatorias_pasadas' => $convocatorias_pasadas,
        // ]);

        $now = Carbon::now('America/Lima');   
        $datos = Anuncio::all(); // obtener solo los anuncios que vencen hoy o después
    
        // Convertir la columna "fin" en objetos Carbon con fecha completa
        foreach ($datos as $anuncio) {
            $fechaHora = $anuncio->fin . ':00'; // Agregar segundos con ":00"
            $anuncio->fin = Carbon::parse($fechaHora, 'America/Lima');
        }
    
        $convocatorias_activas = $datos->where('fin', '>=', $now);
        $convocatorias_pasadas = $datos->where('fin', '<', $now);
    
        return view('pages.ListaAnuncio', [
            'convocatorias_activas' => $convocatorias_activas,
            'convocatorias_pasadas' => $convocatorias_pasadas,
        ]);
    
    
    }
}
