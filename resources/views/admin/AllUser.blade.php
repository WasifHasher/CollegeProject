@php
    use App\Models\user;

    $users = user::get();
@endphp
@extends('admin.dashboard')
@section('content')

    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-8">

            </div>
        </div>
    </div>

    <div class="container text-white mt-5">
        <div class="row">
            <div class="col-12">

        <form action="{{route('send.bulk.email')}}" method="POST">

            @csrf
        <div class="col-8 mb-5">
                <input type="text" name="message" placeholder="Enter email message" class="p-3 rounded w-75">
                <button type="submit" class="btn btn-primary p-3 rounded">Send</button>
        </div>

            <table class="table">
                <tr>
                    <th id="th">Id</th>
                    <th id="th">Name</th>
                    <th id="th">Email</th>
                    <th id="th">Created_at</th>
                    <th id="th">Updated_at</th>
                </tr>
                @foreach ($users as $user)
                <tr>
                    <td>
                        <input type="checkbox" name="user_ids[]" value="{{ $user->id }}" >
                    </td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>{{ $user->updated_at }}</td>
                </tr>
                @endforeach
            </table>

    
</form>

                {{-- <table class="table shadow">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Created_at</th>
                        <th>Updated_at</th>
                    </tr>
                    <tbody>
                        
                        @foreach ($alluser as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->created_at}}</td>
                            <td>{{$user->updated_at}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table> --}}
            </div>
        </div>
    </div>

@endsection