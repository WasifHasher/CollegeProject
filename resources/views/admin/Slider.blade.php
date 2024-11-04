@extends('admin.dashboard')
@section('content')

@if(session('status'))
<div class="alert alert-success mt-4">{{session('status')}}</div>
@endif

<div class="d-flex mt-4">
    <h3>Slider Pages</h3>

    <a href="ShowSliderPage" class="p-2 text-white fw-bold rounded text-decoration-none px-3" style="background: darkblue;width:120px;margin-left:69%;">Add Slider</a>
   
</div>



           <div class="container mt-3">
            <div class="row">
                <div class="col-11">

                    <table class="table shadow">

                        <tr>
                          <th id="th">ID</th>
                          <th id="th">Title</th>
                          <th id="th">Description</th>
                          <th id="th">Image</th>
                          <th id="th">UserType</th>
                          <th id="th">Edit</th>
                          <th id="th">Delete</th>
                                    
                        </tr>
            
                        <tbody>
                            
                            @foreach ($shows as $show)

                            <tr>
                                <td>{{ $show->id}}</td>
                                <td>{{ $show->title}}</td>
                                <td>{{ $show->description}}</td>
                                <td>
                                    <img src="Products/{{($show->image)}}" height="50px" width="80px">
                                </td>
                                <td>{{ $show->user->usertype}}</td>
                                <td>
                                    <a href="{{ url ('editSlider/'.$show->id.'/edit')}}" class="text-decoration-none btn btn-success w-100">Edit</a>
                                </td>
                                <td>
                                    <a href="{{ url ('deleteSlider/'.$show->id.'/delete')}}" class="text-decoration-none btn btn-danger w-100">Delete</a>
                                </td>
                            </tr>
                                
                            @endforeach
                        </tbody>
                      </table>

                     
                </div>
                <h3 style="margin-left:80%;">Total : {{$shows->count();}}</h3>
            </div>
          </div>
       
    
@endsection