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
  #spanOne{
    background: red;
    border-radius: 50px;
    color: white;
    width: 25px;
    height: 20px;
    font-size: 10px;
    text-align: center;
    padding: 5px;
    position: relative;
    bottom: 60%;
    left: -15%;
  }

  #spanTwo{
    background: red;
    border-radius: 50px;
    color: white;
    width: 20px;
    height: 20px;
    font-size: 10px;
    text-align: center;
    padding: 5px;
    position: absolute;
    top: 15%;
    
  }

  #input{
    background: rgb(255, 255, 255);
    box-shadow: 2px 2px 7px greenyellow;
    color: yellow;
  }
  #input:focus{
    background: greenyellow;
    color: black;
    font-weight: bold;

  }
  #mainheader{
    background: rgb(41, 44, 38);
    box-shadow: 2px 2px 7px greenyellow;
  }

  @media screen and (max-width:500px){
    #mainheader{
      width: 100%;
      border: 2px solid red;
    }
    #spanOne{
      position: absolute;
      top: 50%;
      left: 6%;
    }
    #spanTwo{
      position: absolute;
      top: 50%;
      left: 17%;
    }
  }
</style>


</head>
<body>

    <nav class="navbar navbar-expand-lg mt-2  ms-1 rounded me-lg-5 border border-warning" id="mainheader" >
        <div class="container-fluid">
         
          <div class="collapse navbar-collapse d-block" id="navbarSupportedContent">

            <form action="/search" class="d-flex ms-lg-3 w-100 w-sm-100 w-md-100 w-lg-75" role="search" >
                <input type="text" name="query"  class="form-control me-2 p-2 w-100" placeholder="Search" id="input" aria-label="Search">
                <button class="btn " style="background: greenyellow;" type="submit">Search</button>
              </form>

          </div>

          <div class="d-flex">

         
          
                  {{-- <div class=" d-flex w-75  mt-4 mt-lg-3" style="margin-right:0px;" >
                    <i class="fa-solid fa-bell ps-lg-4 fs-2" style="color:greenyellow;" ><span id="spanOne">0</span></i>
                    <a href="/ShowComments"><i class="fa-solid fa-comment ms-4 fs-2" style="color:greenyellow;"><span id="spanTwo">{{ \App\Models\comment::count() }}</span></i></a>
                    
                  </div> --}}

                <div class="col-3 mt-3 d-flex w-100 ms-5 ps-5 ms-md-0 ps-md-0 ms-lg-3 ps-lg-3" style="margin-left:0px;" >
                  <p class="fs-5 ms-5 ps-5 ms-md-0 ps-md-0" style="color:greenyellow;"><i class="fa-duotone fa-solid fa-user pe-2" style="color:greenyellow;"></i>{{Auth::user()->name}}</p>
                </div>

          </div>

        </div>
      </nav>
    
</body>
</html>