@extends('admin.dashboard')
@section('content')

<div class="container mt-3">
    @if(session('status'))
<div class="alert alert-success mt-4">{{session('status')}}</div>
@endif
    <h3>Recieved Orders</h3>
    <div class="row mt-3">

        <div class="col-12">
            <table class="table ">
                <tr>
                    <th id="th">Id</th>
                    <th id="th">Name</th>
                    <th id="th">Email</th>
                    <th id="th">City</th>
                    <th id="th">Phone</th>
                    <th id="th">Status</th>
                    <th id="th">Address</th>
                    <th id="th">Product Name</th>
                    <th id="th">Price</th>
                    <th id="th">Qty</th>
                    <th id="th">Pro_id</th>
                    <th id="th">user_id</th>
                    <th id="th">Total</th>
                    <th id="th">created_at</th>
                    <th id="th">updated_at</th>
                    <th id="th">Delete</th>

                </tr>
                <tbody>
                    @foreach ($recieved_order as $recieved)
                        
                    <tr>
                        <td>{{$recieved->id}}</td>
                        <td>{{$recieved->name}}</td>
                        <td>{{$recieved->email}}</td>
                        <td>{{$recieved->city}}</td>
                        <td>{{$recieved->phone}}</td>
                        <td>{{$recieved->status}}</td>
                        <td>{{$recieved->address}}</td>
                        <td>{{$recieved->product_name}}</td>
                        <td>{{$recieved->price}}</td>
                        <td>{{$recieved->qty}}</td>
                        <td>{{$recieved->product_id}}</td>
                        <td>{{$recieved->user_id}}</td>
                        <td>Total</td>
                        <td>{{$recieved->created_at}}</td>
                        <td>{{$recieved->updated_at}}</td>
                        <td>
                            <a href="{{ url('deleteRecOrd/'.$recieved->id.'/delete')}}" class="btn btn-danger text-white text-decoration-none"><i class="fa-solid fa-trash"></i></a>
                        </td>


                    </tr>

                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
    
@endsection