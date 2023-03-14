@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'User Management'])
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
                            </thead>
                            
                            <tbody>
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
                               
                            </tbody>
                            
                        </table>

                       

<!-- <table class="table-bordered table pull-right" id="mytable" cellspacing="0" style="width: 100%;">
 <thead>
 <tr role="row">
 <th>Name</th>
 <th>Position</th>
 <th>Office</th>
 <th>Age</th>
 <th>Start date</th>
 <th>Salary</th>
 </tr>
 </thead>
 <tbody>
 <tr>
 <td>Satou Nao</td>
 <td>Accountant</td>
 <td>Tokyo</td>
 <td>33</td>
 <td>2008/11/28</td>
 <td>$162,700</td>
 </tr>
 <tr>
 <td>Ramos</td>
 <td>Chief Executive Officer (CEO)</td>
 <td>London</td>
 <td>47</td>
 <td>2009/10/09</td>
 <td>$1,200,000</td>
 </tr>
 <tr>
 <td>Ashton Cox</td>
 <td>Junior Technical Author</td>
 <td>San Francisco</td>
 <td>66</td>
 <td>2009/01/12</td>
 <td>$86,000</td>
 </tr>
 <tr>
 <td>Brad Gree</td>
 <td>Software Engineer</td>
 <td>London</td>
 <td>41</td>
 <td>2012/10/13</td>
 <td>$132,000</td>
 </tr>
 <tr>
 <td>Wagner Kumar</td>
 <td>Software Engineer</td>
 <td>San Francisco</td>
 <td>28</td>
 <td>2011/06/07</td>
 <td>$206,850</td>
 </tr>
 <tr>
 <td>Williamson j.</td>
 <td>Integration Specialist</td>
 <td>New York</td>
 <td>61</td>
 <td>2012/12/02</td>
 <td>$372,000</td>
 </tr>
 <tr>
 <td>Salman Khan</td>
 <td>Software Engineer</td>
 <td>London</td>
 <td>38</td>
 <td>2011/05/03</td>
 <td>$163,500</td>
 </tr>
 <tr>
 <td>Vinton Cerf</td>
 <td>Pre-Sales Support</td>
 <td>New York</td>
 <td>21</td>
 <td>2011/12/12</td>
 <td>$106,450</td>
 </tr>
 <tr>
 <td>Naveen Mishra</td>
 <td>Sales Assistant</td>
 <td>New York</td>
 <td>46</td>
 <td>2011/12/06</td>
 <td>$145,600</td>
 </tr>
 <tr>
 <td>Zohair Raza</td>
 <td>Engineer</td>
 <td>Dubai</td>
 <td>30</td>
 <td>2012/03/29</td>
 <td>$433,060</td>
 </tr>
 </tbody>
</table> -->

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
