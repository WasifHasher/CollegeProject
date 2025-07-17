
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


    
<div class="col-10 col-md-5 col-lg-3 shadow border border-success rounded d-flex mt-4 ms-4 pb-3" >
    <p class="mt-3 fs-4 fw-bolder ms-1 ps-1" style="color: greenyellow;">Users</p>
    <p class="mt-5 fw-bolder ps-1 text-white position-absolute left-25" >{{ \App\Models\user::count() }}</p>
    <a href="#" class="text-decoration-none" style="position:relative;top:30%;left:52%;color:greenyellow;" ><i class="fa-duotone fa-solid fa-user px-2 fs-1 d-none d-lg-block"></i></a>
</div>

{{-- <div class="col-10 col-md-5 col-lg-2 shadow border border-success rounded d-flex ms-4 mt-4 pb-3" >
    <p class="mt-3 fs-4 fw-bolder ms-1" style="color: greenyellow;">Amounts</p>
    <p class="mt-5 text-white position-absolute left-25 pt-2" style="">00</p>
    <a href="#" class="text-decoration-none" style="position:relative;top:30%;left:15%;" ><i class="fa-brands fa-youtube px-2 fs-1 d-none d-lg-block"></i></a>
</div> --}}

<div class="col-10 col-md-5 col-lg-3 shadow border border-success rounded d-flex  mt-3 ms-4 pb-3" >
    <p class="mt-3 fs-4 fw-bolder " style="color: greenyellow;">Orders</p>
    <p class="mt-5 text-white position-absolute left-25 pt-2">{{ \App\Models\CustomerOrder::count() }}</p>
    <a href="#" class="text-decoration-none" style="position:relative;top:30%;left:53%;color:greenyellow;" ><i class="fa-solid fa-cart-shopping px-2 fs-1 d-none d-lg-block"></i></a>
</div>
@php
    use App\Models\CustomerOrder;
    $orders = CustomerOrder::all();
    $total = $orders->sum(function ($order) {
        return $order->price * $order->qty;
    });
@endphp

<div class="col-10 col-md-5 col-lg-3 shadow border border-success rounded d-flex mt-3 ms-4 pb-3">
    <p class="mt-3 fs-4 fw-bolder" style="color: greenyellow;">Amounts</p>

    <p class="mt-5 text-white position-absolute left-25 pt-2">
        {{ $total > 0 ? $total : 0 }}
    </p>

    <a href="#" class="text-decoration-none" style="position:relative; top:30%; left:52%;">
        <i class="fa-solid fa-money-bill px-2 fs-1 d-none d-lg-block"></i>
    </a>
</div>




<hr class="mt-3">


<h2 style="color: greenyellow;" class="ms-3">Chart</h2>
{{-- <p>{{ $charts}}</p> --}}
<div id="chartContainer" style="height: 370px;width:100%;" class="border border-danger w-100 w-sm-100 w-md-100 w-lg-100 w-xl-100"></div>


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