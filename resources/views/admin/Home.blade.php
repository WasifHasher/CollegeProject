@extends('admin.dashboard')
@section('content')


    
<div class="col-2 shadow bg-white rounded d-flex ps-4 mt-4" style="height:100px;width:250px;">
    <p class="mt-3 fs-4 fw-bolder">Users</p>
    <p class="mt-5 fw-bolder ps-1" style="position:relative;top:6%;right:30%;">{{ \App\Models\user::count() }}</p>
    <a href="#" style="position:relative;top:30%;left:22%;" ><i class="fa-brands fa-youtube px-2 fs-3"></i></a>
</div>

<div class="col-2 shadow bg-white rounded d-flex ps-4 mx-3 mt-4" style="height:100px;width:250px;">
    <p class="mt-3 fs-4 fw-bolder">Amounts</p>
    <p class="mt-5 " style="position:relative;top:6%;right:49%;">00</p>
    <a href="#" style="position:relative;top:30%;left:22%;" ><i class="fa-brands fa-youtube px-2 fs-3"></i></a>
</div>

<div class="col-2 shadow bg-white rounded d-flex ps-4 mt-4" style="height:100px;width:250px;">
    <p class="mt-3 fs-4 fw-bolder">Orders</p>
    <p class="mt-5 " style="position:relative;top:6%;right:35%;">({{ \App\Models\CustomerOrder::count() }})</p>
    <a href="#" style="position:relative;top:30%;left:22%;" ><i class="fa-brands fa-youtube px-2 fs-3"></i></a>
</div>

<div class="col-2 shadow bg-white rounded d-flex ps-4 ms-3 mt-4" style="height:100px;width:250px;">
    <p class="mt-3 fs-4 fw-bolder">Totals</p>
    <p class="mt-5 " style="position:relative;top:6%;right:31%;">00</p>
    <a href="#" style="position:relative;top:30%;left:22%;" ><i class="fa-brands fa-youtube px-2 fs-3"></i></a>
</div>















@endsection