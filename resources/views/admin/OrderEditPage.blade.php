<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body style="background:#f4f6f6;">
    




    <div class="container">
        <div class="row justify-content-center">
            
            <div class="col-6 mt-5 border border-primary shadow p-3 rounded bg-white py-4 me-2" style="height:450px;">
                
                <div class="d-flex">
                    <h3>Update Order</h3>
                   
                </div>
               
                
                
                <form action="{{ url ('SaveUpdateOrder/' .$updateOrders->id. '/edit')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group mt-4">
                        <input type="text" name="name" placeholder="name" value="{{ old('name',$updateOrders->name)}}" class="form-Control w-100 p-2 rounded border @error('title') is-invalid @enderror">
                        @error('name')<span class="text-danger">{{ $message}}</span>@enderror
    
                    <div class="form-group mt-3">
                        <input type="text" name="price" placeholder="price" value="{{ old('price',$updateOrders->price)}}" class="form-Control w-100 p-2 border rounded @error('description') is-invalid @enderror">
                        @error('price')<span class="text-danger">{{ $message}}</span>@enderror
                    </div>
                    <div class="form-group mt-3">
                        <input type="file" name="image" onchange="document.querySelector('#image').src=window.URL.createObjectURL(this.files[0])" placeholder="Image" value="{{ old('image',$updateOrders->image)}}" class="form-Control w-100 p-2 border rounded @error('image') is-invalid @enderror">
                       
                        <img src="{{ asset('Products/'.$updateOrders->image)}}" id="image" height="90px" width="130px" class="mt-3"> 
                    </div>

                        <button class="btn btn-primary mt-3">Submit</button>
                </form>


            </div>
        </div>
    </div>

         
       
    






</body>
</html>