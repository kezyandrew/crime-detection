@extends('layouts.app')
@section('content')
    @php
        $ip = Request::ip();
        return print_r( $ip);
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
