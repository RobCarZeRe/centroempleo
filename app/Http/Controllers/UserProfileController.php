<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;

class UserProfileController extends Controller
{
    public function show()
    {
        $datos = User::all();
        return view('pages.user-profile', compact('datos'));
    }

    public function update(Request $request)
    {


        $attributes = $request->validate([
            'dni' => ['max:8'],
            'nombres' => ['required','max:255', 'min:2'],
            'apellido_paterno' => ['max:100'],
            'apellido_materno' => ['max:100'],
            'email' => ['required', 'email', 'max:255',  Rule::unique('users')->ignore(auth()->user()->id),],
            'edad' => ['max:2'],
            'celular' => ['max:9'],
            'departamento' => ['max:100'],
            'provincia' => ['max:100'],
            'distrito' => ['max:100'],
            'sexo' => ['max:100'],
            'actualmente' => ['max:255'],
            'experiencia' => ['max:255']
            
            
        ]);
         


        if($request->hasFile("archivo_cv_ruta") && $request->hasFile("user_img")){

            $usuario_img=$request->file("user_img");
            $usuario_img->move(public_path().'/img/',$request->get('dni')."_".$usuario_img->getClientOriginalName());

            $archivo=$request->file("archivo_cv_ruta");
            $archivo->move(public_path().'/archivos/',$request->get('dni')."_".$archivo->getClientOriginalName());
           
                 auth()->user()->update([

                'dni' => $request->get('dni'),
                'nombres' => $request->get('nombres'),
                'apellido_paterno' => $request->get('apellido_paterno'),
                'apellido_materno' => $request->get('apellido_materno') ,
                'email' => $request->get('email'),
                'edad' => $request->get('edad'),
                'celular' => $request->get('celular'),
                'departamento' => $request->get('departamento'),
                'provincia' => $request->get('provincia'),
                'distrito' => $request->get('distrito'),
                'sexo' => $request->get('sexo'),
                'actualmente' => $request->get('actualmente'),
                'experiencia' => $request->get('experiencia'),
                'archivo_cv_ruta' => $request->get('dni')."_".$archivo->getClientOriginalName(),
                'archivo_cv_nombre' => $archivo->getClientOriginalName(),    
                'user_img' => $request->get('dni')."_".$usuario_img->getClientOriginalName(),
                'user_rol' => $request->get('user_rol'),
    
            ]);
            // dd($request);    
            return back()->with('succes', 'Profile succesfully updated');   
                     
        }else{
            
            if($request->hasFile("user_img")){
                
                $usuario_img=$request->file("user_img");
                $usuario_img->move(public_path().'/img/',$request->get('dni')."_".$usuario_img->getClientOriginalName());
                
                     auth()->user()->update([
    
                    'dni' => $request->get('dni'),
                    'nombres' => $request->get('nombres'),
                    'apellido_paterno' => $request->get('apellido_paterno'),
                    'apellido_materno' => $request->get('apellido_materno') ,
                    'email' => $request->get('email'),
                    'edad' => $request->get('edad'),
                    'celular' => $request->get('celular'),
                    'departamento' => $request->get('departamento'),
                    'provincia' => $request->get('provincia'),
                    'distrito' => $request->get('distrito'),
                    'sexo' => $request->get('sexo'),
                    'actualmente' => $request->get('actualmente'),
                    'experiencia' => $request->get('experiencia'),
                    'user_rol' => $request->get('user_rol'),
                    //'archivo_cv_ruta' => $request->get('dni')."_".$archivo->getClientOriginalName(),
                    //'archivo_cv_nombre' => $archivo->getClientOriginalName(),    
                    'user_img' => $request->get('dni')."_".$usuario_img->getClientOriginalName(),
                    
        
                ]);
                // dd($request);    
                return back()->with('succes', 'Profile succesfully updated');   
            
            }else{
                
                if($request->hasFile("archivo_cv_ruta")){
                    
                    $archivo=$request->file("archivo_cv_ruta");
                    $archivo->move(public_path().'/archivos/',$request->get('dni')."_".$archivo->getClientOriginalName());
                       
                
                    
                    
                         auth()->user()->update([
        
                        'dni' => $request->get('dni'),
                        'nombres' => $request->get('nombres'),
                        'apellido_paterno' => $request->get('apellido_paterno'),
                        'apellido_materno' => $request->get('apellido_materno') ,
                        'email' => $request->get('email'),
                        'edad' => $request->get('edad'),
                        'celular' => $request->get('celular'),
                        'departamento' => $request->get('departamento'),
                        'provincia' => $request->get('provincia'),
                        'distrito' => $request->get('distrito'),
                        'sexo' => $request->get('sexo'),
                        'actualmente' => $request->get('actualmente'),
                        'experiencia' => $request->get('experiencia'),
                        'user_rol' => $request->get('user_rol'),
                        'archivo_cv_ruta' => $request->get('dni')."_".$archivo->getClientOriginalName(),
                        'archivo_cv_nombre' => $archivo->getClientOriginalName(),    
                        //'user_img' => $request->get('dni')."_".$usuario_img->getClientOriginalName()
                        
            
                    ]);
                    //dd($request);    
                    return back()->with('succes', 'Profile succesfully updated');  

                }else{

                    auth()->user()->update([
    
                        'dni' => $request->get('dni'),
                        'nombres' => $request->get('nombres'),
                        'apellido_paterno' => $request->get('apellido_paterno'),
                        'apellido_materno' => $request->get('apellido_materno') ,
                        'email' => $request->get('email'),
                        'edad' => $request->get('edad'),
                        'celular' => $request->get('celular'),
                        'departamento' => $request->get('departamento'),
                        'provincia' => $request->get('provincia'),
                        'distrito' => $request->get('distrito'),
                        'sexo' => $request->get('sexo'),
                        'actualmente' => $request->get('actualmente'),
                        'experiencia' => $request->get('experiencia'),
                        'user_rol' => $request->get('user_rol'),
                        //'archivo_cv_ruta' => $request->get('dni')."_".$archivo->getClientOriginalName(),
                        //'archivo_cv_nombre' => $archivo->getClientOriginalName(),    
                        //'user_img' => $request->get('dni')."_".$usuario_img->getClientOriginalName(),
                        
            
                    ]);
                    //dd($request);    
                    return back()->with('succes', 'Profile succesfully updated');
                        
                    }
                
                      
            }
            
                        
       }
    }
}
    





// if($request->hasFile("user_img")){
                                        
//     $usuario_img=$request->file("user_img");
//     $usuario_img->move(public_path().'/img/',$request->get('dni')."_".$usuario_img->getClientOriginalName());
    
//      auth()->user()->update([

//         'dni' => $request->get('dni'),
//         'nombres' => $request->get('nombres'),
//         'apellido_paterno' => $request->get('apellido_paterno'),
//         'apellido_materno' => $request->get('apellido_materno') ,
//         'email' => $request->get('email'),
//         'edad' => $request->get('edad'),
//         'celular' => $request->get('celular'),
//         'departamento' => $request->get('departamento'),
//         'provincia' => $request->get('provincia'),
//         'distrito' => $request->get('distrito'),
//         'sexo' => $request->get('sexo'),
//         'actualmente' => $request->get('actualmente'),
//         'experiencia' => $request->get('experiencia'),
//         //'archivo_cv_ruta' => $request->get('dni')."_".$archivo->getClientOriginalName(),
//         //'archivo_cv_nombre' => $archivo->getClientOriginalName(),    
//         'user_img' => $request->get('dni')."_".$usuario_img->getClientOriginalName(),

//     ]);
//     // dd($request);    
//     return back()->with('succes', 'Profile succesfully updated'); 

// }else{

// auth()->user()->update([
//     'dni' => $request->get('dni'),
//     'nombres' => $request->get('nombres'),
//     'apellido_paterno' => $request->get('apellido_paterno'),
//     'apellido_materno' => $request->get('apellido_materno') ,
//     'email' => $request->get('email'),
//     'edad' => $request->get('edad'),
//     'celular' => $request->get('celular'),
//     'departamento' => $request->get('departamento'),
//     'provincia' => $request->get('provincia'),
//     'distrito' => $request->get('distrito'),
//     'sexo' => $request->get('sexo'),
//     'actualmente' => $request->get('actualmente'),
//     'experiencia' => $request->get('experiencia'),
//     //'archivo_cv_ruta' => $request->get('dni')."_".$archivo->getClientOriginalName(),
//     //'archivo_cv_nombre' => $archivo->getClientOriginalName(),    
//     // 'user_img' => $request->get('dni')."_".$usuario_img->getClientOriginalName(),

// ]);
// // dd($request);

// return back()->with('succes', 'Profile succesfully updated');
 //}