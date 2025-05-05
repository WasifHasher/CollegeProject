@extends('frontPage')
@section('mainContent')


<div class="container mt-5">
    <div class="row justify-content-center ">
      <h3 class="text-center text-uppercase">Search Items</h3>
   
     
      @foreach ($search as $product)
      
      <div class="col-8 col-sm-5 col-md-3 col-lg-3 col-xl-3  mt-xl-5 ms-3 mt-3 py-4 shadow text-center bg-white relative" id="Product_cart" >
        
        
      
      
        <div class="w-100 ">
          <h4 class="pt-2 ps-3 float-start">{{$product->name}}</h4>
          {{-- <p class="pt-3 pe-2 float-end">Rs: {{$product->price}}</p> --}}
        </div>
        <div style="margin-top: 25%;">

          <img src="Products/{{($product->image)}}" id="ProjectImage">
          <br>
        </div>
        <p class=" pe-2 float-end">Rs: {{$product->price}}</p>
         
        <br>
        <div class="mt-3">
          <p id="desc" class="px-2">{{$product->desc}}</p>
        </div>
        <a href="{{ url('detail/'.$product->id)}}" class="text-decoration-none btn btn-danger mb-3">Order Now</a>
        {{-- <div class="row">
          <div class="rating">
                 @for ($i = 1; $i <= $ratingvalue; $i++)
                     <span class="fa fa-star text-warning"></span>
                 @endfor

                 @for ($j = $ratingvalue+1; $j <= 5; $j++)
                 <span class="fa fa-star "></span> 
                 @endfor
  
                 <span>({{number_format($ratingvalue,2)}})</span>
          </div>
      </div> --}}

       
          


       
      </div>



      @endforeach
     

    </div>
  </div>




@endsection