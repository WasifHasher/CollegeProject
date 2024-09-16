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
      .active {
            font-weight: bold;
            background-color: orange;
            border-radius: 50px;
}
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-black">
        <div class="container-fluid">
          <a class="navbar-brand ps-4 text-white" href="#">E-commerce</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse py-2" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              
              <li class="nav-item px-2 {{ Request::is('/') ? 'active' : ''}}">
                <a class="nav-link text-white" href="/">Home</a>
              </li>

              <li class="nav-item px-2 ">
                <a class="nav-link text-white" href="#">Order</a>
              </li>
             
              <li class="nav-item px-2 {{ Request::is('AboutPage') ? 'active' : ''}}">
                <a class="nav-link text-white" href="/AboutPage">About</a>
              </li>
              <li class="nav-item px-2 {{ Request::is('contactPage') ? 'active' : ''}}">
                <a class="nav-link text-white" href="/contactPage">Contact</a>
              </li>

              <li class="nav-item px-2">
                <a class="nav-link text-white" href="#">Cart</a>
              </li>
              @if (Auth::check('name'))

              <li class="nav-item px-2 {{ Request::is('Websitelogout') ? 'active' : ''}}">
                <a class="nav-link text-white" href="/Websitelogout">Logout</a>
              </li>
              @else
              <li class="nav-item px-2 {{ Request::is('WebsiteLogin') ? 'active' : ''}}">
                <a class="nav-link text-white" href="/WebsiteLogin">Login</a>
              </li>
              
              <li class="nav-item px-2 {{ Request::is('Websiteregister') ? 'active' : ''}}">
                <a class="nav-link text-white" href="/Websiteregister">Register</a>
              </li>
              @endif
              
            </ul>
           
          </div>

          
          <div class="pe-5 text-white">
            @if (Auth::check('name'))
            <h3>{{Auth::user()->name}}</h3>
            @endif
          </div>
          
         
          

        </div>
      </nav>

    
</body>
</html>