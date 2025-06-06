@extends('admin.dashboard')
@section('content')


@if(session('status'))
<div class="alert alert-success mt-4">{{session('status')}}</div>
@endif



<div class="d-flex mt-4">
    <h3 class="text-white">Products Page</h3>
        <a href="/ShowOrderPage" class="p-2 text-black fw-bold  rounded text-decoration-none px-3" style="background: rgb(247, 247, 250);width:120px;margin-left:69%;">Add Order</a>
</div>



           <div class="container mt-3">
            <div class="row">
                <div class="col-11">

                    <table class="table shadow">

                        <tr>
                          <th id="th">ID</th>
                          <th id="th">Name</th>
                          <th id="th">Desc</th>
                          <th id="th">Price</th>
                          <th id="th">Image</th>
                          <th id="th">Category</th>
                          <th id="th">UserType</th>
                          <th id="th">Edit</th>
                          <th id="th">Delete</th>
                                    
                        </tr>
            
                        <tbody>
                            
                            @foreach ($orders as $order)

                            <tr>
                                <td>{{ $order->id}}</td>
                                <td>{{ $order->name}}</td>
                                <td class="w-50">{{ $order->desc}}</td>
                                <td>{{ $order->price}}</td>
                                <td>
                                    <img src="Products/{{($order->image)}}" height="50px" width="80px">
                                </td>
                                
                               
                                <td>{{ $order->user->usertype}}</td>
                                <td>{{ $order->categoryname }}</td>
                                <td>
                                    <a href="{{ url ('editOrder/'.$order->id.'/edit')}}" class="text-decoration-none btn btn-success w-100">Edit</a>
                                </td>
                                <td>
                                    <a href="{{ url ('deleteOrder/'.$order->id.'/delete')}}" class="text-decoration-none btn btn-danger w-100">Delete</a>
                                </td>
                            </tr>
                                
                            @endforeach
                          

                        </tbody>
                      </table>
                          {{ $orders->links() }}
                </div>
                {{-- <h3 style="margin-left:80%;">Total : {{$orders->count()}}</h3> --}}
            </div>
          </div>
       
    
@endsection