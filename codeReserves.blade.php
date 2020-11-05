@php
    // use Illuminate\Support\Facades\Http;
    // $url = 'https://www.googleapis.com/geolocation/v1/geolocate?key=AIzaSyAxPyBRZtDj7ssvtYE5_ExKC1aIgfYX_LU';
    // $req = Http::post($url);
    // return print_r(['Data', $req->json()]);

    $ip = $_SERVER['REMOTE_ADDR'];
    if($ip == '::1'){$ip= "154.224.82.105"; };

    // return print_r($ip);
    $url = "http://api.ipstack.com/".$ip."?access_key=bf01f636b7ad6832e3e7a97ba16ccfab";
    // $url = "https://www.googleapis.com/geolocation/v1/geolocate?key=AIzaSyAxPyBRZtDj7ssvtYE5_ExKC1aIgfYX_LU";
    $response = Http::get($url);
    $loc = $response->json();

    if($loc['region_name'] == ''){ $loc['country_name'] =='Undefined'; }
    Auth::user()->city = $loc['city'];
    Auth::user()->country = $loc['country_name'];
    Auth::user()->lat = $loc['latitude'];
    Auth::user()->long = $loc['longitude'];
    
    // return print_r(Auth::user());
@endphp