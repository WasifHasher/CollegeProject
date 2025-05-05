@extends('frontPage')
@section('mainContent')
@php
    use App\Models\category;
    $category = category::get();
@endphp
  <div class="container mt-3">
    <div class="row justify-content-center">
      <div class="col-11 col-md-10 col-lg-8 col-xl-7">
        <form action="/searchitem" method="POST"  class="border-none mt-3 ">
          @csrf
          <div class="form-group d-flex">
            <input type="text" name="query" class="form-Control w-100 ps-2 border border-none shadow" id="input" placeholder="Searching...">
            <button class="text-white shadow" id="orderbtnSearch"><i class="fa-solid fa-magnifying-glass px-2 fs-5"></i></button>
          </div>

          @php
          $activeCategory = '';
      @endphp

      <div class="mt-4" style="margin-left: 10%;">
        @foreach ($category as $item)
            <a href="{{ url('category/' . $item->id) }}" 
               class="text-black fs-5 border border-gray p-2 m-1 text-decoration-none {{ $activeCategory == $item->id ? 'active' : '' }}">
                {{ $item->category_names }}
            </a>
        @endforeach
     </div>
        </form>
      </div>
    </div>
  </div>

<div class="container mt-5">
    <div class="row justify-content-center">

      <h3 class="text-left ps-5 text-uppercase ">Order Items</h3>

      
      
      
      @foreach ($orderPage as $product)
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