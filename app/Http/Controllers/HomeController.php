<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
use App\Models\User;
use App\Models\Anuncio;
use Illuminate\Mail\Mailables\Attachment;
use Carbon\Carbon;


use App\Mail\EnviarCorreo;





class HomeController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // $datos = Anuncio::all();         
        // return view('pages.dashboard', compact('datos'));

        // $now = Carbon::now('America/Lima');
        
        // $datos = Anuncio::where('fin', '>=', $now)->get(); // obtener solo los anuncios que vencen hoy o después
        // return view('pages.dashboard', compact('datos'));
        
        $now = Carbon::now('America/Lima');   
        $datos = Anuncio::all(); // obtener solo los anuncios que vencen hoy o después
    
        // Convertir la columna "fin" en objetos Carbon con fecha completa
        foreach ($datos as $anuncio) {
            $fechaHora = $anuncio->fin . ':00'; // Agregar segundos con ":00"
            $anuncio->fin = Carbon::parse($fechaHora, 'America/Lima');
        }
    
        $convocatorias_activas = $datos->where('fin', '>=', $now);
        $convocatorias_pasadas = $datos->where('fin', '<', $now);
    
        return view('pages.dashboard', [
            'convocatorias_activas' => $convocatorias_activas,
            'convocatorias_pasadas' => $convocatorias_pasadas,
        ]);

    }

    public function sendEmail(Request $request)
    {
        
        $email_emp = $request->input('email_emp');   
        $rutaArchivo = Attachment::fromPath(public_path('archivos/'.$request->input('archivo_cv_ruta')));
        $correo = new EnviarCorreo();
        $correo->attach($rutaArchivo);
        Mail::to($email_emp)->send($correo);
        return "correo enviado";
        

    }

    
}
