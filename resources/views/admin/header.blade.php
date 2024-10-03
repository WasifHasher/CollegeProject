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
    width: 20px;
    height: 20px;
    font-size: 10px;
    text-align: center;
    padding: 5px;
    position: absolute;
    top: 15%;
    left: 67%;

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
    left: 71%;
  }
</style>


</head>
<body>

    <nav class="navbar navbar-expand-lg mt-2 bg-white rounded" id="mainheader">
        <div class="container-fluid">
         
          <div class="collapse navbar-collapse " id="navbarSupportedContent">

            <form action="/search" class="d-flex w-75" role="search"  style="margin-left:170px;">
                <input type="text" name="query"  class="form-control me-2 p-2" placeholder="Search" id="input" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>

          </div>

          
                  <div class="ms-4" style="margin-right:-160px;" >
                    <i class="fa-solid fa-bell ps-4 fs-5" style="color:darkblue;" ><span id="spanOne">0</span></i>
                    <a href="/ShowComments"><i class="fa-solid fa-comment ms-4 fs-5" style="color:darkblue;"><span id="spanTwo">{{ \App\Models\comment::count() }}</span></i></a>
                    
                  </div>

             <div class="col-3 mt-3 ps-5" style="margin-left:200px;" >
               
               <p class="fs-5 ms-4"><i class="fa-duotone fa-solid fa-user pe-2" style="color:darkblue;"></i>{{Auth::user()->name}}</p>
            </div>

        </div>
      </nav>
    
</body>
</html>