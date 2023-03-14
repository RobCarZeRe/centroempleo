@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Anuncio'])
    <div class="card shadow-lg mx-4 card-profile-bottom">
        <div class="card-body p-3">
            <div class="row gx-4">
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        <img src="/img/team-2.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                        {{ auth()->user()->nombres ?? 'nombres' }} {{ auth()->user()->apellido_paterno ?? 'Apellido Paterno' }} {{ auth()->user()->apellido_materno ?? 'Apellido Materno' }} 
                        
                        </h5>
                        <p class="mb-0 font-weight-bold text-sm">
                            Public Relations
                        </p>
                    </div>
                </div>
                
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
                    <form role="form" method="POST" action={{ route('anuncio.store') }} enctype="multipart/form-data">
                        @csrf
                        <div class="card-header pb-0">
                            <div class="d-flex align-items-center">
                                <p class="mb-0">Crear Anuncio</p>
                               
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="text-uppercase text-sm">Información de Anuncio</p>
                            <div class="row">         
                                                   
                                <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Nombre de la Empresa</label>
                                        <input class="form-control" type="text" name="empresa" id="empresa" value="">
                                        @error('empresa') <p class='text-danger text-xs pt-1'> {{ $message }} </p> @enderror

                                    </div>

                                <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Correo de la Empresa</label>
                                        <input class="form-control" type="text" name="email_emp" id="email_emp" value="">
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Descripción del Anuncio</label>
                                        <textarea class="form-control" id="texto_empresa" name="texto_anuncio" rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Remuneración</label>
                                        <input class="form-control" type="text" name="remuneracion" value="">
                                </div>
                                <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Inicio de Convocatoria</label>
                                                                      
                                        <input class="form-control" type="datetime-local" value="" id="inicio" name="inicio">
                                
                                </div>
                                <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Fin de Convocatoria</label>
                                                                      
                                        <input class="form-control" type="datetime-local" value="" id="fin" name="fin">
                                
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">

                                        
                                
                                        

                                        <label for="example-text-input" class="form-control-label">Tipo de empresa</label>

                                        <div class="form-check mb-2">
                                        <label class="custom-control-label" for="customRadio1">Pública</label>
                                        <input class="form-check-input" type="radio" name="tipoemp" value="Publica" id="opcion1">
                                        </div>
                                                                


                                        <div class="form-check">
                                        <label class="custom-control-label" for="customRadio2">Privada</label>
                                        <input class="form-check-input" type="radio" name="tipoemp" value="Privada" id="opcion2">
                                        </div>



                                        <div class="form-group" id="formempresa">

                                        
                                        <label for="example-text-input" class="form-control-label">Link para postular al empleo</label>
                                        <input class="form-control" type="link" name="link" value="" name="link">
                                
                                        </div> 
                                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                            <script>
                                            $(document).ready(function() {
                                                $('input[type="radio"]').click(function() {
                                                    if($(this).attr('id') == 'opcion1') {
                                                        $('#formempresa').show();
                                                        
                                                    }

                                                    else if($(this).attr('id') == 'opcion2') {
                                                        
                                                        $('#formempresa').hide();
                                                    }
                                                });
                                            });
                                        </script>
                                                                       
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

             
                
            
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection