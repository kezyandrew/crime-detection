@extends('layouts.app')
@section('content')
    <div class="row">
    <div class="col-md-6 d-flex align-items-stretch grid-margin">
      <div class="row flex-grow">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Create a Location</h4>
              {{-- <p class="card-description"> Create a Crime Category </p> --}}
              <form class="forms-sample" action="{{ url('/locations') }}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Location</label>
                  <input type="text" required name="name" class="form-control" placeholder="ex: Kampala">
                </div>

                <button type="submit" class="btn btn-success mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
            <h4 class="card-title">Recently Created.</h4>
            @if(count($locations) > 0)
              @foreach($locations as $loc)
                <div class="d-flex mt-3 py-2 border-bottom">
                  <div class="wrapper ml-2">
                    <p class="mb-n1 font-weight-semibold">
                      {{ $loc->name }}
                    </p>
                  </div>
                </div>
              @endforeach
            @endif
        </div>
      </div>
    </div>

  </div>
@endsection
