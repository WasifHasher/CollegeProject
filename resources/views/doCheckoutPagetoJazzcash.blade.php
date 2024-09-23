<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <script type="text/javascript">

   function closethisasap(){
    document.forms['redirectpost'].submit();
   }

   </script>
</head>
<body onload="closethisasap();">
        <H1>Please Waitning...</H1>
        <h2>Please wait you will be redirect to jazzcash Payment Page</h2>

        <form name="redirectpost" method="POST"  action="{{Config::get('constants.jazzcash.TRANSACTION_POST_URL')}}">
           
           <?php
                    $post_data = Session::get('post_data');
                    // echo "<pre>";
                    // print_r($post_data);
                    // echo "</pre>";
                
                ?>

                @foreach ($post_data  as $key => $value)
                    <input type="hidden" name="{{$key}}" value="{{$value}}">
                @endforeach
        </form>
    
</body>
</html>
