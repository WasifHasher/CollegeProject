@extends('frontPage')
@section('mainContent')


    <div class="container mt-5" style="height:500px;">
        <div class="row" >
            <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                <h3 class="text-danger">Checkout</h3>
                <form action="/checkout" method="POST">
                    
                   @csrf
                   <input type="hidden" name="_token" value="<?php echo csrf_token();?>" >
                   <input type="hidden" name="id" value="1" >
                    
                    <div class="form-group ">
                        <input type="text" name="fullname"  class="Form-Control py-2 rounded me-2 ps-2" placeholder="FullName" style="width: 310px;">
                        <input type="text" name="email"  class="Form-Control py-2 rounded ps-2 mt-3 " placeholder="Email" style="width: 310px;">
                    </div>

                    <div class="form-group mt-3 w-100">
                        <input type="text" name="city"  class="Form-Control py-2 rounded me-2 ps-2  mt-2 " placeholder="City" style="width: 310px;">
                        <input type="number" name="phone"  class="Form-Control py-2 rounded ps-2 mt-3 " placeholder="phone" style="width: 310px;">
                    </div>

                    <div class="form-group mt-3 ">
                        <input type="text" name="status"  class="Form-Control py-2 rounded me-2 ps-2 w-100" placeholder="Status">
                    </div>

                    <div class="form-group mt-3 w-100">
                        <input type="text" name="address" class="Form-Control rounded ps-2  mt-3 w-100" placeholder="address" style="width:600px;height:150px;padding-bottom:110px;">
                       
                    </div>

                    <div class="btn btn-danger mt-3">
                       
                       <button>
                           <h3>Purchase : {{Session::get('total')}}</h3>
                        </button> 
                    </div>
                </form>
            </div>




            <div class="col-12 col-md-6 col-lg-6 col-xl-6 mt-5" style="max-height:400px;">
                <h3>Carts Displaying</h3>
                  <table class="table bordered">
                    <tr>
                        <thead>
                            <th>id</th>
                            <th>name</th>
                            <th>name</th>
                            <th>price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Remove</th>
                        </thead>
                    </tr>

                    <tbody>
                       
                        @php
                        $total =0;
                        @endphp
                        @foreach ($products as $product)
                        
                        <tr>
                            <td>{{$product->id}}</</td>
                            <td><img src="{{asset('Products/'.$product->image)}}" class="rounded" style="width:80px;height:50px;"></td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->Quantity}}</td>
                            <td>{{($product['price'] * $product['Quantity'])}}

                                @php
                                 $total += $product['price'] * $product['Quantity'];
                                 Session::put('total', $total);
                                @endphp
                            </td>
                            <td class="btn btn-danger">Remove</td>
                       
                        </tr>
                        @endforeach    
                
                    </tbody>
                </table>
                <div class="btn btn-danger float-end">
                   <h3>Purchase : {{Session::get('total')}}</h3>
                </div>
                
                
            </div>

        </div>
    </div>





@endsection