<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <title>Document</title>
    <style>
        #redeye{
            position: relative;
            margin-top: 10px;
            right: 13%;
        }
        #emailLogin{
            background:rgba(0,0,0,0.1) !important;
            border: none;
            border-bottom:1px solid white;
            color:white;
            width: 93%;
        }
        #password{
            width: 110%;
            background:rgba(0,0,0,0.1) !important;
            border: none;
            border-bottom:1px solid white;
            color:white;
        }
    </style>
</head>
<body style="background-image: url('Products/1.png'); background-size: cover; background-repeat: no-repeat;">


        <div class="container mt-5">
            @if (session('status'))
                <div class="alert alert-success">{{ session('status')}}</div>    
            @endif
            <div class="row " style="background: rgba(0,0,0,0.7);">
                
                <div class="col-4  offset-1 shahow rounded mt-3 " style="height:550px;z-index:1;">
                    <h3 style="margin-left:10px;width:320px;" class="mt-5 py-2 text-white text-center fs-4">Login Form</h3>
                        <form action="/SaveLogin" method="POST" class="mt-3 z-5">
                            @csrf

                            

                            <div class="form-group mt-4 mx-2">
                                <input type="email" class="Form-Control  p-2 ps-3" id="emailLogin" name="email" placeholder="Email">
                                @error('email')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>

                            <div class="form-group mt-3 mx-2 d-flex ">
                                <input type="password" class="Form-Control w-100 p-2 ps-3" id="password" name="password" placeholder="password">
                                
                                <i class="fa-regular fa-eye-slash text-white fs-4" id="redeye"></i>
                                @error('password')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>

                          

                            <button class="btn btn-danger mt-4 py-2" style="width:320px;margin-left:10px;">Login</button>

                        </form>
                        <div class="mt-3 text-center">
                            <span class="">_____________<a href="/Websiteregister"  style="color:gray;" class="text-decoration-none">Register? Sign up</a>_____________</span>
                          
                        </div>
                </div>

                <div class="col-5 offset-1 mt-3" style="background-color: rgba(0,0,0,0.4)">
                    <img src="Products\burger_8.webp"  class="h-100 w-100"  alt="">
                </div>
            </div>
        </div>


        <script>

            let eyeicon =document.getElementById('redeye');
            let password = document.getElementById('password');

            eyeicon.onclick = function(){
                if(password.type == 'password'){
                    password.type = 'text';
                    eyeicon.classList.toggle("fa-eye");
                    
                }else{
                    password.type = 'password';
                    eyeicon.classList.toggle("fa-eye-slash");

                }
            }


        </script>
    
</body>
</html>