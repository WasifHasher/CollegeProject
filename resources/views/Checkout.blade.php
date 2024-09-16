@extends('frontPage')
@section('mainContent')


    <div class="container mt-5" style="height:500px;">
        <div class="row">
            <div class="col-6">
                <h3 class="text-danger">Checkout</h3>
                <form action="/checkout" method="POST">

                   
                   @csrf
                   <input type="hidden" name="_token" value="<?php echo csrf_token();?>" >
                   <input type="hidden" name="id" value="1" >
                    
                    <div class="form-group">


                        <input type="text" name="fullname" value="wasif" class="Form-Control py-2 rounded me-2 ps-2" placeholder="FullName" style="width:300px;">
                        <input type="text" name="email" value="wasifhasher@gmail.com" class="Form-Control py-2 rounded ps-2" placeholder="Email"  style="width:300px;">
                    </div>

                    <div class="form-group mt-3">
                        <input type="text" name="city" value="landikotal" class="Form-Control py-2 rounded me-2 ps-2" placeholder="City" style="width:300px;">
                        <input type="text" name="country" value="pakistan" class="Form-Control py-2 rounded ps-2" placeholder="Country" style="width:300px;">
                    </div>

                    <div class="form-group mt-3">
                        <input type="text" name="status" value="fata" class="Form-Control py-2 rounded me-2 ps-2" placeholder="Status" style="width:300px;">
                        <input type="text" name="zip" value="25000" class="Form-Control py-2 rounded ps-2" placeholder="zip" style="width:300px;">
                    </div>

                    <div class="form-group mt-3">
                        <input type="text" name="address" value="khuga khel" class="Form-Control rounded ps-2" placeholder="address" style="width:610px;height:150px;padding-bottom:110px;">
                       
                    </div>

                    <button class="btn btn-primary w-25 mt-2">PKR</button>



                </form>
            </div>
            <div class="col-6">
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
                                 $total += $product['price'] * $product['Quantity'] ;
                                @endphp

                            </td>
                            <td>{{$product->user_id}}</td>
                       
                            
                                               
                    


                        </tr>
                        @endforeach    
                
                    </tbody>
                </table>
           
                   
                <div class="">

                    {{$total}}
                   
                </div>
                
                
            </div>
        </div>
    </div>





@endsection