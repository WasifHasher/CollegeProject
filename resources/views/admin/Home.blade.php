
<?php
    
    $months = array();
    $count = 0;

    while($count <= 8){
        $months[] = date('M Y', strtotime("-".$count."month"));
        $count++;
    }
    $datapoints = array(
        array('y' => $charts[8], 'label' => $months[8] ),
        array('y' => $charts[7], 'label' => $months[7] ),
        array('y' => $charts[6], 'label' => $months[6] ),
        array('y' => $charts[5], 'label' => $months[5] ),
        array('y' => $charts[4], 'label' => $months[4] ),
        array('y' => $charts[3], 'label' => $months[3] ),
        array('y' => $charts[2], 'label' => $months[2] ),
        array('y' => $charts[1], 'label' => $months[1] ),
        array('y' => $charts[0], 'label' => $months[0] ),
);




?>

@extends('admin.dashboard')
@section('content')


    
<div class="col-2 shadow bg-white rounded d-flex ps-4 mt-4" style="height:100px;width:250px;">
    <p class="mt-3 fs-4 fw-bolder">Users</p>
    <p class="mt-5 fw-bolder ps-1" style="position:relative;top:6%;right:30%;">{{ \App\Models\user::count() }}</p>
    <a href="#" style="position:relative;top:30%;left:30%;" ><i class="fa-brands fa-youtube px-2 fs-1"></i></a>
</div>

<div class="col-2 shadow bg-white rounded d-flex ps-4 mx-3 mt-4" style="height:100px;width:250px;">
    <p class="mt-3 fs-4 fw-bolder">Amounts</p>
    <p class="mt-5 " style="position:relative;top:6%;right:49%;">00</p>
    <a href="#" style="position:relative;top:30%;left:20%;" ><i class="fa-brands fa-youtube px-2 fs-1"></i></a>
</div>

<div class="col-2 shadow bg-white rounded d-flex ps-4 mt-4" style="height:100px;width:250px;">
    <p class="mt-3 fs-4 fw-bolder">Orders</p>
    <p class="mt-5 " style="position:relative;top:6%;right:35%;">{{ \App\Models\CustomerOrder::count() }}</p>
    <a href="#" style="position:relative;top:30%;left:22%;" ><i class="fa-brands fa-youtube px-2 fs-1"></i></a>
</div>

<div class="col-2 shadow bg-white rounded d-flex ps-4 ms-3 mt-4" style="height:100px;width:250px;">
    <p class="mt-3 fs-4 fw-bolder">Totals</p>
    <p class="mt-5 " style="position:relative;top:6%;right:31%;">00</p>
    <a href="#" style="position:relative;top:30%;left:22%;" ><i class="fa-brands fa-youtube px-2 fs-1"></i></a>
</div>



<hr class="mt-3">


<h2>Chart</h2>
{{-- <p>{{ $charts}}</p> --}}
<div id="chartContainer" style="height: 370px; width: 90%;" class=""></div>


  <script>


    window.onload = function() {
     
     var chart = new CanvasJS.Chart("chartContainer", {
         animationEnabled: true,
         theme: "light2",
         title:{
             text: "Order Summary"
         },
         axisY: {
             title: "Number of Orders"
         },
         data: [{
             type: "area",
             yValueFormatString: "#,##0.## order",
             dataPoints: <?php echo json_encode($datapoints, JSON_NUMERIC_CHECK); ?>
         }]
     });
     chart.render();
      
     }


     </script>
               









    
     <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
    

@endsection