@extends('frontPage')
@section('mainContent')

    <div class="container ">
        <div class="row">
            <div class="px-0" style="height: 250px;width:100%;">
      
                <img src="Products/3.png" alt="" class="h-100" id="contactImage">
                
              </div>
            <div class="col-xl-8 mt-5" id="contactForm">
                

                <form action="/SubmitComment" method="POST">
                  @csrf
                    <h2 class="text-uppercase">Your Comments</h2>
                    <div class="form-group mt-3">
                        <input type="text" placeholder="Name" class="form-Control py-2 ps-2 rounded " name="name" >
                        <input type="email" placeholder="Email" class="form-Control py-2 ps-2 rounded  mt-3" name="email" >
                    </div>
                    

                    
                    <div class="form-group mt-4">
                        <label for="">For Message</label>
                       <textarea name="address" id=""  class="form-Control rounded"   style="height:200px;">

                       </textarea>
                    </div>

                    <div class="">
                        <button class="btn btn-primary">Submit</button>
                    </div>




                </form>


            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row ">
            <h2 class="text-center">Locate Us</h2>
            <div class="col-5 border border-gray rounded py-3" id="location" style="background: gainsboro;">
                <h3 class="fs-5 ps-2 ps-lg-0">Landi Kotal</h3>
                <h5 >Near to Wasif chock and Maddrasa.</h5>
                <div class="clearfix">

                    <p class="float-start">PAK : 923081491748</p>
                    <a href="https://maps.app.goo.gl/f6dCyaYMy11VtVJm7" class="float-end text-decoration-none pe-3"><i class="fa-solid fa-location-dot pe-2"></i>Link</a>
                </div>
            </div>
            <div class="col-5 offset-2 rounded py-3" id="peshawar" style="background: gainsboro;">
                <h3 class="fs-5 ps-2 ps-lg-0 ">Peshawar</h3>
                <h5 >Near to Complex Hospital.</h5>
                <div class="clearfix">

                    <p class="float-start">PAK : 923081491748</p>
                    <a href="https://maps.app.goo.gl/n9M5sMFLeGpBqsxWA" class="float-end text-decoration-none pe-3"><i class="fa-solid fa-location-dot pe-2"></i>Link</a>
                </div>
            </div>
        </div>
    </div>

    {{-- https://maps.app.goo.gl/n9M5sMFLeGpBqsxWA --}}
@endsection