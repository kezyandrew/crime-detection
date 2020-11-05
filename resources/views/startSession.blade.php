<style>
    .middle {
        margin-left: auto;
        margin-right: auto;
        text-align: center;
    }

    .big {
        padding: 500px;
        color: gray;
        display: none;
    }

</style>

@extends('layouts.unauthed')
@section('content')

<div class="col-md-6 middle">
    <div class="card-body">
        <h4 class="card-title">Start Your session</h4>
        
      <p class="card-description">

        Click button below to start your session. <br>
        <b>Note: </b> <code>
            Accept App to use your location if requested, for purposes of returning more accurate location details. 
        </code>
      </p>


      <div class="template-demo">
        <form action="{{ url('/load') }}" method="get">
            @csrf
            <button type="submit" class="btn btn-icons btn-lg btn-rounded btn-danger">
                <i class="mdi mdi-home-outline"></i>
              </button>
        </form>
        
        
      </div>
    </div>
  </div>

@endsection