<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  
    <style>
          #aboutUs::after{
        content: '';
        position: relative;
        width: 100px;
        height: 10px;
        background: darkblue;
        top:20%;
    
    }
    
    </style>
</head>
<body>
    
    <div class="container mt-2" style="background:rgb(1, 34, 72);">
        <div class="row justify-content-center  ms-lg-5 ps-xl-4 pt-lg-5" style="padding-left:10px;">
            <div class="col-12 col-sm-12 col-md-5 col-xl-3 ">
                <h3 class="text-white fw-bolder mt-3" id="aboutUs">ABOUT US</h3>
               
                <p class="text-white w-75 pt-2">Wasif is the passionate and dedicated owner of an online pizza shop, known for delivering delicious, freshly baked pizzas right to customers' doorsteps. With a strong commitment to quality and customer satisfaction, he has built a trusted brand that blends traditional flavors with modern convenience.</p>
            </div>

            <div class="col-12 col-md-5 col-sm-12 col-xl-2 px-1 ms-3" >
                <h3 class="text-white fw-bolder mt-3">LINKS</h3>
               <ul class="list-unstyled pt-2">
                <li><i class="fa-solid fa-chevron-right text-white" style="font-size:12px;"></i><a href="/" class="text-white text-decoration-none unstyled  ps-3">Home</a></li>
                <li><i class="fa-solid fa-chevron-right text-white" style="font-size:12px;"></i><a href="/orderPage" class="text-white text-decoration-none unstyled  ps-3">Order</a></li>
                <li><i class="fa-solid fa-chevron-right text-white" style="font-size:12px;"></i><a href="/AboutPage" class="text-white text-decoration-none unstyled  ps-3">About</a></li>
                <li><i class="fa-solid fa-chevron-right text-white" style="font-size:12px;"></i><a href="/contactPage" class="text-white text-decoration-none unstyled  ps-3">Contact</a></li>
                <li><i class="fa-solid fa-chevron-right text-white" style="font-size:12px;"></i><a href="/WebsiteLogin" class="text-white text-decoration-none unstyled  ps-3">Login</a></li>
                <li><i class="fa-solid fa-chevron-right text-white" style="font-size:12px;"></i><a href="/Websiteregister" class="text-white text-decoration-none unstyled  ps-3">Register</a></li>
               </ul>
            </div>


            <div class="col-12 col-md-5 col-sm-12 col-xl-3 mt-md-3 ms-md-5 px-1 ms-3">
                <h3 class="text-white fw-bolder ">SERVICE</h3>
               <ul class="list-unstyled">
                <li class="pt-2"><a href="#" class="text-white text-decoration-none unstyled  ps-3"><i class="fa-duotone fa-solid fa-hashtag pe-2"></i>List item #1</a></li>
                <li><a href="#" class="text-white text-decoration-none unstyled  ps-3"><i class="fa-duotone fa-solid fa-hashtag  pe-2"></i>List item #1</a></li>
                <li><a href="#" class="text-white text-decoration-none unstyled  ps-3"><i class="fa-duotone fa-solid fa-hashtag  pe-2"></i>List item #1</a></li>
                
               </ul>
            </div>

            <div class="col-12 col-md-6 col-sm-12 mt-md-3 col-xl-3 px-1 ms-3" style="height:240px;">
                <h3 class="text-white fw-bold">CONTACT US</h3>
                <h6 class="pt-2 text-white"><i class="fa-duotone fa-solid fa-phone  pe-2"></i>923081491748</h6>
                <h6 class="pt-2 text-white"><i class="fa-duotone fa-solid fa-phone  pe-2"></i>923305538440</h6>
                <h6 class="pt-2 text-white"><i class="fa-brands fa-whatsapp fs-5 pe-2"></i>923305538440</h6>
                <h6 class="pt-2 text-white"><i class="fa-solid fa-envelope pe-2"></i>wasifhasher@gmail.com</h6>
            </div>
            
            {{-- <i class="fab fa-whatsapp"></i>
            <i class="fa-solid fa-square-phone"></i> --}}


        </div>
        <div class="row py-3 text-center" style="background: rgb(1, 34, 72);">
            <p class="fw-bolder text-warning">Copyrights @2024. All Rights Reserved.</p>
        </div>
    </div>
    

</body>
</html>