@extends('admin.dashboard')
@section('content')



    <div class="container mt-5">
        <div class="row">
            <div class="col-12">


                <table class="table shadow">
                    <tr>
                        <th id="th">id</th>
                        <th id="th">User_id</th>
                        <th id="th">Messages</th>
                        <th id="th">Edit</th>
                        <th id="th">Delete</th>
                        <th id="th">Send</th>
                    </tr>

                    <tbody>
                        
                        @foreach ($Show_messages as $showMessage)
                            
                        <tr>
                            <td>{{$showMessage->id}}</td>
                            <td>{{$showMessage->user_id}}</td>
                            <td>{{$showMessage->messages}}</td>
                            <td><a href="" class="btn btn-success">Edit</a></td>
                            <td><a href="" class="btn btn-danger">Delete</a></td>
                            <td><a href="{{ url('/Send_message_to_user',$showMessage->id)}}" class="btn btn-primary">Send</a></td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>




@endsection