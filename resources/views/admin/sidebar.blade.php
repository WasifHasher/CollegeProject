@php
        use App\Models\category;

        $brand = category::get();

@endphp
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
        ul li:hover{
            background: #222226;
        }

        .hideMenu{
            width: 96%;
            max-height: 240px;
            margin: 0px 0px;
            padding: 0px 0px;
            list-style: none;
            display: none;
            background: ;
            border-radius: 6px;
            transition:all 2s ease;

            
        }

        .hideMenu li:hover{
            background: #42414a;
            width: 100%;
    
        }

        .hideBrand{
            width: 96%;
            max-height: 240px;
            margin: 0px 0px;
            padding: 0px 0px;
            list-style: none;
            display: none;
            background: ;
            border-radius: 6px;
            transition:all 2s ease;

        }

        .hideBrand li:hover{
            background: #42414a;
            width: 90%;
    
        }

        .dropdown-toggle::after{
            position: relative;
            left: 90%;
        }


    @media screen and (max-width:500px){
        #sidebarSection{
            position: absolute;
            top: 0%;
            left: 0%;
            z-index: 1;
        }
    }

 
       
    </style>
</head>
<body>

    <div class="container" id="sidebarSection">
        <div class="row">
            <div class="col-12   " style="background:#11101d;height:900px;" >
                <div class="py-4 text-center fs-4">
                    <a href="#" id="dashboard" class="text-white text-decoration-none fw-bolder">Dashboard</a>

                    <i class="fa-solid fa-arrow-left text-white pe-3 ps-4" onclick="hideSideBarSection()"></i>
                </div>
                <hr class="text-white p-1">

                <div class="mt-4">
                    <ul class="ps-1">

                        <li class="list-unstyled py-2 "><a href="/dashboard" class="py-3  text-decoration-none"><span class="{{ Request::is('dashboard') ? 'active' : ''}} pe-5 py-2 "><i class="fa-solid fa-house pe-3 ps-2"></i>Home</span></a></li>
                 
                        <li class="list-unstyled py-2"><a href="/mainOrder" class="py-3  text-decoration-none"><span class="{{ Request::is('mainOrder') ? 'active' : ''}} pe-5 py-2 "><i class="fa-solid fa-cart-shopping pe-3 ps-2"></i>Products</span></a></li>
                       
                        <li class="list-unstyled py-2"><a href="/mainslider" class="py-3  text-decoration-none"><span class="{{ Request::is('mainslider') ? 'active' : ''}} pe-5 py-2 "><i class="fa-solid fa-sliders pe-3 ps-2"></i>Slider</span></a></li>
                      
                      
                       
                 
                      
                        <li class="list-unstyled py-2"><a href="/RecievedOrder" class="py-4  text-decoration-none"><span class="{{ Request::is('RecievedOrder') ? 'active' : ''}} pe-5 py-2 "><i class="fa-solid fa-gift pe-3 ps-2"></i>All Orders ({{ \App\Models\CustomerOrder::count() }})</span></a></li>



                        <li class="nav-item dropdown list-unstyled py-2 text-white ">
                            <button class="nav-link dropdown-toggle report" href="#"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-brands fa-ravelry pe-3 ps-2 "></i>Report
                            </button>
                            <ul class="hideMenu pt-3 mt-1 ms-3">
                              <li class="dropdown-item  py-1 mx-0 "><a class="text-decoration-none text-white ps-3" href="{{ url('/RecievedOrder')}}"><span class="{{ Request::is('RecievedOrder') ? 'active' : ''}} ps-3 pe-3 py-2 ">All Orders <span></span></a></li>

                              <li class="dropdown-item  py-1 mx-0 "><a class="text-decoration-none text-white ps-3 " href="{{ url('/Today')}}" ><span class="{{ Request::is('Today') ? 'active' : ''}} ps-3 pe-3 py-2 ">Today</span></a></li>
                              <li class="dropdown-item  py-1 mx-0 "><a class="text-decoration-none text-white ps-3" href="{{ url('/yesterday')}}"><span class="{{ Request::is('yesterday') ? 'active' : ''}} ps-3 pe-3 py-2 ">Yesterday </span></a></li>
                              <li class="dropdown-item  py-1"><a class="text-decoration-none text-white ps-3" href="{{ url('/lastWeek')}}"><span class="{{ Request::is('lastWeek') ? 'active' : ''}} ps-3 pe-3 py-2 ">Last Week </span></a></li>
                              <li class="dropdown-item  py-1"><a class="text-decoration-none text-white ps-3" href="{{ url('/CurrentMonth')}}"><span class="{{ Request::is('CurrentMonth') ? 'active' : ''}} ps-3 pe-3 py-2 ">Current Month </span></a></li>
                              <li class="dropdown-item  py-1"><a class="text-decoration-none text-white ps-3" href="{{ url('/LastMonth')}}"><span class="{{ Request::is('LastMonth') ? 'active' : ''}} ps-3 pe-3 py-2 ">Last Month </span></a></li>
                              <li class="dropdown-item  py-1"><a class="text-decoration-none text-white ps-3" href="{{ url('/CurrentYear')}}"><span class="{{ Request::is('CurrentYear') ? 'active' : ''}} ps-3 pe-3 py-2 ">Current Year </span></a></li>
                            
                             
                            </ul>
                          </li>

                          <li class="nav-item dropdown list-unstyled py-2 text-white ">
                            <button class="nav-link dropdown-toggle brand" href="#"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-brands fa-ravelry pe-3 ps-2 "></i>Brands
                            </button>
                            <ul class="hideBrand pt-1 mt-1 ms-3">
                                
                               @foreach ($brand as $item)
                                   <li class="p-2"><a href="{{ url('list/'.$item->id.'/item')}}" class="text-decoration-none text-white">{{ $item->category_names}}</a></li>
                               @endforeach
                            </ul>
                          </li>
                      


                         

                        <li class="list-unstyled py-2"><a href="/owner" class="py-4  text-decoration-none"><span class="{{ Request::is('owner') ? 'active' : ''}} pe-5 py-2 "><i class="fa-brands fa-weixin pe-3 ps-2"></i>Owner Info</span></a></li>
                        <li class="list-unstyled py-2"><a href="/message" class="py-4  text-decoration-none"><span class="{{ Request::is('message') ? 'active' : ''}} pe-5 py-2 "><i class="fa-brands fa-weixin pe-3 ps-2"></i>Messages</span></a></li>
                        <li class="list-unstyled py-2"><a href="/employees" class="py-4  text-decoration-none"><span class="{{ Request::is('employees') ? 'active' : ''}} pe-5 py-2 "><i class="fa-brands fa-weixin pe-3 ps-2"></i>Employees</span></a></li>

                        <li class="list-unstyled py-2"><a href="/mainAbout" class="py-3  text-decoration-none"><span class="{{ Request::is('mainAbout') ? 'active' : ''}} pe-5 py-2 "><i class="fa-solid fa-address-card pe-3 ps-2"></i>About</span></a></li>
                        <li class="list-unstyled py-2"><a href="/Alluser" class="py-3  text-decoration-none"><span class="{{ Request::is('Alluser') ? 'active' : ''}} pe-5 py-2 "><i class="fa-solid fa-address-card pe-3 ps-2"></i>All User</span></a></li>

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


                    <div class="mt-5 text-white fs-6 ms-0 w-100 w-sm-100 w-md-100 w-lg-50" id="mainicons">
                        <i class="fa-brands fa-youtube px-2 fs-3" id="icons"></i>
                        <i class="fa-brands fa-google fs-3" id="icons"></i>
                        <i class="fa-brands fa-facebook px-2 fs-3" id="icons"></i>
                        <i class="fa-brands fa-twitter fs-3" id="icons"></i>
                        <i class="fa-brands fa-instagram px-2 fs-3" id="icons"></i>
                    </div>

                </div>
            </div>
           
        </div>
    </div>


    
   
   
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
   

    <script>

document.addEventListener('DOMContentLoaded', () => {
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
});


document.addEventListener('DOMContentLoaded', () => {
    const toggleButton = document.querySelector('.brand');
    const dropdownMenu = document.querySelector('.hideBrand');

    // Toggle the dropdown menu when the button is clicked
    toggleButton.addEventListener('click', (event) => {
        dropdownMenu.style.display = dropdownMenu.style.display = 'block';
        event.stopPropagation(); // Prevent the click from propagating to the document
    });

    // Close the dropdown menu when clicking anywhere else on the document
    document.addEventListener('click', () => {
        dropdownMenu.style.display = 'none';
    });
});


    function hideSideBarSection(){
        document.getElementById('sidebarSection').style.display = 'none';
        document.getElementById('headerAndContent').style.width = '100%';
    }





        
    </script>

</body>
</html>
