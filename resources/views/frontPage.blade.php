<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">


    <title>Document</title>
   
 <style>
                
                    /* #about:nth-child(even) {
                        display: flex;
                        flex-direction: row-reverse;
            } */

            #aboutBox{
                width: 290px;
                height: 500px !important;
                
            }
            #aboutBox:hover{
                width: 300px;
                height: 520px;
            }

            #aboutDesc{
                font-family: "Averia Sans Libre", sans-serif;
                font-size: 15px;
                font-style: normal;
            }

            #about-image{
                border-radius: 10px;
                margin-top: 10px;
                width: 85%;
                height: 130px;
            }

            #about-title{
                /* font-family: "Pacifico", serif;
                 font-weight: 400;
                 font-style: normal; */

                font-family: "Noto Serif", serif;
                font-optical-sizing: auto;
                font-weight: <weight>;
                font-style: normal;
                font-variation-settings:
                    "wdth" 100;
                width:250px;
                padding-left:15px;
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
                    width: 14%;
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
            
                .review{
                    position: relative;
                    bottom: 5%;
                    left: 28%;
                    z-index: 1;
                    padding: 0px;
                    margin: 0px;

                
                }

            .rate {
                float: left;
                height: 46px;
                padding: 0 10px;
            }
            .rate:not(:checked) > input {
                position:absolute;
                top:-9999px;
            }
            .rate:not(:checked) > label {
                float:right;
                width:1em;
                overflow:hidden;
                white-space:nowrap;
                cursor:pointer;
                font-size:30px;
                color:#ccc;
            }
            .rate:not(:checked) > label:before {
                content: '★ ';
            }
            .rate > input:checked ~ label {
                color: #ffc700;    
            }
            .rate:not(:checked) > label:hover,
            .rate:not(:checked) > label:hover ~ label {
                color: #deb217;  
            }
            .rate > input:checked + label:hover,
            .rate > input:checked + label:hover ~ label,
            .rate > input:checked ~ label:hover,
            .rate > input:checked ~ label:hover ~ label,
            .rate > label:hover ~ input:checked ~ label {
                color: #c59b08;
            }

            #Product_cart{
                max-height: 500px;
                width: 280px;
                border-radius: 10px;

            }
            #Product_cart:hover {
                max-height: 520px;
                width: 290px;
               
            }

            #ProjectImage{
                width: 50%;
                height:110px;
                border-radius:50%;
                position: relative;
                top: 19%;
                text-align: center;

            }
            #desc{
                font-family: "Averia Sans Libre", sans-serif;
                font-size: 15px;
                font-style: normal;
            }

            .aboutText{
                opacity: 0;
                font-family: "PT Serif", serif;
                font-weight: 400;
                font-style: italic;
            }
            .aboutText .animated{
                opacity: 1;
            }

            #headingTwo{
                opacity: 0;
            }
            #headingTwo .animated{
                opacity: 1;
            }
            #ProfileImage{
                opacity: 0;
            }
            #ProfileImage .animated{
                opacity: 1;
            }
            */
            
                @media screen and (max-width:992px){

                    #searchinput{

                    width: 70%;
                    /* border:2px solid red; */
                    }
                    #checkout{
                        width: 50%;
                    }
                    .review{
                    position: relative;
                    bottom: 5%;
                    left: 57%;

                    }
                
                }
                @media screen and (max-width:767px){

                    .review{
                    position: relative;
                    bottom: 5%;
                    left: 77%;

                    }

                }
                @media screen and (max-width:576px){
                    .review{
                    position: relative;
                    bottom: 5%;
                    left: 36%;

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
            
                .review{
                    position: relative;
                    bottom: 5%;
                    left: 48%;

                    }
                }

                @media screen and (max-width:360px){
                    .review{
                    position: relative;
                    bottom: 5%;
                    left: 50%;
                    
                   
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> --}}
   
 <script>

    function modal(){
        document.getElementById("modal").style.display = "block";
    }
    function closeModal() {
            document.getElementById("modal").style.display = "none";
        }


        // var waypoint = new Waypoint({
        // element: document.getElementById('target-element'),
        // handler: function(direction) {
        //     console.log('Triggered at 50px above the target element');
        // },
        // offset: '50%' // Trigger when the element is halfway into the viewport
        // });

      
        $(document).ready(function () {
            $('.aboutText').waypoint(function (direction) {
                $('.aboutText').addClass('animated fadeInDown'); // Ensure the animation class exists
            }, {
                offset: '50%' // Optional: Trigger when the element is 50% into the viewport
            });

            $('#headingTwo').waypoint(function (direction) {
                $('#headingTwo').addClass('animated fadeInLeft'); // Ensure the animation class exists
            }, {
                offset: '50%' // Optional: Trigger when the element is 50% into the viewport
            });

            $('#ProfileImage').waypoint(function (direction) {
                $('#ProfileImage').addClass('animated fadeInRight'); // Ensure the animation class exists
            }, {
                offset: '50%' // Optional: Trigger when the element is 50% into the viewport
            });


            $('.increament').click(function(e){
                e.preventDefault();

                var increament = $('.qty-name').val();
                var value = parseInt(increament,10);
                value = isNaN(value) ? '0' :value;
                if(value < 10){
                    
                    value++;
                    $('.qty-name').val(value);
                }
            });

            $('.decreament').click(function(e){
                e.preventDefault();

                var decreament = $('.qty-name').val();
                var value = parseInt(decreament,10);
                value = isNaN(value) ? '0' :value;
                if(value > 0){
                    
                    value--;
                    $('.qty-name').val(value);
                }
            });







        });


        



 </script>

</body>
</html>