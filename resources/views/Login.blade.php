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
        #grayColorMargin{
            position: absolute;
            top: 14%;
        }

        #close{
            position: absolute;
            left: 87%;
            top:6%;
        }


        @media screen and (max-width:675px){
            #grayColorMargin{
            position: absolute;
            top: 0%;
        }
        }
    </style>
</head>
<body style="background-image: url('Products/1.png'); background-size: cover; background-repeat: no-repeat;">


        <div class="container mt-5">
            @if (session('status'))
                <div class="alert alert-success">{{ session('status')}}</div>    
            @endif
            <div class="row " style="background: rgba(0,0,0,0.7);p" id="grayColorMargin">

                <a href="/" id="close" ><i class="fa-solid fa-xmark fs-3 text-white"></i></a>
                
                <div class="col-11 col-md-4 col-lg-4 col-xl-4 offset-1 shahow rounded mt-3 " style="height:550px;z-index:1;">
                    <h3 style="margin-left:10px;width:320px;" class="mt-5 py-2 text-white text-center fs-4">Login Form</h3>
                        <form action="/SaveLogin" method="POST" class="mt-3 z-5">
                            @csrf

                            

                            <div class="form-group mt-4  w-100">
                                <input type="email" class="Form-Control  p-2 ps-3" id="emailLogin" name="email" placeholder="Email">
                                @error('email')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>

                            <div class="form-group mt-3  d-flex ">
                                <input type="password" class="Form-Control w-100 p-2 ps-3" id="password" name="password" placeholder="password">
                                
                                <i class="fa-regular fa-eye-slash text-white fs-4" id="redeye"></i>
                                @error('password')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>

                            <div class="mt-3 ms-2">
                                <input type="checkbox" name="remember" id="remember" class="" style="height:18px;width:30px;" >
                                <label for="remember" class="text-warning fs-6" style="padding-top:0px;">Remember Me</label>
                            </div>

                            <button class="btn btn-danger mt-4 py-2 " style="width:320px;">Login</button>

                        </form>
                        <div class="mt-3 text-center">
                            <span class="">_____________<a href="/Websiteregister"  style="color:gray;" class="text-decoration-none">Register? Sign up</a>_____________</span>
                          
                        </div>



                        
                </div>

                <div class="col-12 col-md-6 col-lg-6 col-xl-6 offset-1 mt-3 ms-0" style="background-color: rgba(0,0,0,0.4)">
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