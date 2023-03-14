@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Tu Perfil'])
    <div class="card shadow-lg mx-4 card-profile-bottom">
        <div class="card-body p-3">
            <div class="row gx-4">
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        <img src="/img/{{auth()->user()->user_img}}" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                            {{ auth()->user()->nombres ?? 'nombres' }} {{ auth()->user()->apellido_paterno ?? 'Apellido' }}
                        </h5>
                        <p class="mb-0 font-weight-bold text-sm">
                            Public Relations
                        </p>
                    </div>
                </div>
                <!-- <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                    <div class="nav-wrapper position-relative end-0">
                        <ul class="nav nav-pills nav-fill p-1" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center "
                                    data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">
                                    <i class="ni ni-app"></i>
                                    <span class="ms-2">App</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center "
                                    data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                                    <i class="ni ni-email-83"></i>
                                    <span class="ms-2">Messages</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center "
                                    data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                                    <i class="ni ni-settings-gear-65"></i>
                                    <span class="ms-2">Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <div id="alert">
        @include('components.alert')
    </div>

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <form role="form" method="POST" action={{ route('profile.update') }} enctype="multipart/form-data">
                        @csrf
                        <div class="card-header pb-0">
                            <div class="d-flex align-items-center">
                                <p class="mb-0">Editar Perfil</p>
                               
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="text-uppercase text-sm">Informacion de Usuario</p>
                            <div class="row">
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">DNI</label>
                                        <input class="form-control" type="text" name="dni" id="dni" value="{{ old('dni', auth()->user()->dni) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Nombres</label>
                                        <input class="form-control" type="text" name="nombres" id="nombres" value="{{ old('nombres', auth()->user()->nombres) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Apellido Paterno</label>
                                        <input class="form-control" type="text" name="apellido_paterno" value="{{ old('apellido_paterno', auth()->user()->apellido_paterno) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Apellido Materno</label>
                                        <input class="form-control" type="text" name="apellido_materno"  value="{{ old('apellido_materno', auth()->user()->apellido_materno) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Correo Electrónico</label>
                                        <input class="form-control" type="email" name="email" value="{{ old('email', auth()->user()->email) }}">
                                    </div>                                    
                                </div>

                                

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Edad</label>
                                        <input class="form-control" type="text" name="edad" value="{{ old('edad', auth()->user()->edad) }}">
                                    </div>                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Celular / Telefono</label>
                                        <input class="form-control" type="text" name="celular" value="{{ old('celular', auth()->user()->celular) }}">
                                    </div>                                    
                                </div>

                                <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Departamento</label>
                                        <input class="form-control" type="text" name="departamento" value="{{ old('departamento', auth()->user()->departamento) }}">
                                </div>
                                <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Provincia</label>
                                        <input class="form-control" type="text" name="provincia" value="{{ old('provincia', auth()->user()->provincia) }}">
                                </div>
                                <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Distrito</label>
                                        <input class="form-control" type="text" name="distrito" value="{{ old('distrito', auth()->user()->distrito) }}">
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">

                                            <label for="example-text-input" class="form-control-label">Sexo</label>

                                            <div class="form-check mb-2">
                                            <label class="custom-control-label" for="customRadio1">Masculino</label>
                                            
                                            <input class="form-check-input" type="radio" name="sexo" value="Masculino" id="sexo" @if(auth()->user()->sexo == "Masculino") checked="true" @endif>
                                            </div>
                                                                      
                                            
                                            
                                            <div class="form-check">
                                            <label class="custom-control-label" for="customRadio2">Femenino</label>
                                            <input class="form-check-input" type="radio" name="sexo" value="Femenino" id="sexo" @if(auth()->user()->sexo == "Femenino") checked="true" @endif>
                                            </div>
                                    </div>                                    
                                </div>
                                
                                <?php
                                        if(isset($_POST['submit'])){
                                        if(!empty($_POST['sexo'])) {
                                            echo '  ' . $_POST['sexo'];
                                        } else {
                                            echo 'Please select the value.';
                                        }
                                        }
                                    ?>
                            
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Actualmente</label>

                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="actualmente" id="actualmente">
                                    <option selected>{{ old('actualmente', auth()->user()->actualmente) }}</option>
                                    <option value="Estudia">Estudia</option>
                                    <option value="Trabaja">Trabaja</option>
                                    <option value="Estudia y trabaja">Estudia y Trabaja</option>
                                    <option value="No Estudia ni trabaja">No Estudia ni Trabaja</option>
                                    
                                    </select>     


                                    </div>                                    
                                </div>
                                              
                            </div>
                            <hr class="horizontal dark">
                            <p class="text-uppercase text-sm">Experiencia Laboral</p>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Mencione su experiencia</label>
                                        <textarea class="form-control" id="experiencia" name="experiencia" rows="10">{{ old('experiencia', auth()->user()->experiencia) }}</textarea>
                                    </div>
                                </div>
                                <!-- <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">City</label>
                                        <input class="form-control" type="text" name="city" value="{{ old('city', auth()->user()->city) }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Country</label>
                                        <input class="form-control" type="text" name="country" value="{{ old('country', auth()->user()->country) }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Postal code</label>
                                        <input class="form-control" type="text" name="postal" value="{{ old('postal', auth()->user()->postal) }}">
                                    </div>
                                </div> -->
                            </div>
                            <hr class="horizontal dark">
                            <p class="text-uppercase text-sm">Subir CV</p>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Seleccione el archivo a subir</label>
                                        <input class="form-control" type="file" id="archivo_cv_ruta" name="archivo_cv_ruta" value="{{auth()->user()->archivo_cv_ruta}}">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <input class="form-control" type="hidden" name="user_rol" id="user_rol" value="usuario">


                            @if(auth()->user()->archivo_cv_ruta == "")
                            
                            @else

                            <li class="list-group-item border-0 d-flex ps-0 mb-2 border-radius-lg">
                                <div class="d-flex flex-column">
                                    <h6 class="mb-1 text-dark font-weight-bold text-sm">Descarga tu cv </h6>
                                    <span class="text-xs">Aquí</span>
                                </div>
                                <div class="d-flex align-items-center text-sm">
                                    <a href="Archivos/{{auth()->user()->archivo_cv_ruta}}"
                                    <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i
                                            class="fas fa-file-pdf text-lg me-1"></i> {{ auth()->user()->archivo_cv_nombre }}</button></a>
                                </div>
                            </li>
                            @endif
                                            
                            <div class="form-group">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Seleccione Su foto a subir</label>
                                    <input class="form-control" type="file" id="user_img" name="user_img">
                                    </div>
                                </div>
                            </div>



                            
                                        
                        
                        <div class="card-header pb-0">
                            <div class="d-flex align-items-center">
                                
                                <button type="submit" class="btn btn-primary btn-sm ms-auto">Guardar</button>
                            </div>
                        </div>
                    </form>
                    

                </div>

            </div>


