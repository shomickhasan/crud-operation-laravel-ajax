
<!DOCTYPE html>
<html lang="en" dir="rtl" class="rtl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    

    <title>Admin Login</title>

    <!-- vendor css -->
    <link href="{{asset ('backeend/lib/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset ('backeend/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{asset ('backeend/css/bracket.css')}}">
    <link rel="stylesheet" href="{{asset ('backeend/css/bracket.oreo.css')}}">
  </head>

  <body>

   @yield('adminlayoutComtent')

    <script src="{{asset('backeend/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('backeend/lib/jquery-ui/ui/widgets/datepicker.js')}}"></script>
    <script src="{{asset('backeend/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script>
      $(function(){
        'use strict';

        // Check if video can play, and play it
        var video = document.getElementById('headVideo');
        video.addEventListener('canplay', function() {
          video.play();
        });

      });
    </script>

  </body>
</html>
