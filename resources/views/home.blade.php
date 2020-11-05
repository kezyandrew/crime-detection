@extends('layouts.app')
@section('content')
    

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
