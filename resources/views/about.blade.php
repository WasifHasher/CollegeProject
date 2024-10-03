@extends('frontPage')
@section('mainContent')


    <div class="container" >

        @foreach ($abouts as $about)
            
        <div class="row justify-content-center mt-3 mt-xl-4"  id="about">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3  h-100 h-sm-100 h-md-75 h-lg-50 h-xl-50">
                <h2>{{$about->aboutTitle}}</h2>
                <p class="w-100 pt-md-3 pt-lg-3 pt-xl-3 w-sm-100 w-md-100 w-lg-100 h-md-100  text-danger ">{{$about->aboutDesc}}</p>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-5 mt-3 w-md-100 w-lg-75 w-xl-75">
                <img src="Products/{{($about->image)}}" class=" w-100 h-75 w-sm-100 w-md-100 w-lg-75 w-xl-75  px-0 mx-0 rounded" >
            </div>
        </div>
        @endforeach

    </div>


@endsection