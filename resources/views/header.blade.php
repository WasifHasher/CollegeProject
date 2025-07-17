<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('CSS/header.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

    <title>Document</title>

    <style>
      #whitebox{
        width: 350px;
        height: 200px;
        background-color: rgba(67, 40, 40, 0.797);
        border-radius: 10px;
        position: absolute;
        top: 12%;
        right: 1%;
        z-index: 1;
        display: none;
      }
    </style>
 
</head>
<body>

  



    <nav class="navbar navbar-expand-lg" style="background: rgb(39, 20, 67);">
        <div class="container-fluid">
          <img src="\Products\largelogo.PNG" id="logo" alt=""><a class="navbar-brand ps-1 text-white " id="pizza" href="#"></a>
          <button class="navbar-toggler p-0" onclick="hideBar()" id="togglerIcon" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa-solid fa-bars fs-4 p-2"></span>
            {{-- <i class="fa-solid fa-bars"></i> --}}
          </button>
          <div class="collapse navbar-collapse py-2" id="navbarSupportedContent">
            <ul class="navbar-nav clearfix  mb-2 mb-lg-0"> 
              
             
              <li class="nav-item px-2 {{ Request::is('/') ? 'active' : ''}}">
                <a class="nav-link text-white text-uppercase" href="/">Home</a>
              </li>

              <li class="nav-item px-2 {{ Request::is('orderPage') ? 'active' : ''}}" >
                <a class="nav-link text-white text-uppercase" href="/orderPage">our<span class="ps-1"></span>menu</a>
              </li>
             
              <li class="nav-item px-2 {{ Request::is('AboutPage') ? 'active' : ''}}">
                <a class="nav-link text-white text-uppercase" href="/AboutPage">About</a>
              </li>
              <li class="nav-item px-2 {{ Request::is('contactPage') ? 'active' : ''}}">
                <a class="nav-link text-white text-uppercase" href="/contactPage">Contact</a>
              </li>



               <div class="  d-lg-none" >
                @if (Auth::check('name'))
                <li class="nav-item px-2 {{ Request::is('Websitelogout') ? 'active' : ''}}">
                  <a class="nav-link text-white" href="/Websitelogout">Logout</a>
                </li>
                @endif
                {{-- <li class="nav-item px-2 mt-3 text-center position-absolute top-25">
                 
                   <h3 class="text-white"> {{ Auth::check() ? Auth::user()->name : session('name') }}</h3> 
                   
              
                </li> --}}
                </div> 
            

             
              @if (Auth::check('name'))

              <div class="d-flex d-xl-flex  d-none d-sm-none d-md-none d-lg-block d-xl-block" id="logoutAndCart">
              <li class="nav-item px-2 {{ Request::is('Websitelogout') ? 'active' : ''}}">
                <a class="nav-link text-white" href="/Websitelogout">Logout</a>
              </li>
              <li class="nav-item px-2">
             
                <a class="nav-link text-white me-3" href="/CheckoutPage"><i class="fa-solid fa-cart-shopping fs-5"></i>
                  <span class="" id="totalitem">{{ \App\Models\Cart::where('user_id', Auth::id())->count() }}
                </span></a>
            
              </li>
              </div>
              @else
              <div class="d-lg-flex " id="loginAndsign" >
              <li class="nav-item px-2  {{ Request::is('WebsiteLogin') ? 'active' : ''}}">
                <a class="nav-link text-white login" href="/WebsiteLogin">Log in</a>
              </li>
              
              <li class="nav-item px-2  {{ Request::is('Websiteregister') ? 'active' : ''}}">
                <a class="nav-link text-white singUp" href="/Websiteregister">Sign Up</a>
              </li>
              {{-- <a class="nav-link text-white"  href="/CheckoutPage"><i class="fa-solid fa-cart-shopping fs-5" ></i></a> --}}
            </div>
              @endif


             
              
            </ul>
           
          </div>
          @if (Auth::check('name') || session()->has('name'))
          
              
          <div  class="pe-1   d-lg-block d-xl-flex d-inline  text-white  mt-md-3 mt-lg-0" style="width: 170px;" id="ShowUserBox">

            <h3 id="username" class="d-flex  mt-md-3 mt-lg-0">
            {{ Auth::check() ? Auth::user()->name : session('name') }}
            <i class="fa-solid fa-angle-down fs-6 ms-2 pt-2"></i>
            </h3>
          </div>
            @endif

          
        </div>
   </nav>

   <div id="mobileView" class="">

    <a class="nav-link text-white" id="" href="/CheckoutPage"><i class="fa-solid fa-cart-shopping fs-5 d-lg-none "></i>
      <span class="d-lg-none" id="Secondtotalitem">{{ \App\Models\Cart::where('user_id', Auth::id())->count() }}
      </span></a>
  </div>

      

      @if (Auth::check('name'))
      <div class="" id="whitebox">
        
          <div class="">
            <p class="mt-3 text-white">Username : <span class="text-uppercase">{{Auth::user()->name}}</span></p>
            <p class="text-white" style="margin-top:-10px;">Email : {{Auth::user()->email}}</p>
          </div>
          
          
     
        <a href="{{ url('EditProfileData/'.Auth::user()->id.'/edit') }}" id="editProfileModal" class="btn btn-outline-warning w-100  text-center px-0">Edit Profile</a>
       
          <a class="nav-link text-white fs-4 mt-3 text-center" href="/Websitelogout">Logout</a>
        
        
      </div>
      @endif

      {{-- <a href="{{ url('EditProfileData/'.Auth::user()->id.'/edit') }}" class="btn btn-warning w-100 d-none">Edit</a> --}}
      

  
      

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    
 
  <script>
 
     const toggleButton = document.querySelector('.report');
     const dropdownMenu = document.querySelector('.hideMenu');
 
     // Toggle the dropdown menu when the button is clicked
     toggleButton.addEventListener('click', (event) => {
         dropdownMenu.style.display = dropdownMenu.style.display = 'block';
         event.stopPropagation(); // Prevent the click from propagating to the document
     });
 
     // Close the dropdown menu when clicking anywhere else on the document
     document.addEventListener('click', () => {
         dropdownMenu.style.display = 'none';
     });
 

     
    const toggleButtons = document.querySelector('.brand');
    const dropdownMenubrand = document.querySelector('.hideBrand');

    // Toggle the dropdown menu when the button is clicked
    toggleButtons.addEventListener('click', (event) => {
        dropdownMenubrand.style.display = dropdownMenubrand.style.display = 'block';
        event.stopPropagation(); // Prevent the click from propagating to the document
    });

    // Close the dropdown menu when clicking anywhere else on the document
    document.addEventListener('click', () => {
        dropdownMenubrand.style.display = 'none';
    });

   

  







     
</script>
        



    
    
</body>
</html>