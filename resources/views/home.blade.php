@extends('layouts.app')

@section('content')
        @switch(Auth::user()->role)
            @case('user')
                @include('dashboards.users', ['categories'=>$categories, 'crimes'=>$crimes, 'locations'=>$locations])
                @break
            @case('admin')
                @include('dashboards.admin', ['categories'=>$categories, 'crimes'=>$crimes, 'locations'=>$locations])
                @break
            @default
                Something Went Wrong, you are accesing the system illegally
                
        @endswitch

@endsection
