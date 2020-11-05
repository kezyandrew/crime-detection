@extends('layouts.app')
@section('content')
    @php
        use Illuminate\Support\Facades\Http;
        $client = new \GuzzleHttp\Client();

        // $response = $client->request('POST', 'https://www.googleapis.com/geolocation/v1/geolocate?key=AIzaSyAxPyBRZtDj7ssvtYE5_ExKC1aIgfYX_LU');
        // $data = $response->getBody()->getContents();
        // $json = json_decode($response->getBody());
        
        $temp = '109.223.139.1';
        $url = "http://api.ipstack.com/".$temp."?access_key=bf01f636b7ad6832e3e7a97ba16ccfab";
        
        $resp = $client->request('GET', $url);
        return print_r($resp->getBody()->getContents())


        // return print_r($json);



    @endphp

        @switch(Auth::user()->role)
            @case('user')
                    @include('dashboards.users')
                @break

                @case('admin')
                    @include('dashboards.admin')
                @break
            @default
                Something Went Wrong, you are accesing the system illegally
                
        @endswitch

@endsection
