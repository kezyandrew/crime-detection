<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name', 'CAA') }}</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/ionicons/dist/css/ionicons.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.addons.css')}}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets/css/shared/style.css')}}">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/demo_1/style.css')}}">
    <!-- End Layout styles -->
    {{-- end custom styles here --}}

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    {{-- geolocation API --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    {{--  The Script below will show get he visitors location--}}
    <script>
        $(document).ready(function(){
            if(navigator.geolocation){
                navigator.geolocation.getCurrentPosition(showLocation);
            }else{ 
                $('#location').html('Geolocation is not supported by this browser.');
            }
        });

        function showLocation(position){
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;
            $.ajax({
                type:'POST',
                url:'getLocation.php',
                data:'latitude='+latitude+'&longitude='+longitude,
                success:function(msg){
                    if(msg){
                    $("#location").html(msg);
                    }else{
                        $("#location").html('Not Available');
                    }
                }
            });
        }
        </script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
</head>
<body>
    <?php 
        use Illuminate\Support\Facades\Http;
        use Illuminate\Support\Facades\Carbon;
        use App\User;
        use App\Locations;
        $_ = new Locations;

        $ip = $_SERVER['REMOTE_ADDR'];
        $url = "http://api.ipstack.com/".$ip."?access_key=bf01f636b7ad6832e3e7a97ba16ccfab";
        $response = Http::get($url);
        $loc = $response->json();
        
    
    ?>
    
    <div class="container-scroller">
        @include('inc.topbar')
        <div class="container-fluid page-body-wrapper">
            @include('inc.sidebar')
            <div class="main-panel">
                <div class="content-wrapper">
                    {{-- <p>Your Location: <span id="location"></span></p> --}}
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <div>
    
    <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{ asset('assets/vendors/js/vendor.bundle.addons.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ asset('assets/js/shared/off-canvas.js')}}"></script>
    <script src="{{ asset('assets/js/shared/misc.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('assets/js/demo_1/dashboard.js')}}"></script>
    
</body>
</html>
