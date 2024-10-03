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
        #span{
            background: #86f903;
            width: 150px;
            height:150px;
            border-radius: 50%;
            font-size: 23px;
        }
        #back{
            background: #86f903;
            width: 100%;
        
        }
    </style>
</head>
<body style="background:#7e7e80">



    <div class="container mt-5">
        <div class="row justify-content-center ">
            <div class="col-11 col-md-6 col-lg-5 col-xl-4 bg-white text-center rounded" style="height: 350px;" >
                <div class="mt-5">
                    <span class="px-5 py-4 mt-5" id="span"><i class="fa-solid fa-check fs-2 text-white fw-bold"></i></span>
                </div>
                <h1 class="mt-5">Thank You!</h1>
                <p class="">Your order is Successfully placed.</p>
                <a href="{{ url('/')}}" class="btn w-100  text-white fw-bold fs-3" id="back">OK</a>
            </div>
        </div>
    </div>
    
</body>
</html>