{{--  >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>   Esta seccion es para la foto   <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<  --}}

                        <div class="col-md-4">
                            <div class="card card-profile">
                                <img src="/img/bg-profile.jpg" alt="Image placeholder" class="card-img-top">
                                <div class="row justify-content-center">
                                    <div class="col-4 col-lg-4 order-lg-2">
                                        <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                                            <a href="javascript:;">
                                                <img src="/img/{{auth()->user()->user_img}}"
                                                    class="rounded-circle img-fluid border border-2 border-white">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">      
                                    
                                    <div class="card-header pb-0">
                                        <div class="d-flex align-items-center">
                                            
                                            <button type="submit" class="btn btn-primary btn-sm ms-auto">Guardar</button>
                                        </div>
                                    </div> 
                                                  
                            </div>


                    
                    
                    
                    
                    <div class="card-body pt-0">                   



                         <!-- <div class="row">
                            <div class="col">
                                <div class="d-flex justify-content-center">
                                    <div class="d-grid text-center">
                                        <span class="text-lg font-weight-bolder">22</span>
                                        <span class="text-sm opacity-8">Friends</span>
                                    </div>
                                    <div class="d-grid text-center mx-4">
                                        <span class="text-lg font-weight-bolder">10</span>
                                        <span class="text-sm opacity-8">Photos</span>
                                    </div>
                                    <div class="d-grid text-center">
                                        <span class="text-lg font-weight-bolder">89</span>
                                        <span class="text-sm opacity-8">Comments</span>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="text-center mt-4">
                            <h5>
                                Mark Davis<span class="font-weight-light">, 35</span>
                            </h5>
                            <div class="h6 font-weight-300">
                                <i class="ni location_pin mr-2"></i>Bucharest, Romania
                            </div>
                            <div class="h6 mt-4">
                                <i class="ni business_briefcase-24 mr-2"></i>Solution Manager - Creative Tim Officer
                            </div>
                            <div>
                                <i class="ni education_hat mr-2"></i>University of Computer Science
                            </div>
                        </div>  -->
                    </div>
                </div>
            </div> 
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection
