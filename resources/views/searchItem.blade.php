@extends('frontPage')
@section('mainContent')


<div class="container mt-5">
    <div class="row">
      <h3 class="text-left text-uppercase">Order Items</h3>

      
      
      @foreach ($search as $order)
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



    </div>
  </div>




@endsection