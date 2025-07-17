@extends('admin.dashboard')
@section('content')

@php
     use App\Models\user;

     $users = user::get();
  
    // $totolprice = 0;
@endphp

<div class="container mt-3">
    @if(session('status'))
<div class="alert alert-success mt-4">{{session('status')}}</div>
@endif
    {{-- <h3>Recieved Orders</h3> --}}
    <div class="row py-2">

        <div class="col-4">

            <h3 class="text-white">{{$today}}</h3>
        </div>
        <div class="col-4">
            
            {{-- <form action="" method="POST">
    @csrf
    <table class="table">
        @foreach ($users as $user)
        <tr>
            <td>
                <input type="checkbox" name="user_ids[]" value="{{ $user->id }}">
            </td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
        </tr>
        @endforeach
    </table>

    <div class="col-4">
        <input type="text" name="message" placeholder="Enter email message" class="p-3 rounded w-75">
        <button type="submit" class="btn btn-primary p-3 rounded">Send</button>
    </div>
</form> --}}

        {{-- <form action="">
        <input type="text" placeholder="Enter email messages" class="p-3 rounded w-75">
        <button class="btn btn-primary p-3 rounded">Send</button>
        </form> --}}
        </div>
        <div class="col-4 ">

            <button class="btn btn-warning text-white">COPY</button>
            <button class="btn btn-warning text-white" id="exportExcel">EXCEL</button>
            <button class="btn btn-warning text-white" id="exportCSV">CSV</button>
            <button class="btn btn-warning text-white" id="exportPDF">PDF</button>
            <button class="btn btn-warning text-white"  id="printTable">PRINT</button>
        </div>

    </div>
    
    <div class="row mt-3">

        <div class="col-12" id="tableData" >
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
                    <th id="th" style="width: 130px;">created_at</th>
                    {{-- <th id="th">updated_at</th> --}}
                    <th id="th">Delete</th>

                </tr>
                
                <tbody>

                    
                    @foreach ($received_orders as $recieved)
 
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
                        <td id="td">{{ $recieved->created_at->timezone('Asia/Karachi')->format('d-m-Y h:i:s A') }}</td>
                        {{-- <td>{{ $recieved->updated_at->timezone('Asia/Karachi')->format('d-m-Y h:i:s A') }}</td> --}}
                        
                       
                        

                        <td id="td">
                            <a href="{{ url('deleteRecOrd/'.$recieved->id.'/delete')}}" class="btn btn-danger text-white text-decoration-none"><i class="fa-solid fa-trash"></i></a>
                        </td>


                    </tr>
                    @endforeach
                   
                </tbody>
            </table>
        </div>
        @if($received_orders->isEmpty())
            <h2 class="text-white">There is no Order Record.</h2>
            @else
            @endif
        <div class="clearfix text-white mx-2 py-2" style="background:#22222a;">

            <h2 class="float-start">Total : {{$total}}</h2>
            <h3 class="float-end " style="margin-right: 2%;">Total Price : {{$price}}</h3>
            
        </div>
    </div>
</div>
    
@endsection