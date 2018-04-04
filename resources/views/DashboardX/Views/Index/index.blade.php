@extends('DashboardX.Layout.layout')

@section('content')


<!-- INDEX -->
<div class="pcoded-content">
    <div class="pcoded-inner-content">
         <div class="main-body">
             <div class="page-wrapper">

                  <div class="page-body">
                      <div class="row">

                        <!-- card1 start -->
                        <div class="col-md-6 col-xl-3">
                            <div class="card widget-card-1">
                                <div class="card-block-small">
                                    <i class="fa fa-users bg-c-blue card1-icon"></i>
                                    <span class="text-c-blue f-w-600">Usuarios</span>
                                    <h4> {!! $user !!} </h4>
                                    <div>
                                        <span class="f-left m-t-10 text-muted">
                                            <i class="text-c-blue f-16 m-r-10"></i>Usuarios Creados
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card2 end -->

                        <!-- card3 start -->
                        <div class="col-md-6 col-xl-3">
                            <div class="card widget-card-1">
                                <div class="card-block-small">
                                    <i class="fas fa-tree bg-c-green  card1-icon"></i>
                                    <span class="  text-c-greenf-w-600">Arboles</span>
                                    <h4> {!! $tree !!} </h4>
                                    <div>
                                        <span class="f-left m-t-10 text-muted">
                                            <i class="text-c-green  f-16 m-r-10"></i>Árboles Creados
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card1 end -->

                        <!-- card1 start -->
                        <div class="col-md-6 col-xl-3">
                            <div class="card widget-card-1">
                                <div class="card-block-small">
                                    <i class="fas fa-fire bg-c-pink card1-icon"></i>
                                    <span class="text-c-pink f-w-600">Huella CO2</span>
                                    <h4> {!! $mark !!} </h4>
                                    <div>
                                        <span class="f-left m-t-10 text-muted">
                                            <i class="text-c-pink f-16 m-r-10"></i> Huellas de CO2 Creadas
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card3 end -->   






                        <!-- Statestics Start  -->                                 
                        <div class="col-md-12 col-xl-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Estadística</h5>
                                    <div class="card-header-left ">
                                    </div>
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li><i class="icofont icofont-simple-left "></i></li>
                                            <li><i class="icofont icofont-maximize full-card"></i></li>
                                            <li><i class="icofont icofont-minus minimize-card"></i></li>
                                            <li><i class="icofont icofont-refresh reload-card"></i></li>
                                            <li><i class="icofont icofont-error close-card"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="card-block">
                                    <input type="hidden" name"_token" value="{{ csrf_token() }}" id="token" >
                                    <!-- <div id="statestics-chart" style="height:517px;"></div> -->
                                    <canvas id="myChart"></canvas>
                                </div>

                            </div>
                        </div>   
                        <!-- Statestics End -->   





                    </div>                        
                </div>
            </div>
        </div>
    </div>
</div>


@endsection


@section('js')
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    
        <script>
            

            
            
            var $window = $(window);
            var nav = $('.fixed-button');
            var token = $('input #token').val();

            $window.scroll( function(){
                if ($window.scrollTop() >= 200) {
                     nav.addClass('active');
                } else {
                 nav.removeClass('active');
                }
            })
            
                                
            $().ready(function() {

 
                $.get("dashboard/chartInfo", function() {                

                }).done(function (data) { 

                    var ctx = document.getElementById('myChart').getContext('2d');                                                        

                    var arbolesXmes = []
                     
                    for (i = 0; i < 11; i++) { 
                        arbolesXmes[i] = 0;                              
                    }

                        

                        $(data.trees).each(function (key) {
                            date = new Date(data.trees[key].created_at)

                            switch(date.getMonth()){
                                case 0: 
                                    arbolesXmes[0]+= 1
                                    break;

                                case 1: 
                                    arbolesXmes[1]+= 1
                                    break;

                                case 2: 
                                    arbolesXmes[2]+= 1
                                    break;

                                case 3: 
                                    arbolesXmes[3]+= 1
                                    break;

                                case 4: 
                                    arbolesXmes[4]+= 1
                                    break;

                                case 5: 
                                    arbolesXmes[5]+= 1
                                    break;

                                case 6: 
                                    arbolesXmes[6]+= 1
                                    break;

                                case 7: 
                                    arbolesXmes[7]+= 1
                                    break; 

                                case 8: 
                                    arbolesXmes[8]+= 1
                                    break;

                                case 9: 
                                    arbolesXmes[9]+= 1
                                    break;

                                case 10: 
                                    arbolesXmes[10]+= 1
                                    break;

                                case 11: 
                                    arbolesXmes[11]+= 1
                                    break;                             
                            }  // End switch                           

                        })

                        

                        var chart = new Chart(ctx, {
                        
                        // The type of chart we want to create
                        type: 'line',

                        // The data for our dataset
                        data: {
                            labels: 
                                ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
                            datasets: [{
                                label: "Cantidad de Árboles x Mes",
                                backgroundColor: 'rgb(255, 99, 132)',
                                borderColor: 'rgb(255, 99, 132)',
                                data: arbolesXmes,
                            }] 
                        },

                        // Configuration options go here
                        options: {
                            tooltips: {
                                mode: 'point'
                            }
                        }
                        
                        }); // End ChartJs


                        
                    }) // End done()

                   .fail(function (msg) {
                        console.log("Algo salio mál, lo sentimos .... ")                    
                   });                                            
                    
            }); 



            
            

        </script>
        
    


@endsection
