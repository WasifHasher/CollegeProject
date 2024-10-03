@extends('frontPage')
@section('mainContent')


    <div class="container mt-5" style="height:500px;">
        <div class="row">
    

            <div class="col-12 col-md-11 col-lg-8 col-xl-8">
                <h3>Cart Items</h3>
                @if(Auth::check('name'))
                    
                
                  <table class="table bordered" >
                    <tr>
                        <thead>
                            <th>id</th>
                            <th>Image</th>
                            <th>name</th>
                            <th>price</th>
                            <th>Qty</th>
                            <th>Total</th>
                            <th>Drop</th>
                        </thead>
                    </tr>

                    <tbody>
                       
                        @php
                        $total =0;
                        @endphp
                        @foreach ($products as $product)
                        
                        <tr>
                            <td>{{$product->id}}</td>
                            <td style="width:120px;height:70px;"><img src="{{asset('Products/'.$product->image)}}" class="rounded w-100 h-100" ></td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->Quantity}}</td>
                            <td>{{($product['price'] * $product['Quantity'])}}

                                @php
                                 $total += $product['price'] * $product['Quantity'];
                                //  Session::put('total', $total);
                                
                                @endphp
                            </td>
                            <td><a href="{{ url ('deleteItem/'.$product->id.'/delete')}}" class="btn btn-danger text-decoration-none text-white"><i class="fa-solid fa-trash"></i></a></td>
                       
                        </tr>
                        @endforeach    
                
                    </tbody>
                </table>

                                    @if ($total)
                                    <a href="{{url('stripe',$total)}}" class="btn btn-danger float-center float-md-end fw-bold fs-4  text-white  text-decoration-none" id="checkout"  style="margin-right:30px;">Checkout : {{$total}}</a>
                                    @else
                                    <a href="#" class="btn btn-danger float-end text-white text-decoration-none">Checkout : {{$total}}</a>

                                    @endif
                            
                                
                                                       
                
                @else

                <h3 class="pt-3">There is no Cart item!</h3>

                @endif
            </div>

        </div>
    </div>





@endsection