@extends('frontPage')
@section('mainContent')

  <div class="container mt-3">
    <div class="row justify-content-center">
      <div class="col-11 col-md-10 col-lg-8 col-xl-7">
        <form action="/searchitem" method="POST"  class="border-none mt-3 ">
          @csrf
          <div class="form-group d-flex">
            <input type="text" name="query" class="form-Control w-100 ps-2 border border-none shadow" id="input" placeholder="Searching...">
            <button class="text-white shadow" id="orderbtnSearch"><i class="fa-solid fa-magnifying-glass px-2 fs-5"></i></button>
          </div>
        </form>
      </div>
    </div>
  </div>

<div class="container mt-5">
    <div class="row justify-content-center">

      <h3 class="text-left ps-5 text-uppercase ">Order Items</h3>

      
      
      
      @foreach ($orderPage as $product)
      <div class="col-8 col-sm-5 col-md-3 col-lg-3 col-xl-3 mt-xl-5 text-center shadow bg-white rounded mx-3 my-4 py-3 relative" style="max-height: 300px;">
        
      
      
        <a href="{{ url('detail/'.$product->id)}}" class="text-decoration-none">
          <img src="Products/{{($product->image)}}" class=""  style="height:200px;width:100%;">
         <div class="w-100">
          <h4 class="pt-2 float-start">{{$product->name}}</h4>
          <p class="pt-2 float-end" style="margin-left:0%;">Rs: {{$product->price}}</p>
        </div>
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

        </a>
          


       
      </div>



      @endforeach
     



    </div>
  </div>




@endsection