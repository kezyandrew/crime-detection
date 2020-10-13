<?php
//if latitude and longitude are submitted
if(!empty($_POST['latitude']) && !empty($_POST['longitude'])){
    //send request and receive json data by latitude and longitude
    $url = 'http://maps.googleapis.com/maps/api/geocode/json?latlng='.trim($_POST['latitude']).','.trim($_POST['longitude']).'&sensor=false';
    $json = @file_get_contents($url);
    $data = json_decode($json);
    $status = $data->status;
    
    //if request status is successful
    if($status == "OK"){
        //get address from json data
        $location = $data->results[0]->formatted_address;
    }else{
        $location =  '';
    }
    
    //return address to ajax 
    echo $_POST['longitude']." ".$_POST['latitude'];
}
        $ip = $_SERVER['REMOTE_ADDR'];
        $loc = Location::get();
        $handle = curl_init();
        $url = "https://www.googleapis.com/geolocation/v1/geolocate";
        $data = array('key'=>'AIzaSyCPLH47HCDL8XPXXwEdaFLbTGPcg565HCY');

        $options = array(
            'http'=> array(
                'header' => 'Content-type: application/x-www-form-urlencoded\r\n',
                "method" => 'POST',
                "content" => http_build_query($data)
            )
        );

        $content = stream_context_create($options);
        $result = file_get_contents($url, false, $content);
        if($result === FALSE) { print_r('There has been an error in connection'); }
        print_r([$result, $ip, $loc]);
        // print_r(gettype($result));
        // var_dump($result);
        return null;


//We gonna try to implement with 
$ip = $_SERVER['REMOTE_ADDR'];
$url = "http://api.ipstack.com/".$ip;
        $data = array('access_key'=>'AIzaSyCPLH47HCDL8XPXXwEdaFLbTGPcg565HCY');

        $options = array(
            'http'=> array(
                'header' => 'Content-type: application/x-www-form-urlencoded\r\n',
                "method" => 'POST',
                "content" => http_build_query($data)
            )
        );

        $content = stream_context_create($options);
        $result = file_get_contents($url, false, $content);
        if($result === FALSE) { print_r('There has been an error in connection'); }
        print_r([$result, $ip, $loc]);
        // print_r(gettype($result));
        // var_dump($result);
        return null;
