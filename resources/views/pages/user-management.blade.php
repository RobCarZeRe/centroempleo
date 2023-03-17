@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Administracion de Usuarios'])
    <div class="row mt-4 mx-4">
        <div class="col-12">
            
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Users</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0" id="mytable">
                            <thead>
                            
                            @if (auth()->user()->user_rol == "superadmin")
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">DNI</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nombre
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Apellido</th>
                                        <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Edad</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Estudia/trabaja</th>
                                        <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Acciones</th>
                                        
                                </tr>
                            @else
                            <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">DNI</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nombre
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Apellido</th>
                                        <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Edad</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Estudia/trabaja</th>
                                        
                                        
                                </tr>

                            @endif
                            </thead>
                            
                            <tbody>

                                    @if (auth()->user()->user_rol == "superadmin")
                                     
                                    @foreach ($datos as $item)
                            
                                <tr>
                                    <td>
                                    <p class="text-sm font-weight-bold mb-0">{{ $item->dni }}</p>

                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">{{ $item->nombres }}</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-sm font-weight-bold mb-0">{{ $item->apellido_paterno }} {{ $item->apellido_materno }} </p>
                                    </td>
                                    <td class="align-middle text-center">
                                    <p class="text-sm font-weight-bold mb-0">{{ $item->edad }} </p>

                                    </td>
                                    <td class="align-middle text-center">
                                    <p class="text-sm font-weight-bold mb-0">{{ $item->actualmente }} </p>

                                    </td>
                                    <td class="align-middle text-center">
                                    <p class="text-sm font-weight-bold mb-0">Hacer administrador </p>

                                    </td>
                                    
                                    
                                    
                                </tr>
                            @endforeach

                                    @else
                                    @foreach ($datos as $item)
                            
                                <tr>
                                    <td>
                                    <p class="text-sm font-weight-bold mb-0">{{ $item->dni }}</p>

                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">{{ $item->nombres }}</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-sm font-weight-bold mb-0">{{ $item->apellido_paterno }} {{ $item->apellido_materno }} </p>
                                    </td>
                                    <td class="align-middle text-center">
                                    <p class="text-sm font-weight-bold mb-0">{{ $item->edad }} </p>

                                    </td>
                                    <td class="align-middle text-center">
                                    <p class="text-sm font-weight-bold mb-0">{{ $item->actualmente }} </p>

                                    </td>
                                    
                                    
                                    
                                </tr>
                            @endforeach
                                    @endif
                            
                               
                            </tbody>
                            
                        </table>



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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
