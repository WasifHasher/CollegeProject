
@extends('frontPage')
@section('mainContent')

<body  style="height: 600px;background-color:rgba(0,0,0,0.7);z-index:-1;">
    

<div class="container mt-5 rounded" style="height: 600px;background-color:rgba(0,0,0,0.9);">
    <div class="d-flex justify-content-center">
        <h1 class="text-white p-3 ms-4 text-center d-inline">Update Your Profile</h1>
    <a href="{{url('/')}}" class="fs-5 text-white" style="position: absolute;top:20%;right:10%;"><i class="fa-solid fa-xmark"></i></a>
    </div>
   
    <div class="row justify-content-center">
        
        <div class="col-8 mt-4 ms-4">
            <form action="{{ url('SaveProfileData/'.$user->id) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="mb-3 d-flex">
                    <div class="w-50">
                        <label class="fs-5 text-white mb-3">Name</label>
                    <input type="text" name="name" value="{{ $user->name }}" style="height:50px;" class="form-control">
                
                    </div>
                    <div class="ms-2 w-50">
                        <label class="fs-5 text-white mb-3">Email</label>
                    <input type="text" name="email" value="{{ $user->email }}" style="height:50px;"  class="form-control">
                    </div>
                
                </div>
            
                

                <div class="mb-3">
                    <label class="fs-5 text-white mb-3">email_verified_at</label>
                    <input type="text" name="" value="{{ $user->email_verified_at }}" style="height:50px;"  class="form-control">
                </div>

                <div class="mb-3">
                    <label class="fs-5 text-white mb-3">User Type</label>
                    <input type="text" name="" value="{{ $user->usertype }}" style="height:50px;"  class="form-control">
                </div>
                
            
                <!-- Add other fields here -->
            
                <button type="submit" class="btn btn-primary w-100 py-2">Update</button>
            </form>
        </div>
    </div>
</div>

</body>





@endsection