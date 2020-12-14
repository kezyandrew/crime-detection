
<?php
  use App\Locations;
  use App\Crime;
  use App\Category;

  $crime = Crime::orderBy('id', 'desc')->get();;
  $cats = Category::orderBy('id', 'desc')->get();
  $Locations = Locations::orderBy('id', 'desc')->get();

?>

@extends('layouts.app')
@section('content')
<div class="row page-title-header">
    <div class="col-12">
      <div class="page-header">
        <h4 class="page-title">Dashboard</h4>
        <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">

          {{-- <ul class="quick-links">
            <li><a href="#">Crime Stats Data</a></li>
            <li><a href="#">Own analysis</a></li>
            <li><a href="#">Activity Logs</a></li>
          </ul> --}}

          <ul class="quick-links ml-auto">
            <li>
              <form action="{{ url('/load') }}" method="GET">
                @csrf
                <button type="submit" class="btn btn-primary btn-sm">Refresh Location</button>
              </form>
            </li>
            <li>
              <a href="{{ url('/crimes') }}">
                <button class="btn btn-primary btn-sm">Report Crime</button>
              </a>
            </li>
          </ul>
        </div>
      </div>
      {{-- @include('dashboards.stats') --}}
    </div>
    <div class="col-md-12">
      <div class="page-header-toolbar">

        <div class="filter-wrapper">
          <div class="dropdown toolbar-item">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownsorting" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sort Since</button>
            <div class="dropdown-menu" aria-labelledby="dropdownsorting">
              <a class="dropdown-item" href="#">Today</a>
              <a class="dropdown-item" href="#">This Week</a>
              <a class="dropdown-item" href="#">This Month</a>
              <a class="dropdown-item" href="#">This Year</a>
            </div>
          </div>
          {{-- <a href="#" class="advanced-link toolbar-item">Advanced Options</a> --}}
        </div>
        <div class="sort-wrapper">
          &nbsp;
          &nbsp;
          <a href="{{ url('/crimes') }}" type="button" class="btn btn-primary toolbar-item">
            New
          </a>
          <div class="dropdown ml-lg-auto ml-3 toolbar-item">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownexport" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Export</button>
            <div class="dropdown-menu" aria-labelledby="dropdownexport">
              <a class="dropdown-item" href="#">Export as PDF</a>
              <a class="dropdown-item" href="#">Export as DOCX</a>
              <a class="dropdown-item" href="#">Export as CDR</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('components.stats', ['crimes'=>$crime, 'locations'=>$locations, 'cats'=>$cats])
  @include('components.activities', ['crimes'=>$crime, 'locations'=>$locations, 'cats'=>$cats])
  {{-- @include('components.reports') --}}


@endsection
