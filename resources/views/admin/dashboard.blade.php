<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
   
    <title>Document</title>

  <style>

    #th{
        padding: 15px 10px;
        
        background: darkblue;
        color:white;
    }

    #main{
        height: 100%;
        overflow: scroll;
    }
    #sidebar{
        height: 100%;
    }


       
       @media screen and (max-width:992px){

        #sidebar{
            width:20%;
        }

        #dashboard{
            font-size: 18px;
        }
        ul li a{
            font-size: 15px;
            color:orange;
        }
        #mainicons{
            padding:0px auto;
            text-align: center;
            width: 140px;
            /* border: 2px solid red; */
        }
        #icons{
            font-size: 18px;
            text-align: center;
            padding: 4px;
        }


       }
       @media screen and (max-width:768px){
        #sidebar{
            width:24%;
        
        }

        #dashboard{
            font-size: 18px;
        }
        ul li a{
            font-size: 15px;
            color:orange;
        }
        #mainicons{
             padding:0px auto;
             width: 110px;
             margin:0px auto;
            
            
        }
        #icons{
            font-size: 18px;
            text-align: center;
            padding-left:-20px;
        }
       

       }
    </style>





</head>
<body>
        <div class="container-fluid px-0">
    
            <div class="row " id="main">
                 <div class="col-2" id="sidebar">{{View::make('admin.sidebar')}}</div>
                 <div class="col-10">
                    <div class="row" id="header" >{{View::make('admin.header')}}</div>
                    <div class="row">@yield('content') </div>   
                </div> 
               
            </div> 

            <div class="row  bg-black my-0">
                <div class="col-12 px-0">

                    {{View::make('admin/footer')}}
                </div>
            </div>
           
            
        </div>
        
       
       
                
       

     
        
</body>
</html>