@extends('layouts.app')
@section('content')
<div class="row page-title-header">
    <div class="col-12">
      <div class="page-header">
        <h4 class="page-title">Administrator</h4>
        <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
          <ul class="quick-links">
            {{-- <li><a href="#">Crime Stats Data</a></li>
            <li><a href="#">Own analysis</a></li>
            <li><a href="#">Activity Logs</a></li> --}}
          </ul>
          <ul class="quick-links ml-auto">
            <li><a href="#">Settings</a></li>
            <li><a href="#">Analytics</a></li>
            <li><a href="#">black Spots</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-12">
      <div class="page-header-toolbar">
        
        <div class="filter-wrapper">
          {{-- <div class="dropdown toolbar-item">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownsorting" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sort Since</button>
            <div class="dropdown-menu" aria-labelledby="dropdownsorting">
              <a class="dropdown-item" href="#">Today</a>
              <a class="dropdown-item" href="#">This Week</a>
              <a class="dropdown-item" href="#">This Month</a>
              <a class="dropdown-item" href="#">This Year</a>
            </div>
          </div> --}}

          {{-- <a href="#" class="advanced-link toolbar-item">Advanced Options</a> --}}
        </div>
        <div class="sort-wrapper"> 
          
          {{-- <form action="{{ url('/load') }}" method="GET">
            @csrf
            <button type="submit" class="btn btn-primary btn-sm">Refresh Location</button>
          </form> --}}

          &nbsp;
          <a href="{{ url('/crimes') }}" type="button" class="btn btn-primary toolbar-item">
            Add Crime category
          </a>
          &nbsp;
          <a href="{{ url('/crimes') }}" type="button" class="btn btn-primary toolbar-item">
            Add Crime 
          </a>
          &nbsp;

          <div class="dropdown ml-lg-auto ml-3 toolbar-item">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownexport" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More</button>
            <div class="dropdown-menu" aria-labelledby="dropdownexport">
              <a class="dropdown-item" href="#">Locations</a>
              <a class="dropdown-item" href="#">Black Spots</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  @include('admin.reports', ['categories'=>$categories, 'crimes'=>$crimes, 'locations'=>$locations])
  
  

@endsection