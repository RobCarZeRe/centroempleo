
    
@extends('layouts.app')

@section('content')

<script>
  window.addEventListener('DOMContentLoaded', () => {
    const myModal = new bootstrap.Modal(document.getElementById('exampleModal'))
    myModal.show()
  })
</script>
<style>
    .fixed-height {
      height: 800px; /* Cambia el valor de la altura según tus necesidades */
 
    }
    
  </style>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header ">
        <h1 class="modal-title fs-4 text-center" id="exampleModalLabel">Cursos Disponibles en nuestro centro de Capacitaciones</h1>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">X</button>
      </div>
      <div class="modal-body ">



            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="/img/bg-profile.jpg" class="d-block w-100 fixed-height" alt="...">
            </div>
            <div class="carousel-item">
            <img src="/img/marie.jpg" class="d-block w-100 fixed-height" alt="...">
            </div>
            <div class="carousel-item">
            <img src="/img/bruce-mars.jpg" class="d-block w-100 fixed-height" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>


    </div>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>

    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-100">
           
                <div class="container">
                    




                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                            <div class="card card-plain">
                                <div class="card-header pb-0 text-start">
                                    <h4 class="font-weight-bolder">Iniciar Sesion</h4>
                                    <p class="mb-0">Ingresa tu correo y tu contraseña para registrarte</p>
                                </div>
                                <div class="card-body">
                                    <form role="form" method="POST" action="{{ route('login.perform') }}">
                                        @csrf
                                        @method('post')
                                        <div class="flex flex-col mb-3">
                                            <input type="email" name="email" class="form-control form-control-lg" value="" aria-label="Email" placeholder="Ingresa tu correo">
                                            @error('email') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                        </div>
                                        <div class="flex flex-col mb-3">
                                            <input type="password" name="password" class="form-control form-control-lg" aria-label="Password" value="" placeholder="Ingresa tu contraseña" >
                                            @error('password') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                        </div>
                                        
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-lg btn-danger btn-lg w-100 mt-4 mb-0">Ingresar</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-1 text-sm mx-auto">
                                        Olvidaste tu Contraseña? recuperala
                                        <a href="{{ route('reset-password') }}" class="text-danger text-gradient font-weight-bold">Aqui</a>
                                    </p>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-sm mx-auto">
                                        No tienes cuenta
                                        <a href="{{ route('register') }}" class="text-danger text-gradient font-weight-bold">Registrate aqui</a>
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="col-7 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column ">
                        <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden"
                            style="background-image: url('/img/munitacna.gif'); 
                            background-size: 100% 100%;
                            background-repeat: no-repeat;
                            background-position: center;">
                            <span class="mask bg-gradient-danger opacity-6"></span>
                            <!-- <h4 class="mt-5 text-white font-weight-bolder position-relative">"Attention is the new currency"</h4>
                            <p class="text-white position-relative">The more effortless the writing looks, the more effort the writer actually put into the process.</p> -->
                        </div>
                        </div>



                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('content')



<script>
$( document ).ready(function() {
    $('#exampleModal').modal('show');
});
</script>

@endsection
