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



        if ($request->hasFile('archivo_cv_ruta')) {
            $archivo_cv_ruta = $request->file('archivo_cv_ruta');
            $extension = $archivo_cv_ruta->getClientOriginalExtension();
            if ($extension == 'pdf') {
                $archivo_cv_ruta->move(public_path().'/archivos/', $request->dni."_".$archivo_cv_ruta->getClientOriginalName());
            } else {
                return back()->with('error', 'El Curriculum Vitae debe ser en formato PDF');
            }
        }
        
        if ($request->hasFile('user_img')) {
            $user_img = $request->file('user_img');
            $extension = $user_img->getClientOriginalExtension();
            if ($extension == 'jpg' || $extension == 'png') {
                $user_img->move(public_path().'/img/', $request->dni."_".$user_img->getClientOriginalName());
            } else {
                return back()->with('error', 'La Foto debe ser en formato JPG o PNG');
            }
        }
        
        auth()->user()->update([
            'dni' => $request->dni,
            'nombres' => $request->nombres,
            'apellido_paterno' => $request->apellido_paterno,
            'apellido_materno' => $request->apellido_materno,
            'email' => $request->email,
            'edad' => $request->edad,
            'celular' => $request->celular,
            'departamento' => $request->departamento,
            'provincia' => $request->provincia,
            'distrito' => $request->distrito,
            'sexo' => $request->sexo,
            'actualmente' => $request->actualmente,
            'experiencia' => $request->experiencia,
            'archivo_cv_ruta' => $request->hasFile('archivo_cv_ruta') ? $request->dni."_".$archivo_cv_ruta->getClientOriginalName() : auth()->user()->archivo_cv_ruta,
            'archivo_cv_nombre' => $request->hasFile('archivo_cv_ruta') ? $archivo_cv_ruta->getClientOriginalName() : auth()->user()->archivo_cv_nombre,
            'user_img' => $request->hasFile('user_img') ? $request->dni."_".$user_img->getClientOriginalName() : auth()->user()->user_img,
        ]);
        
        return back()->with('succes', 'Perfil actualizado correctamente');


    }
}









        // if ($request->hasFile('archivo_cv_ruta')) {
        //     $archivo_cv_ruta = $request->file('archivo_cv_ruta');
        //     $archivo_cv_ruta->move(public_path().'/archivos/', $request->dni."_".$archivo_cv_ruta->getClientOriginalName());
        // }
        
        // if ($request->hasFile('user_img')) {
        //     $user_img = $request->file('user_img');
        //     $user_img->move(public_path().'/img/', $request->dni."_".$user_img->getClientOriginalName());
        // }
        
        // auth()->user()->update([
        //     'dni' => $request->dni,
        //     'nombres' => $request->nombres,
        //     'apellido_paterno' => $request->apellido_paterno,
        //     'apellido_materno' => $request->apellido_materno,
        //     'email' => $request->email,
        //     'edad' => $request->edad,
        //     'celular' => $request->celular,
        //     'departamento' => $request->departamento,
        //     'provincia' => $request->provincia,
        //     'distrito' => $request->distrito,
        //     'sexo' => $request->sexo,
        //     'actualmente' => $request->actualmente,
        //     'experiencia' => $request->experiencia,
        //     'archivo_cv_ruta' => $request->hasFile('archivo_cv_ruta') ? $request->dni."_".$archivo_cv_ruta->getClientOriginalName() : auth()->user()->archivo_cv_ruta,
        //     'archivo_cv_nombre' => $request->hasFile('archivo_cv_ruta') ? $archivo_cv_ruta->getClientOriginalName() : auth()->user()->archivo_cv_nombre,
        //     'user_img' => $request->hasFile('user_img') ? $request->dni."_".$user_img->getClientOriginalName() : auth()->user()->user_img,
        // ]);
        
        // return back()->with('succes', 'Perfil actualizado correctamente');





















//         if ($request->hasFile("archivo_cv_ruta") && $request->hasFile("user_img")) {

//     $usuario_img = $request->file("user_img");
//     $extension_img = $usuario_img->getClientOriginalExtension();
//     if ($extension_img != 'jpg' && $extension_img != 'jpeg') {
//         // handle invalid image file
//     }
//     $usuario_img->move(public_path().'/img/',$request->get('dni')."_".$usuario_img->getClientOriginalName());

//     $archivo = $request->file("archivo_cv_ruta");
//     $extension_pdf = $archivo->getClientOriginalExtension();
//     if ($extension_pdf != 'pdf') {
//         // handle invalid PDF file
//     }
//     $archivo->move(public_path().'/archivos/',$request->get('dni')."_".$archivo->getClientOriginalName());
//     }





         
        
//         if($request->hasFile("archivo_cv_ruta") && $request->hasFile("user_img")){

//             $usuario_img=$request->file("user_img");
//             $usuario_img->move(public_path().'/img/',$request->get('dni')."_".$usuario_img->getClientOriginalName());

//             $archivo=$request->file("archivo_cv_ruta");
//             $archivo->move(public_path().'/archivos/',$request->get('dni')."_".$archivo->getClientOriginalName());
           
//                  auth()->user()->update([

//                 'dni' => $request->get('dni'),
//                 'nombres' => $request->get('nombres'),
//                 'apellido_paterno' => $request->get('apellido_paterno'),
//                 'apellido_materno' => $request->get('apellido_materno') ,
//                 'email' => $request->get('email'),
//                 'edad' => $request->get('edad'),
//                 'celular' => $request->get('celular'),
//                 'departamento' => $request->get('departamento'),
//                 'provincia' => $request->get('provincia'),
//                 'distrito' => $request->get('distrito'),
//                 'sexo' => $request->get('sexo'),
//                 'actualmente' => $request->get('actualmente'),
//                 'experiencia' => $request->get('experiencia'),
//                 'archivo_cv_ruta' => $request->get('dni')."_".$archivo->getClientOriginalName(),
//                 'archivo_cv_nombre' => $archivo->getClientOriginalName(),    
//                 'user_img' => $request->get('dni')."_".$usuario_img->getClientOriginalName(),
//                 //'user_rol' => $request->get('user_rol'),
    
//             ]);
//             // dd($request);    
//             return back()->with('succes', 'Perfil Actualizado correctamente');   
                     
//         }else{
            
//             if($request->hasFile("user_img")){
                
//                 $usuario_img=$request->file("user_img");
//                 $usuario_img->move(public_path().'/img/',$request->get('dni')."_".$usuario_img->getClientOriginalName());
                
//                      auth()->user()->update([
    
//                     'dni' => $request->get('dni'),
//                     'nombres' => $request->get('nombres'),
//                     'apellido_paterno' => $request->get('apellido_paterno'),
//                     'apellido_materno' => $request->get('apellido_materno') ,
//                     'email' => $request->get('email'),
//                     'edad' => $request->get('edad'),
//                     'celular' => $request->get('celular'),
//                     'departamento' => $request->get('departamento'),
//                     'provincia' => $request->get('provincia'),
//                     'distrito' => $request->get('distrito'),
//                     'sexo' => $request->get('sexo'),
//                     'actualmente' => $request->get('actualmente'),
//                     'experiencia' => $request->get('experiencia'),
//                     //'user_rol' => $request->get('user_rol'),
//                     //'archivo_cv_ruta' => $request->get('dni')."_".$archivo->getClientOriginalName(),
//                     //'archivo_cv_nombre' => $archivo->getClientOriginalName(),    
//                     'user_img' => $request->get('dni')."_".$usuario_img->getClientOriginalName(),
                    
        
//                 ]);
//                 // dd($request);    
//                 return back()->with('succes', 'Perfil Actualizado correctamente');   
            
//             }else{
                
//                 if($request->hasFile("archivo_cv_ruta")){
                    
//                     $archivo=$request->file("archivo_cv_ruta");
//                     $archivo->move(public_path().'/archivos/',$request->get('dni')."_".$archivo->getClientOriginalName());
                       
                
                    
                    
//                          auth()->user()->update([
        
//                         'dni' => $request->get('dni'),
//                         'nombres' => $request->get('nombres'),
//                         'apellido_paterno' => $request->get('apellido_paterno'),
//                         'apellido_materno' => $request->get('apellido_materno') ,
//                         'email' => $request->get('email'),
//                         'edad' => $request->get('edad'),
//                         'celular' => $request->get('celular'),
//                         'departamento' => $request->get('departamento'),
//                         'provincia' => $request->get('provincia'),
//                         'distrito' => $request->get('distrito'),
//                         'sexo' => $request->get('sexo'),
//                         'actualmente' => $request->get('actualmente'),
//                         'experiencia' => $request->get('experiencia'),
//                         //'user_rol' => $request->get('user_rol'),
//                         'archivo_cv_ruta' => $request->get('dni')."_".$archivo->getClientOriginalName(),
//                         'archivo_cv_nombre' => $archivo->getClientOriginalName(),    
//                         //'user_img' => $request->get('dni')."_".$usuario_img->getClientOriginalName()
                        
            
//                     ]);
//                     //dd($request);    
//                     return back()->with('succes', 'Perfil Actualizado correctamente');  

//                 }else{

//                     auth()->user()->update([
    
//                         'dni' => $request->get('dni'),
//                         'nombres' => $request->get('nombres'),
//                         'apellido_paterno' => $request->get('apellido_paterno'),
//                         'apellido_materno' => $request->get('apellido_materno') ,
//                         'email' => $request->get('email'),
//                         'edad' => $request->get('edad'),
//                         'celular' => $request->get('celular'),
//                         'departamento' => $request->get('departamento'),
//                         'provincia' => $request->get('provincia'),
//                         'distrito' => $request->get('distrito'),
//                         'sexo' => $request->get('sexo'),
//                         'actualmente' => $request->get('actualmente'),
//                         'experiencia' => $request->get('experiencia'),
//                         //'user_rol' => $request->get('user_rol'),
//                         //'archivo_cv_ruta' => $request->get('dni')."_".$archivo->getClientOriginalName(),
//                         //'archivo_cv_nombre' => $archivo->getClientOriginalName(),    
//                         //'user_img' => $request->get('dni')."_".$usuario_img->getClientOriginalName(),
                        
            
//                     ]);
//                     //dd($request);    
//                     return back()->with('succes', 'Perfil Actualizado correctamente');
                        
//                     }
                
                      
//             }
            
                        
//        }
//     }
// }
    





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