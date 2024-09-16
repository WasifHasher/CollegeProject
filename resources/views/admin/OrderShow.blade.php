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
</head>
<body style="background:#b5b5b5;">

    <div class="container">
        <div class="row justify-content-center">

            
            <div class="col-6 mt-5 border border-primary shadow p-3 rounded bg-white py-4 me-2" style="height:300px;">
                
                
               
                
                
                <form action="/SaveOrder" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mt-4">
                        <input type="text" name="name" placeholder="name" value="{{ old('name')}}" class="form-Control w-100 p-2 rounded border @error('name') is-invalid @enderror">
                        @error('name')<span class="text-danger">{{ $message}}</span>@enderror
                    </div>

                    <div class="form-group mt-3">
                        <input type="text" name="price" placeholder="price" value="{{ old('price')}}" class="form-Control w-100 p-2 border rounded @error('price') is-invalid @enderror">
                        @error('price')<span class="text-danger">{{ $message}}</span>@enderror
                    </div>
                    <div class="form-group mt-3">
                        <input type="file" name="image" placeholder="Image" value="{{ old('image')}}" class="form-Control w-100 p-2 border rounded @error('image') is-invalid @enderror">
                        @error('image')<span class="text-danger">{{ $message}}</span>@enderror
                    </div>

                        <button class="btn btn-primary mt-3">Submit</button>
                </form>


            </div>
        </div>
    </div>
    
</body>
</html>