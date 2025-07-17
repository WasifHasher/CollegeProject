<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>


    <h2 class="btn btn-primary ms-5">Welcome to Foods Delivery System </h2>

    <h4 class="ms-5">Verification Email</h4>
    <h4 class="ms-5 mt-3 d-block">Name : {{ $sendEmailtoUser->name }} </h4>
    <h4 class="ms-5 mt-3 d-block">Email : {{ $sendEmailtoUser->email }}</h4>

    <p class="ms-5 mt-3">please verify your email just click on the verify button.</p>
    <a href="{{ route('user.verify.email', $sendEmailtoUser->id) }}" class="btn btn-primary mt-4 rounded text-white ms-5">
        Verify Email
    </a>


    
</body>
</html>