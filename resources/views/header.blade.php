<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

    <title>Document</title>
  <style>
      .active {
            font-weight: bold;
            background-color: orange;
            /* border-bottom: 2px solid orange; */
            border-radius: 50px;
            
           }

           #logo{
            width: 150px;
            height: 70px;
            border-radius: 10%;
            margin-left: 2%;
           }
           #pizza{
          margin-left: 10px;
          }  

          #totalitem{
          
            background: orange;
            padding: 0px 7px;
            position: absolute;
            top: 10%;
            right: 7%;
            border-radius: 50%;
          }
          .cart{
            width: 80%;
            height: 80%;
            background: white;
            position: absolute;
            top: 10%;
            left: 10%;

          }
          .darkcolor{
            background: rgb(0,0,0,0.4);
          }
        

          #username{
            font-family: "Pacifico", cursive;
            font-weight: 400;
            font-style: normal;
                          
              }


          @media screen and (max-width:1100px){
          #togglerIcon{
            margin-right: 10px;
            color:wheat;
          }
          #cartdiv{
          position: fixed;
          right: 33%;
          margin: 0px auto;
          /* border:2px solid red; */
        }
          /* /* #cart{
            position: absolute;
            
            left:70%;
            margin-right:20px;
          }  */
          #totalitem{
                position: absolute;
                top:6%;
                left:68%;
                width: 25px;
                height:25px;
            } 
            }


            @media screen and (max-width:992px){
              #togglerIcon{
                margin-right: 10px;
                  color:wheat;
                }
                #cartdiv{
              position:fixed;
              right: 12%;

              /* border:2px solid red; */
            }
        /* /* #cart{
          position: absolute;
          
          left:70%;
          margin-right:20px;
        }  */

        #pizza{
            font-family: "Pacifico", cursive;
            font-weight: 400;
            font-style: normal;
            word-spacing: 3px;
            letter-spacing: 3px;
            font-size: 24px;
         position: absolute;
         text-align: left;
          font-weight: bolder;

          } 
          #totalitem{
                position: absolute;
                top:-55%;
                left:13px;
                width: 25px;
                height:25px;
          } 
          }
          @media screen and (max-width:768px){
            #togglerIcon{
              
                color:wheat;
                margin-left:70%;
                font-size: 15px;
              }
              #pizza{
            font-family: "Pacifico", cursive;
            font-weight: 400;
            font-style: normal;
            word-spacing: 3px;
            letter-spacing: 3px;
            font-size: 24px;
         position: absolute;
         text-align: left;
          font-weight: bolder;

          } 
              #username{
                font-size: 20px;
                position:absolute;
                left: 77%;
                top: 2%;
                position: fixed;
                
              }



              }

        @media screen and (max-width:686px){
          #togglerIcon{
          
              color:wheat;
              position: absolute;
              left:13%;
              font-size: 15px;
            }

            #pizza{
            font-family: "Pacifico", cursive;
            font-weight: 400;
            font-style: normal;
            word-spacing: 3px;
            letter-spacing: 3px;
            font-size: 29px;
         position: absolute;
         left: 8%;
        text-align: center;
          font-weight: bolder;

          } 
            #username{
              font-size: 20px;
              left: 70%;
              top:15px;
              position: absolute;
              
            }



        }

        @media screen and (max-width:500px){
          #togglerIcon{
          
              color:wheat;
              position: absolute;
              left:14%;
              
             font-size: 15px;
            }
            #logo{
              width:80px;
              height:80px;

            }

            #pizza{
            font-family: "Pacifico", cursive;
            font-weight: 400;
            font-style: normal;
            word-spacing: 3px;
            letter-spacing: 3px;
            font-size: 24px;
         position: relative;
         left: -23%;
         
          font-weight: bolder;

          } 
            #username{
              font-size: 20px;
              left: 46%;
              top:15px;
              position: absolute;
              
            }

            #cartdiv{
          position:fixed;
          right: 17%;
          margin: 0px auto;
          /* border:2px solid red; */
        }
        }

        @media screen and (max-width:400px){
          #logo{
            width: 50px;
            height: 50px;
            
          }
          #pizza{
            font-family: "Pacifico", cursive;
            font-weight: 400;
            font-style: normal;
            word-spacing: 3px;
            letter-spacing: 3px;
            font-size: 24px;
            position: absolute;
          left:-5%;
          font-weight: bolder;

          }  
          #togglerIcon{

              color:wheat;
              margin-left:50%;
              margin: 0%;
              font-size: 15px;
            }
            #username{
              font-size: 20px;
              left: 56%;
              top:15px;
              position: absolute;
              
            }
        #cartdiv{
          position:fixed;
          right: 20%;
          margin: 0px auto;
          /* border:2px solid red; */
        }
            
          #totalitem{
                position: absolute;
                top:-55%;
                left:13px;
                width: 25px;
                height:25px;
          } 

          @media screen and (max-width:360px){
            #togglerIcon{

              color:wheat;
              font-size: 15px;
              position: absolute;
              left: 85%;
              }
              #pizza{
            font-family: "Pacifico", cursive;
            font-weight: 400;
            font-style: normal;
            word-spacing: 3px;
            letter-spacing: 3px;
            font-size: 18px;
          margin-right:25%;
          display: flex;
          font-weight: bolder;

          }  
              #username{
                font-size: 20px;
                left: 56%;
                top:15px;
                position: absolute;
                
              }
          #cartdiv{
            position: absolute;
            right: 22%;
            margin: 0px auto;
            /* border:2px solid red; */
          }
          #totalitem{
                position: absolute;
                top:-55%;
                left:13px;
                width: 23px;
                height:23px;
          }
          }





    }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-black">
        <div class="container-fluid">
          <img src="\Products\man_2.PNG" id="logo" alt=""><a class="navbar-brand ps-1 text-white " id="pizza" href="#"></a>
          <button class="navbar-toggler p-0" id="togglerIcon" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa-solid fa-bars fs-4 p-2 border border-danger"></span>
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
            

           
             
              @if (Auth::check('name'))

              <div class="d-flex" style="margin-left:760px;">
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
              <div class="d-flex" style="margin-left:710px;">>
              <li class="nav-item px-2 {{ Request::is('WebsiteLogin') ? 'active' : ''}}">
                <a class="nav-link text-white" href="/WebsiteLogin">Log in</a>
              </li>
              
              <li class="nav-item px-2 {{ Request::is('Websiteregister') ? 'active' : ''}}">
                <a class="nav-link text-white" href="/Websiteregister">Sign Up</a>
              </li>
              <a class="nav-link text-white"  href="/CheckoutPage"><i class="fa-solid fa-cart-shopping fs-5"></i></a>
            </div>
              @endif


             
              
            </ul>
           
          </div>
          @if (Auth::check('name'))
          <div id="cartdiv">

            <a class="nav-link text-white" id="cart" href="/CheckoutPage"><i class="fa-solid fa-cart-shopping fs-5 d-lg-none "></i>
              <span class="d-lg-none" id="totalitem">{{ \App\Models\Cart::where('user_id', Auth::id())->count() }}
              </span></a>
          </div>
              
          <div class="pe-5 d-none d-lg-block text-white" >
            
            <h3 id="username">{{Auth::user()->name}}</h3>
            @endif
          </div>

          
          
         
          

        </div>
      </nav>

      

     

        



    
    
</body>
</html>