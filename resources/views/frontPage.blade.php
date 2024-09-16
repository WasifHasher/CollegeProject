<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

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
        bottom:15%;
        width: 11%;
        height:5px;
        background:orange;
        transform: translateX(-50%);
        border-radius:10px;
    
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
        <div class="row">
            {{ View::make('footer')}}
        </div>
    </div>
    

    {{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
     --}}


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

</body>
</html>