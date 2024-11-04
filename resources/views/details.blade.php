@extends('frontPage')
@section('mainContent')


    <div class="container mt-5" style="height:500px;">
        <div class="row ">
            @if(session('status'))
             <div class="alert alert-success mt-4">{{session('status')}} </div>
            @endif

            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6  h-50">
                <img src="{{ asset('Products/'.$details->image) }}" alt="" class="w-100  rounded" >
            </div>


            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-3 mt-sm-3 mt-md-3  mb-5" style="height: 500px;">

                <h1>{{$details->name}}</h1>

                  <div class="row">
                     <div class="rating">
                            @for ($i = 1; $i <= $ratingvalue; $i++)
                                <span class="fa fa-star text-warning"></span>
                            @endfor

                            @for ($j = $ratingvalue+0; $j < 5; $j++)
                            <span class="fa fa-star "></span> 
                            @endfor
             
                            <span>({{number_format($ratingvalue,2)}})</span>
                     </div>
                 </div>

                <p  class="fs-6 review  text-danger" id="review" onclick="modal()" >Review</p>
                   
                      
                <div class="row" style="margin-top:-15px;">
                    <h3 class="d-block">Rs : {{$details->price}}</h3>
                </div>    
                    
                

                <form action="/addToCart" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="product_id" value="{{$details->id}}">
                <input type="hidden" name="name" value="{{$details->name}}">
                <input type="hidden" name="price" value="{{$details->price}}">
                <input type="hidden" name="image" value="{{$details->image}}">
                <div><input type="number" name='qty' placeholder="0"  class="control-form w-25 py-1 mb-2 rounded"></div>          
                <button class="btn btn-primary mt-2 w-100">Add to Cart</button>
                </form> 

               <p class="mt-4">{{$details->desc}}</p>
            </div>
        </div>
    </div>





    <div class="modal" id="modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Rate the Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="closeModal()"></button>
                </div>
                <form action="/saveRating" method="POST">
                    @csrf
                    <input type="hidden"  name="pid" value="{{ $details->id }}">

                    <div class="modal-body d-flex">
                        <!-- Hidden Product ID Input -->
                        <!-- Rating Section -->
                        <div class="rate">
                            <input type="radio" id="star5" name="rate" value="5" />
                            <label for="star5" title="text">5 stars</label>
                            <input type="radio" id="star4" name="rate" value="4" />
                            <label for="star4" title="text">4 stars</label>
                            <input type="radio" id="star3" name="rate" value="3" />
                            <label for="star3" title="text">3 stars</label>
                            <input type="radio" id="star2" name="rate" value="2" />
                            <label for="star2" title="text">2 stars</label>
                            <input type="radio" id="star1" name="rate" value="1" />
                            <label for="star1" title="text">1 star</label>
                          </div>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" onclick="closeModal()">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
          


@endsection