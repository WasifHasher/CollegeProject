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
                
                <div class="col-4 border border-primary shahow bg-white rounded mt-3 px-5" style="height:350px">
                    <h3 style="margin-left:10px;width:320px" class="mt-5 btn btn-danger fs-4">Login Form</h3>
                        <form action="/SaveLogin" method="POST" class="mt-3">
                            @csrf

                            

                            <div class="form-group mt-3 mx-2">
                                <input type="text" class="Form-Control w-100 p-2 ps-3" style="border-radius:30px;" name="email" placeholder="email">
                                @error('email')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>

                            <div class="form-group mt-3 mx-2">
                                <input type="password" class="Form-Control w-100 p-2 ps-3" style="border-radius:30px;" name="password" placeholder="password">
                                @error('password')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>

                          

                            <button class="btn btn-danger mt-4 py-2" style="width:320px;margin-left:10px;">Login</button>

                        </form>
                        <div class="mt-3 text-center">
                            <span class="">_____________<a href="/Websiteregister"  style="color:gray;" class="text-decoration-none">Register? Sign up</a>_____________</span>
                          
                            

                        </div>
                </div>
            </div>
        </div>
    
</body>
</html>