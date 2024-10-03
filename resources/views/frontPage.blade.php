<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
   
 <style>
       
        #about:nth-child(even) {
            display: flex;
            flex-direction: row-reverse;
}

    #description {
        font-family: "Playpen Sans", cursive;
        font-optical-sizing: auto;
        font-weight: <weight>;
        font-style: normal;
        font-size:28px;
        
    }

    #orderItems::after{
        content : "";
        position: absolute;
        left:50%;
        bottom:23%;
        width: 11%;
        height:5px;
        background:orange;
        transform: translateX(-50%);
        border-radius:10px;
    
    }

    #searchinput{
        z-index:1;
       position: absolute;
       top: 55%;
       left:50%;
       width: 50%;
       transform: translateX(-50%);
       border:none;
        /* border:3px solid red;
         */
    }
    #input{
        padding: 10px 0px;
    }
    #btnSearch{
        background: orange;
        border-radius:0px 5px 5px 0px;
        border:none;
    }

    #orderbtnSearch{
        background:orange;
        border-radius:0px 5px 5px 0px;
        border:none;
    }

    #grayimg{
        background:rgba(135, 132, 132, 0.7);
        filter:contrast(30%);
    }

    #headingTwo{
        background-image: linear-gradient(43deg, #87f610 10%, #C850C0 30%, #FFCC70 60%, rgb(10, 246, 10));
        -webkit-background-clip: text;
        color:transparent;
    }

    #title{
        background-image: linear-gradient(43deg, #808cf7 10%, #daf609 30%, #fb0bdf 100%);
        -webkit-background-clip: text;
        color:transparent;
    }

    #checkout{
        width: 30%;
    }
   
       
   
   
    @media screen and (max-width:992px){

        #searchinput{

        width: 70%;
        /* border:2px solid red; */
        }

        #checkout{
            width: 50%;
            
        }
       
    }
    @media screen and (max-width:500px){

        #searchinput{
      
        width: 90%;
        /* border:2px solid red; */
    }
    #checkout{
        width: 100%;
    }
   

    }




    
    
    </style>



</head>
<body>

    <div class="container-fluid">
        <div class="row">
            {{ View::make('header')}}
        </div>
        <div class="row ">
            <div class="col-12 mx-0 px-0">@yield('mainContent')</div>
        </div>
        <div class="row mt-5">
            {{ View::make('footer')}}
        </div>
    </div>
    

     
     <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    

     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
 
   
 

</body>
</html>