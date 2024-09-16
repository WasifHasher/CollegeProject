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
                    <h3>Update Slider</h3>
                   
                </div>
               
                
                
                <form action="{{ url ('SaveUpdateSlider/' .$updates->id. '/edit')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group mt-4">
                        <input type="text" name="title" placeholder="Title" value="{{ old('title',$updates->title)}}" class="form-Control w-100 p-2 rounded border @error('title') is-invalid @enderror">
                        @error('title')<span class="text-danger">{{ $message}}</span>@enderror
                    </div>

                    <div class="form-group mt-3">
                        <input type="text" name="description" placeholder="description" value="{{ old('description',$updates->description)}}" class="form-Control w-100 p-2 border rounded @error('description') is-invalid @enderror">
                        @error('description')<span class="text-danger">{{ $message}}</span>@enderror
                    </div>
                    <div class="form-group mt-3">
                        <input type="file" name="image" onchange="document.querySelector('#image').src=window.URL.createObjectURL(this.files[0])" placeholder="Image" value="{{ old('image',$updates->image)}}" class="form-Control w-100 p-2 border rounded @error('image') is-invalid @enderror">
                       
                        <img src="{{ asset('Products/'.$updates->image)}}" id="image" height="90px" width="130px" class="mt-3"> 
                    </div>

                        <button class="btn btn-primary mt-3">Submit</button>
                </form>


            </div>
        </div>
    </div>

         
       
    






</body>
</html>