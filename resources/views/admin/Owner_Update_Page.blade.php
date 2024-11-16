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


            
            <div class="col-6 mt-5 border border-primary shadow p-3 rounded bg-white py-4 me-2">
                <h2>Owner Update Page</h2>
                
               

                
                <form action="{{ url ('Save_Update_Owner_Record/' .$show_update_record->id. '/edit')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group mt-4">
                        <input type="text" name="heading" placeholder="heading" value="{{ old('heading',$show_update_record->heading)}}" class="form-Control w-100 p-2 rounded border @error('heading') is-invalid @enderror">
                        @error('heading')<span class="text-danger">{{ $message}}</span>@enderror
                    </div>

                    <div class="form-group mt-3">
                        <input type="text" name="info" placeholder="info" value="{{ old('info',$show_update_record->info)}}" class="form-Control w-100 p-2 border rounded @error('info') is-invalid @enderror">
                        @error('info')<span class="text-danger">{{ $message}}</span>@enderror
                    </div>
                    <div class="form-group mt-3">
                        <input type="file" name="image" onchange="document.querySelector('#image').src=window.URL.createObjectURL(this.files[0])" placeholder="Image" value="{{ old('image',$show_update_record->image)}}" class="form-Control w-100 p-2 border rounded @error('image') is-invalid @enderror">
                        <img src="{{ asset('Products/'.$show_update_record->image)}}" id="image" height="90px" width="130px" class="mt-3">
                    </div>

                        <button class="btn btn-primary mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>