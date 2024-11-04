<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <title>Document</title>

    <style>

         
         span{
            color:white;
         }

        .active{
           
            font-weight: bold;
            background-color:rgb(244, 246, 244);
            color: darkblue;
            border-radius: 50px;
            padding-left:-20px;
            
        }
       
    </style>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-12   " style="background:rgb(63, 2, 137);height:900px;" >
                <div class="py-4 text-center fs-4">
                    <a href="#" id="dashboard" class="text-white text-decoration-none fw-bolder">Dashboard</a>
                </div>
                <hr class="text-white p-1">

                <div class="mt-4">
                    <ul class="ps-1">

                        <li class="list-unstyled py-2 "><a href="/dashboard" class="py-3  text-decoration-none"><span class="{{ Request::is('dashboard') ? 'active' : ''}} pe-5 py-2 "><i class="fa-solid fa-house pe-3 ps-2"></i>Home</span></a></li>
                 
                        <li class="list-unstyled py-2"><a href="/mainOrder" class="py-3  text-decoration-none"><span class="{{ Request::is('mainOrder') ? 'active' : ''}} pe-5 py-2 "><i class="fa-solid fa-cart-shopping pe-3 ps-2"></i>Products</span></a></li>
                       
                        <li class="list-unstyled py-2"><a href="/mainslider" class="py-3  text-decoration-none"><span class="{{ Request::is('mainslider') ? 'active' : ''}} pe-5 py-2 "><i class="fa-solid fa-sliders pe-3 ps-2"></i>Slider</span></a></li>
                      
                      
                        <li class="list-unstyled py-2"><a href="/mainAbout" class="py-3  text-decoration-none"><span class="{{ Request::is('mainAbout') ? 'active' : ''}} pe-5 py-2 "><i class="fa-solid fa-address-card pe-3 ps-2"></i>About</span></a></li>
                 
                      
                        <li class="list-unstyled py-2"><a href="/RecievedOrder" class="py-4  text-decoration-none"><span class="{{ Request::is('RecievedOrder') ? 'active' : ''}} pe-5 py-2 "><i class="fa-solid fa-gift pe-3 ps-2"></i>Order({{ \App\Models\CustomerOrder::count() }})</span></a></li>

                        <li class="list-unstyled py-2 "><a href="/ShowComments" class="py-4  text-decoration-none"><span class="{{ Request::is('ShowComments') ? 'active' : ''}} pe-5 py-2 "><i class="fa-solid fa-phone pe-3 ps-2"></i>Comment({{ \App\Models\comment::count() }})</span></a></li>

                        
                        @if (Auth::check('name'))
                        <li class="list-unstyled py-2 w-100 "><a href="/logout" class="py-3  text-decoration-none"><span class="{{ Request::is('logout') ? 'active' : ''}} pe-5 py-2 "><i class="fa-solid fa-right-from-bracket pe-3 ps-2"></i>Logout</span></a></li>
                            
                      
                        @else
                        <li class="list-unstyled py-1"><a href="/login" class="py-3  fs-4 text-decoration-none ps-2">Login</a></li>
                        <li class="list-unstyled py-1"><a href="/register" class="py-3  fs-4 text-decoration-none ps-2">Register</a></li>
                        @endif
                    </ul>

                    <hr>
                   

                   

                    <div class="text-white mt-4 ms-2">
                        <p class="" style="font-size: 15px;"> <i class="fa-regular fa-envelope pe-2"></i>{{Auth::user()->email}}</p>
                        <p><i class="fa-solid fa-phone pe-2"></i>923081491748</p>
                    </div>


                    <div class="mt-5 text-white fs-6" id="mainicons">
                        <i class="fa-brands fa-youtube px-2" id="icons"></i>
                        <i class="fa-brands fa-google" id="icons"></i>
                        <i class="fa-brands fa-facebook px-2" id="icons"></i>
                        <i class="fa-brands fa-twitter" id="icons"></i>
                        <i class="fa-brands fa-instagram px-2" id="icons"></i>
                    </div>

                </div>
            </div>
           
        </div>
    </div>


    
   
   
</body>
</html>
