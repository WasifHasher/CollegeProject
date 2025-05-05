@extends('admin.dashboard')
@section('content')

<div class="container">
       
    <div class="row mt-3">

        <div class="col-12" >
            <table class="table" >
                <tr>
                    <th id="th">Id</th>
                    <th id="th">Name</th>
                    <th id="th">Email</th>
                    <th id="th">City</th>
                    <th id="th">Phone</th>
                    <th id="th">Status</th>
                    <th id="th" style="width: 150px;">Address</th>
                    <th id="th" style="width: 150px;">Product Name</th>
                    <th id="th">Price</th>
                    <th id="th">Qty</th>
                     <th id="th">Pro_id</th>
                    <th id="th">user_id</th> 
                    <th id="th">Total</th>
                    {{-- <th id="th" style="width: 130px;">created_at</th> --}}
                    {{-- <th id="th">updated_at</th> --}}
                    <th id="th">Delete</th>

                </tr>
                
                <tbody>

                
                    @foreach ($receivedorders as $recieved)
 
                    <tr>
                        <td id="td">{{$recieved->id}}</td>
                        <td id="td">{{$recieved->name}}</td>
                        <td id="td">{{$recieved->email}}</td>
                        <td id="td">{{$recieved->city}}</td>
                        <td id="td">{{$recieved->phone}}</td>
                        <td id="td">{{$recieved->status}}</td>
                        <td id="td" >{{$recieved->address}}</td>
                        <td id="td">{{$recieved->product_name}}</td>
                        <td id="td">{{$recieved->price}}</td>
                        <td id="td">{{$recieved->qty}}</td>
                        <td id="td">{{$recieved->product_id}}</td>
                        <td id="td">{{$recieved->user_id}}</td>
                        <td id="td">{{$recieved->price*$recieved->qty}}</td>
                        {{-- <td id="td">{{ $recieved->created_at->timezone('Asia/Karachi')->format('d-m-Y h:i:s A') }}</td> --}}
                        {{-- <td>{{ $recieved->updated_at->timezone('Asia/Karachi')->format('d-m-Y h:i:s A') }}</td> --}}
                        
                        

                        <td id="td">
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