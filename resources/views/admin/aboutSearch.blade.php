@extends('admin.dashboard')
@section('content')


<div class="container mt-5">
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
                    
                    @foreach ($aboutSearchs as $about)

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