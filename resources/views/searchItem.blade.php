@extends('frontPage')
@section('mainContent')


<div class="container mt-5">
    <div class="row justify-content-center ">
      <h3 class="text-center text-uppercase">Search Items</h3>

      
      
      @foreach ($search as $product)
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