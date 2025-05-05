<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('CSS/frontPage.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">


    <title>Document</title>
   
</head>
<body>

    <div class="container-fluid">
        <div class="row">
            {{ View::make('header')}}
        </div>
        <div class="row ">
            <div class="col-12 mx-0 px-0">@yield('mainContent')</div>
        </div>
        <div class="row mt-5">
            {{ View::make('footer')}}
        </div>
    </div>
    


   
    
     <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    

     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> --}}
  

 <script>

    function modal(){
        document.getElementById("modal").style.display = "block";
    }
    function closeModal() {
            document.getElementById("modal").style.display = "none";
        }


        

    // var typed = new Typed(".auto-type", {
    //     strings: ['Kabir Resturant', 'Day Night Resturant', 'Shiraz Resturant'],
    //     typeSpeed: 150,
    //     backSpeed: 150,
    //     loop: true // corrected 'looped' to 'loop'
    // });






    // function clickOnInput(category){
    //     var category = '';

    //     $('input[name="category"]:checked').each(function(){
    //         if(category == ''){
    //             category += this.value;
    //         }else{
    //             category += ',' + this.value;

    //         }
    //     })
    //     $('#category').val(category);
    //     $('#frmfilter').submit();


    // }


        // var waypoint = new Waypoint({
        // element: document.getElementById('target-element'),
        // handler: function(direction) {
        //     console.log('Triggered at 50px above the target element');
        // },
        // offset: '50%' // Trigger when the element is halfway into the viewport
        // });

      
        $(document).ready(function () {
            $('.aboutText').waypoint(function (direction) {
                $('.aboutText').addClass('animated fadeInDown'); // Ensure the animation class exists
            }, {
                offset: '50%' // Optional: Trigger when the element is 50% into the viewport
            });

            $('#headingTwo').waypoint(function (direction) {
                $('#headingTwo').addClass('animated fadeInLeft'); // Ensure the animation class exists
            }, {
                offset: '50%' // Optional: Trigger when the element is 50% into the viewport
            });

            $('#ProfileImage').waypoint(function (direction) {
                $('#ProfileImage').addClass('animated fadeInRight'); // Ensure the animation class exists
            }, {
                offset: '50%' // Optional: Trigger when the element is 50% into the viewport
            });

            $('#location').waypoint(function (direction) {
                $('#location').addClass('animated fadeInLeft'); // Ensure the animation class exists
            }, {
                offset: '50%' // Optional: Trigger when the element is 50% into the viewport
            });

            $('#peshawar').waypoint(function (direction) {
                $('#peshawar').addClass('animated fadeInRight'); // Ensure the animation class exists
            }, {
                offset: '50%' // Optional: Trigger when the element is 50% into the viewport
            });


            
            $('.increament').click(function(e){
                e.preventDefault();

                var increament = $('.qty-name').val();
                var value = parseInt(increament,10);
                value = isNaN(value) ? '0' :value;
                if(value < 10){
                    
                    value++;
                    $('.qty-name').val(value);
                }
            });

            $('.decreament').click(function(e){
                e.preventDefault();

                var decreament = $('.qty-name').val();
                var value = parseInt(decreament,10);
                value = isNaN(value) ? '0' :value;
                if(value > 0){
                    
                    value--;
                    $('.qty-name').val(value);
                }
            });
        });


    document.addEventListener('DOMContentLoaded', function () {
    const ShowUserBox = document.getElementById('ShowUserBox');
    const whitebox = document.getElementById('whitebox');

    if (ShowUserBox && whitebox) {
        ShowUserBox.addEventListener('click', function (event) {
            event.stopPropagation(); // Prevent this click from reaching the document click listener
            if (whitebox.style.display === 'block') {
                whitebox.style.display = 'none';
            } else {
                whitebox.style.display = 'block';
            }
        });

        // whitebox.addEventListener('click', function (event) {
        //     event.stopPropagation(); // Prevent clicks inside the whitebox from closing it
        // });

        document.addEventListener('click', function () {
            whitebox.style.display = 'none';
        });
    }
});



    

   

 </script>

</body>
</html>