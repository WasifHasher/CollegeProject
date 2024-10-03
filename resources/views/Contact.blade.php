@extends('frontPage')
@section('mainContent')

    <div class="container mt-5">
        <div class="row">
            <div class="col-xl-8 ">
                

                <form action="/SubmitComment" method="POST">
                  @csrf
                    
                    <div class="form-group">
                        <input type="text" placeholder="Name" class="form-Control py-2 ps-2 rounded w-100" name="name" style="width:40%;">
                        <input type="email" placeholder="Email" class="form-Control py-2 ps-2 rounded w-100 mt-3" name="email" style="width:40%;">
                    </div>
                    

                    
                    <div class="form-group mt-4">
                        <label for="">For Message</label>
                       <textarea name="address" id=""  class="form-Control rounded w-100"   style="width:80%;height:200px;">

                       </textarea>
                    </div>

                    <div class="">
                        <button class="btn btn-primary">Submit</button>
                    </div>




                </form>


            </div>
        </div>
    </div>


@endsection