<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color: rgba(0,0,0.0,0.5); position:fixed:top:0;height:100%;width:100%;">

        <div class="container mt-5">
            <img src="Products/10.png" class="" style="z-index: 1;" alt="">
            <div class="row justify-content-center">
                <div class="col-6 border border-danger bg-white rounded">
                    <h2 class="text-black pt-2 text-center ">To Sender</h2>

                    <form action="{{url('/just_for_sender')}}" method="POST" class="mt-5 mb-3">
                        @csrf

                        <div class="">
                            <input type="text" name="reciever_id" value="{{$Send_message_to_user->user_id}}">
                        </div>
                        <div class="">
                            <textarea name="message_to_user" id="" class="w-100 ps-2 pt-2 fs-5 rounded" rows="10" placeholder="Enter Message for Sender"></textarea>
                        </div>

                        <button class="w-100 bg-primary text-white p-2 mt-2 rounded">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    
</body>
</html>