@extends('frontPage')
@section('mainContent')


    <div class="container" >

        
        <div class="row  mt-3 mt-xl-4 justify-content-center" >
            @foreach ($abouts as $about)
            <div class="col-12 col-sm-12 col-md-3  py-3 shadow rounded col-lg-3 mt-4 h-lg-50 h-xl-50" id="aboutBox">
                <h2 id="about-title">{{$about->aboutTitle}}</h2>
                <img src="Products/{{($about->image)}}" class="mx-3" id="about-image" >
                <p class="w-100 pt-md-3 pt-lg-3 pt-xl-3 w-sm-100 w-md-100 w-lg-100 h-md-100 mt-lg-2 px-3" id="aboutDesc">{{$about->aboutDesc}}</p>
            </div>
           
           
            @endforeach
        </div>

    </div>


@endsection