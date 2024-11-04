@extends('admin.dashboard')
@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-11">

            <table class="table shadow">

                <tr>
                  <th id="th">ID</th>
                  <th id="th">Name</th>
                  <th id="th">Email</th>
                  <th id="th">Messages</th>
                  <th id="th">UserId</th>
                  <th id="th">Created_at</th>
                  <th id="th">Updated_at</th>
                  <th id="th">Delete</th>
                 
                            
                </tr>
    
                <tbody>
                    
                    @foreach ($comments as $comment)

                    <tr>
                        <td>{{ $comment->id}}</td>
                        <td>{{ $comment->name}}</td>
                        <td>{{ $comment->email}}</td>
                        <td class="w-50">{{ $comment->address}}</td>
                        
                        <td>{{ $comment->user->id}}</td>
                        <td>{{ $comment->created_at}}</td>
                        <td>{{ $comment->updated_at}}</td>

                        <td>
                            <a href="{{ url ('deletecomment/'.$comment->id.'/delete')}}" class="text-decoration-none btn btn-danger">Delete</a>
                        </td> 
                    </tr>
                        
                    @endforeach
                  

                </tbody>
              </table>



        </div>
    </div>
  </div>





@endsection