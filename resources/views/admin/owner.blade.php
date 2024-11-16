@extends('admin.dashboard')
@section('content')


@if(session('status'))
<div class="alert alert-success mt-4">{{session('status')}}</div>
@endif



<div class="d-flex mt-4">
    <h3>Owner Information</h3>
        <a href="/show_owner_page" class="p-2 text-white fw-bold  rounded text-decoration-none px-3" style="background: darkblue;width:120px;margin-left:69%;">Add Info</a>
</div>



           <div class="container mt-3">
            <div class="row">
                <div class="col-11">

                    <table class="table shadow">

                        <tr>
                          <th id="th">ID</th>
                          <th id="th">Heading</th>
                          <th id="th">Information</th>
                          <th id="th">Image</th>
                          <th id="th">Edit</th>
                          <th id="th">Delete</th>
                          
                                    
                        </tr>
            
                        <tbody>

                           
                            
                            @foreach ($ownerdata as $owner)

                            <tr>
                                <td>{{ $owner->id}}</td>
                                <td>{{ $owner->heading}}</td>
                                <td class="w-50">{{ $owner->info}}</td>
                               
                                <td>
                                    <img src="Products/{{($owner->image)}}" height="50px" width="80px">
                                </td>
                               
                                <td>
                                    <a href="{{ url ('owner/'.$owner->id.'/edit')}}" class="text-decoration-none btn btn-success w-100">Edit</a>
                                </td>
                                <td>
                                    <a href="{{ url ('owner/'.$owner->id.'/delete')}}" class="text-decoration-none btn btn-danger w-100">Delete</a>
                                </td>
                            </tr>
                                
                            @endforeach
                          

                        </tbody>
                      </table>
                          {{-- {{ $orders->links() }} --}}
                </div>
                {{-- <h3 style="margin-left:80%;">Total : {{$orders->count()}}</h3> --}}
            </div>
          </div>
       
    




@endsection