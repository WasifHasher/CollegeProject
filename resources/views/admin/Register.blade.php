<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body style="background:#f4f6f6;">

        <div class="container mt-5">
            @if (session('status'))
                <div class="alert alert-success">{{ session('status')}}</div>    
            @endif
            <div class="row justify-content-center">
                
                <div class="col-5 border border-primary shahow bg-white rounded mt-3" style="height:500px">
                    <h3 style="margin-left:50px; width:430px" class="mt-5 btn btn-primary fs-3">Registration Form</h3>
                        <form action="/register" method="POST" class="mt-3">
                            @csrf

                            <div class="form-group mt-3 mx-5">
                                <input type="text" class="Form-Control w-100 p-2 ps-3" value="{{ old('name')}}" style="border-radius:30px;" name="name" placeholder="Name">
                                @error('name')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>

                            <div class="form-group mt-3 mx-5">
                                <input type="text" class="Form-Control w-100 p-2 ps-3" style="border-radius:30px;" name="email" placeholder="email">
                                @error('email')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>

                            <div class="form-group mt-3 mx-5">
                                <input type="password" class="Form-Control w-100 p-2 ps-3" style="border-radius:30px;" name="password" placeholder="password">
                                @error('password')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>

                            <div class="form-group mt-3 mx-5">
                                <input type="password" class="Form-Control w-100 p-2 ps-3" style="border-radius:30px;" name="password_confirmation" placeholder="password">
                                @error('password')<div class="text-danger" >{{ $message }}</div>@enderror
                            </div>

                            
                           

                            <button class="btn btn-primary mt-4 py-2" style="width:430px;margin-left:50px;">Submit</button>

                        </form>
                </div>
            </div>
        </div>
    
</body>
</html>