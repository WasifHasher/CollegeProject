@extends('frontPage')
@section('mainContent')

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">

    @foreach ($gets as $item)
        
    
    <div class="carousel-item active">
      <img src="Products/{{($item->image)}}" class="d-block w-100 " alt="Slide 1" style="height:400px;">
      <div class="carousel-caption d-none d-md-block" style="margin-bottom:10%;">
        <h5 class="text-white fs-1 fw-bolder">{{$item->title}}</h5>
        <p class="pt-3" id="description">{{$item->description}}</p>
      </div>
    </div>
    
    @endforeach
    
    
  </div>
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




{{-- This area for the card section --}}


  <div class="container mt-5">
    <div class="row justify-content-center">
      <h3 class="text-center" id="orderItems">Order Items</h3>

      
      
      @foreach ($orders as $order)
      <div class="col-8 col-sm-5 col-md-3 col-lg-3 col-xl-2 mt-xl-5 text-center shadow bg-white border border-primary rounded mx-3 my-4 py-3 " style="height: 280px;">
        
        
          <img src="Products/{{($order->image)}}" style="height:90px;width:90px;border-radius:50px;">
          <h4 class="pt-2">{{$order->name}}</h4>
          <p>Rs: {{$order->price}}</p>
        
          {{-- <a href="Checkout/{{$order->id}}" class="w-100 btn btn-primary">Add to Card</a> --}}


        <form action="/addToCart" method="POST" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="product_id" value="{{$order->id}}">
          <input type="hidden" name="name" value="{{$order->name}}">
          <input type="hidden" name="price" value="{{$order->price}}">
          <input type="hidden" name="image" value="{{$order->image}}">
          <div><input type="number" name='qty' placeholder="0" class="w-50 mb-2 "></div>
          
          <button class="btn btn-primary w-100">Add to Cart</button>
        </form>


         
      </div>
      @endforeach


      <form action="" post="POST" enctype="multipart/form-data">
        
        <input type="hidden" name='id' value="">
        
      </form>


    </div>
  </div>


  <div class="container mt-5">
    <div class="row">
      <div class="col-12 col-md-6 col-lg-6 col-xl-6">
        <h2>Heading about Chicken</h2>
        <p class="mt-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur magni exercitationem voluptatibus, repellat numquam animi laboriosam corrupti possimus minima blanditiis odio ipsam consequatur ea saepe dolores cumque ab libero facilis in. Reiciendis laudantium architecto praesentium saepe molestias sapiente dolorum, corrupti inventore accusantium placeat, nostrum laboriosam id vel ex earum illo..</p>
      </div>
      <div class="col-12 col-md-6 col-lg-6 col-xl-6">
        <img src="Products/1725124698.jpg" width="100%" height="350px;">
      </div>
    </div>
  </div>


@endsection












