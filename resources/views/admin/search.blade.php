@extends('admin.dashboard')
@section('content')


    

<div class="container mt-5">
    <div class="row">
        <div class="col-11">

            <table class="table shadow">

                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Price</th>
                  <th>Image</th>
                  <th>Edit</th>
                  <th>Delete</th>
                            
                </tr>
    
                <tbody>
                    
                    @foreach ($products as $order)

                    <tr>
                        <td>{{ $order->id}}</td>
                        <td>{{ $order->name}}</td>
                        <td>{{ $order->price}}</td>
                        <td>
                            <img src="Products/{{($order->image)}}" height="50px" width="80px">
                        </td>
                        <td>
                            <a href="{{ url ('editOrder/'.$order->id.'/edit')}}" class="text-decoration-none btn btn-success w-50">Edit</a>
                        </td>
                        <td>
                            <a href="{{ url ('deleteOrder/'.$order->id.'/delete')}}" class="text-decoration-none btn btn-danger w-50">Delete</a>
                        </td>
                    </tr>
                        
                    @endforeach
                  

                </tbody>
              </table>



        </div>
    </div>
  </div>

  
   
   



@endsection