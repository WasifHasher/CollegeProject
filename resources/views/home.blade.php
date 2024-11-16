@extends('frontPage')
@section('mainContent')





<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner" >

    

    @foreach ($gets as $item)
        
    
    <div class="carousel-item active" >
      <img src="Products/{{($item->image)}}" class="d-block w-100 z-n1" id="grayimg"  alt="Slide 1"  style="height:400px;">
    
      <div class="carousel-caption mb-5  " >
       
      <h5 class="fs-1 fw-bolder" id="title">  <i class="fa-solid fa-layer-group pe-3 text-white" style="font-size: 7rem;"> </i>{{$item->title}}</h5>
        <p class="fs-5  pb-5 mb-5" id="description">{{$item->description}}</p>
    
      </div>
    </div>
   
    {{-- <i class="fa-solid fa-burger"></i> --}}
    @endforeach 
    
   
  </div>
    
   

      <form action="/searchitem" method="POST" id="searchinput" class="mt-3">
        @csrf
       

          <div class="form-group d-flex w-100">
            <input type="text" name="query" class="form-Control w-100 ps-2 border border-none" id="input" placeholder="Searching...">
            <button class="text-white" id="btnSearch"><i class="fa-solid fa-magnifying-glass px-2 fs-5"></i></button>
          </div>
      
        </form>
      
    
    
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

@if(session('status'))
<div class="alert alert-success mt-4">{{session('status')}}</div>
@endif



  <div class="container-fluid ">
    <div class="row justify-content-center " style="height: 100%;margin:5%;">
      <h3 class="text-center text-uppercase">Product Items</h3>

      @foreach ($products as $product)
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



 


  <div class="container mt-5">
    <div class="row">

      @foreach ($owner as $item)
          
    
      <div class="col-12 col-md-6 col-lg-6 col-xl-6">
        <h2 class="text-uppercase" id="headingTwo">{{$item->heading}}</h2>
        <p class="mt-3  fs-4 aboutText" >{{$item->info}}</p>
      </div>
      <div class="col-12 col-md-6 col-lg-6 col-xl-6">
        <img src="Products/{{($item->image)}}" class="rounded" id="ProfileImage" width="100%" height="350px;">
      </div>
      @endforeach
    </div>
  </div>

  <div class="container mt-5">

    <div class="row" style="height: 500px;">
      
      <img src="Products/4.png" alt="" class="h-100 rounded">
      
    </div>
  </div>
  

  


@endsection




{{-- composer require stripe/stripe-php
 --}}






