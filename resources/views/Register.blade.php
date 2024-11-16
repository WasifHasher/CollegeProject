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
            right: 12%;
        }
        #blackeye{
            position: relative;
            right: 12%;
        }
        input{
            background:rgba(0,0,0,0.1) !important;
            border: none;
            border-bottom:1px solid white;
            color:white;
            width: 90%;
        }
        #row-gray{
            background: rgba(0,0,0,0.7);
            max-height: 100%;
            padding-top: 3%;
            padding-bottom: 3%;

        }
        #burger{
           height: 60vh;
           width: 120%;
           margin-left: -20%;
           filter:brightness(120%);
        }
        #close{
            position: absolute;
            left: 87%;
            top:6%;
        }
        button{
            width: 470px;
            border-radius: 10px;
        }

         /* Below media query we making for tablet Screen */
         @media screen and (max-width:992px){

            #burger{
           width: 100%;
         margin-left: -5%;
           filter:brightness(100%);
        }

         }

        /* Below media query we making for tablet Screen */
        @media screen and (max-width:767px){
            #close{
            position: absolute;
            left: 78%;
            top:6%;
        }

            #burger{
           width: 104%;
           margin-left: -6%;
           filter:brightness(100%);
        }
        }

/* Below media query we making for Mobile Screen */
        @media screen and (max-width:576px){

        body{
            height: 100vh;
            width: 40%;
        
        }
        input{
            background:rgba(0,0,0,0.1) !important;
            border: none;
            border-bottom:1px solid white;
            color:white;
            width: 96%;
        }
        #redeye{
            position: absolute;
            left: 84%;
            margin-top: 15px;
        }
        #blackeye{
            position: absolute;
            left:84%;
            margin-top: 15px;
        }
        #row-gray{
            position: absolute;
            top: 5%;
            max-height: 100vh;
            background: rgba(0,0,0,0.7);
            width: 100%;
            align-items: center;
            
        }
        #burger{
           display: none;

        }

        button{
            width:100%;
            border-radius: 10px;
        }

        }



    </style>
</head>
<body style="background-image: url('Products/2.png'); background-size: cover; background-repeat: no-repeat;">

        <div class="container mt-1 mt-md-4 mt-lg-4 mt-xl-4 w-100">
            @if (session('status'))
                <div class="alert alert-success">{{ session('status')}}</div>    
            @endif
            <div class="row justify-content-center mt-2 " id="row-gray">

                <a href="/" id="close" ><i class="fa-solid fa-xmark fs-3 text-white"></i></a>
                
                <div class="col-12 col-md-9 col-lg-5 col-xl-5  rounded m-3 mt-md-3 mt-lg-3 mt-xl-3" >
                    <h3 style="margin-left:50px; width:430px" class="mt-5 fs-3 text-uppercase text-white text-left text-md-center text-lg-center text-xl-center">Registration Form</h3>
                        <form action="/Saveregister" method="POST" class="mt-3">
                            @csrf

                            <div class="form-group mt-3 ">
                                <input type="text" class="Form-Control p-2 ps-3" value="{{ old('name')}}"  name="name" placeholder="Name">
                                @error('name')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>

                            <div class="form-group mt-3 ">
                                <input type="text" class="Form-Control p-2 ps-3"  name="email" placeholder="Email">
                                @error('email')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>

                            <div class="form-group mt-3 ">
                                <input type="password" class="Form-Control p-2 ps-3 " id="password"  name="password" placeholder="Password">

                                <i class="fa-regular fa-eye-slash text-white fs-4" id="redeye"></i>
                                @error('password')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>

                            <div class="form-group mt-3 ">
                                <input type="password" class="Form-Control p-2 ps-3" id="password_confirm"  name="password_confirmation" placeholder="Confirm Password">
                                <i class="fa-regular fa-eye-slash text-white fs-4" id="blackeye"></i>
                                @error('password_confirmation')<div class="text-danger" >{{ $message }}</div>@enderror
                            </div>

                            <button class="btn btn-danger mt-4 py-2" >Submit</button>

                        </form>
                </div>
                <div class="col-12 col-md-12 col-lg-5 col-xl-4 offset-1 mt-5 mt-md-4 mt-lg-5 mt-xl-5">
                    <img src="Products\burger_8.webp"  id="burger"  alt="">
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
           
            let eyeiconBlack =document.getElementById('blackeye');
            let password_confirm = document.getElementById('password_confirm');

            eyeiconBlack.onclick = function(){
                if(password_confirm.type == 'password'){
                    password_confirm.type = 'text';
                    eyeiconBlack.classList.toggle("fa-eye");
                    
                }else{
                    password_confirm.type = 'password';
                    eyeiconBlack.classList.toggle("fa-eye-slash");

                }
            }

        </script>
    
</body>
</html>