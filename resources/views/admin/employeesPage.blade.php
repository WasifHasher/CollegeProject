@extends('admin.dashboard')

@section('content')
    {{-- <style>
        .input-group-inline {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .input-group-inline label {
            margin-right: 10px;
            margin-bottom: 0;
            min-width: 150px; /* Optional: ensures label width for alignment */
        }

        .input-group input[type="file"] {
            margin-top: 10px;
        }
    </style> --}}

    <div class="container m-4 mt-5">
        <div class="row justify-content-center">
            
            <div class="col-8 bg-white p-4 rounded shadow-sm">
                <h2 class="text-center py-3 text-warning">Enter your Employees Data</h2>

                <form action="/SaveEmployeesData" method="POST" enctype="multipart/form-data" class="mt-3">
                    @csrf <!-- Add this to protect the form -->

                    <label for="employee-info" class="mb-2">Enter your Employees Info :</label>

                    <div class="input-group-inline border border-gray rounded">
                            <input type="text" id="employee-info" name="info" class="form-control py-2">
                    </div>

                    <div class="">

                        <label for="employee-info" class="mb-2 mt-4">Enter your Image :</label>
                        <div class="input-group mb-3 border border-gray rounded">
                            <input type="file" name="image" class="form-control py-2">
                        </div>
                        
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
