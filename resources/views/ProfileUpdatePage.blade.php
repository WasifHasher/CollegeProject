
@extends('frontPage')
@section('mainContent')

<body  style="height: 600px;background-color:rgba(0,0,0,0.7);z-index:-1;">
    

<div class="container mt-0 mt-lg-5 rounded" style="height: 600px;background-color:rgba(0,0,0,0.9);">
    <div class="d-flex justify-content-center">
        <h1 class="text-white pt-3 text-left text-lg-center d-inline">Update Your Profile</h1>
    <a href="{{url('/')}}" class="fs-5 text-white" id="xmark"><i class="fa-solid fa-xmark"></i></a>
    </div>
   
    <div class="row justify-content-center">
        
        <div class="col-11 col-sm-11 col-mg-8 col-lg-8 col-xl-8 mt-4 ">
            <form action="{{ url('SaveProfileData/'.$user->id) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="mb-3 d-lg-flex d-xl-flex w-100">
                    <div class="w-100 w-sm-100 w-md-50 w-lg-50 w-xl-50 d-block">
                        <label class="fs-5 text-white mb-lg-3 mb-0">Name</label>
                    <input type="text" name="name" value="{{ $user->name }}" style="height:50px;" class="form-control">
                
                    </div>
                    <div class="ms-lg-1 w-100 w-sm-100 w-md-50 w-lg-50 w-xl-50">
                        <label class="fs-5 text-white mb-lg-3 mb-0">Email</label>
                    <input type="text" name="email" value="{{ $user->email }}" style="height:50px;"  class="form-control">
                    </div>
                
                </div>
            
                

                <div class="mb-3 w-100 w-sm-100 w-md-50 w-lg-50 w-xl-50 mx-0 px-0">
                    <label class="fs-5 text-white mb-lg-3 mb-0">email_verified_at</label>
                    <input type="text" name="" value="{{ $user->email_verified_at }}" style="height:50px;"  class="form-control">
                </div>

                <div class="mb-3 w-100 w-sm-100 w-md-50 w-lg-50 w-xl-50">
                    <label class="fs-5 text-white mb-lg-3 mb-0">User Type</label>
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