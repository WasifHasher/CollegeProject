@extends('frontPage')
@section('mainContent')

    <div class="container mt-5">
        <div class="row">
            <div class="col-xl-8 ">
                

                <form action="">
                
                    
                    <div class="form-group">
                        <input type="text" placeholder="Name" class="form-Control py-2 ps-2 rounded" name="name" style="width:40%;">
                        <input type="email" placeholder="Email" class="form-Control py-2 ps-2 rounded" name="email" style="width:40%;">
                    </div>
                    

                    
                    <div class="form-group mt-4">
                       <textarea name="" id=""  class="form-Control rounded"  style="width:80%;height:200px;">

                       </textarea>
                    </div>




                </form>


            </div>
        </div>
    </div>


@endsection