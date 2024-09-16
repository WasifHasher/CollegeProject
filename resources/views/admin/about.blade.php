@extends('admin.dashboard')
@section('content')

@if(session('status'))
<div class="alert alert-success mt-4">{{session('status')}}</div>
@endif

<div class="d-flex mt-4">
    <h3>About Pages</h3>

    <h3 style="margin-left:815px;">Total : {{$abouts->count()}}</h3>
</div>

<div class="mt-3">
    <a href="/ShowAboutPage" class="p-2 text-white fw-bold rounded text-decoration-none px-3" style="background: darkblue;width:120px">Add About</a>
</div>
 

           <div class="container mt-5">
            <div class="row">
                <div class="col-11">

                    <table class="table shadow">

                        <tr>
                          <th id="th">ID</th>
                          <th id="th">Name</th>
                          <th id="th">Price</th>
                          <th id="th">Image</th>
                          <th id="th">UserType</th>
                          <th id="th">Edit</th>
                          <th id="th">Delete</th>
                                    
                        </tr>
            
                        <tbody>
                            
                            @foreach ($abouts as $about)

                            <tr>
                                <td>{{ $about->id}}</td>
                                <td>{{ $about->aboutTitle}}</td>
                                <td class="w-50">{{ $about->aboutDesc}}</td>
                                <td>
                                    <img src="Products/{{($about->image)}}" class="rounded" height="50px" width="80px">
                                </td>
                                <td>{{ $about->user->name}}</td>
                                <td>
                                    <a href="{{ url ('editAbout/'.$about->id.'/edit')}}" class="text-decoration-none btn btn-success ">Edit</a>
                                </td>
                                <td>
                                    <a href="{{ url ('deleteAbout/'.$about->id.'/delete')}}" class="text-decoration-none btn btn-danger">Delete</a>
                                </td>
                            </tr>
                                
                            @endforeach
                          

                        </tbody>
                      </table>



                </div>
            </div>
          </div>
       
    
@endsection