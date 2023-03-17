@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Convocatorias'])
    <div class="row mt-4 mx-4">
        <div class="col-12">
            
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Convocatorias Vigentes</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0" id="mytable">
                            <thead>
                            

                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nombre Empresa</th>
                                    
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email Empresa</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Inicio</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fin</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Acciones</th>
                                    

                                        
                                        
                                </tr>
                            </thead>
                            
                            <tbody>
                            @foreach ($convocatorias_activas as $convocatoria)
                            
                                <tr>
                                    <td>
                                    <p class="text-sm font-weight-bold mb-0">{{ $convocatoria->id}}</p>

                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0"> {{ $convocatoria->empresa}} </p>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">{{ $convocatoria->email_emp }} </p>
                                    </td>
                                    <td>
                                    <p class="text-sm font-weight-bold mb-0">{{ $convocatoria->inicio }} </p>

                                    </td>
                                    <td>
                                    <p class="text-sm font-weight-bold mb-0">{{ $convocatoria->fin }} </p>

                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">Cerrar Convocatoria</p>
                                       
                                    </td>
                                    
                                </tr>
                            @endforeach
                               
                            </tbody>
                            
                        </table>
                        
                       

                    </div>
                </div>
            </div>

{{--  ---------------------------------------------------------------  --}}

            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Convocatorias Pasadas</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0" id="mytable">
                            <thead>
                            

                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nombre Empresa</th>
                                    
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email Empresa</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Inicio</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fin</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Acciones</th>

                                        
                                        
                                </tr>
                            </thead>
                            
                            <tbody>
                            @foreach ($convocatorias_pasadas as $convocatoria)
                            
                                <tr>
                                    <td>
                                    <p class="text-sm font-weight-bold mb-0">{{ $convocatoria->id}}</p>

                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0"> {{ $convocatoria->empresa}} </p>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">{{ $convocatoria->email_emp }} </p>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">{{ $convocatoria->inicio }} </p>

                                    </td>
                                    <td>
                                    <p class="text-sm font-weight-bold mb-0">{{ $convocatoria->fin }} </p>

                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">Cerrar Convocatoria</p>
                                        

    
                                        </td>
                                    
                                </tr>
                            @endforeach
                               
                            </tbody>
                            
                        </table>
                       

                    </div>
                </div>
            </div>


            



        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<script>
 // Write on keyup event of keyword input element
 $(document).ready(function(){
 $("#search").keyup(function(){
 _this = this;
 // Show only matching TR, hide rest of them
 $.each($("#mytable tbody tr"), function() {
 if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
 $(this).hide();
 else
 $(this).show();
 });
 });
});
</script>
@endsection
