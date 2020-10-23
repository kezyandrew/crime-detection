@extends('layouts.app')
@section('content')
    <div class="row">
    <div class="col-md-6 d-flex align-items-stretch grid-margin">
      <div class="row flex-grow">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Crime Categories</h4>
              <p class="card-description"> Create a Crime Category </p>
              <form class="forms-sample" action="{{ url('/categories') }}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Category Name</label>
                  <input type="text" required name="name" class="form-control" placeholder="ex: Assault and Battery.">
                </div>

                <div class="form-group">
                    <label for="exampleTextarea1">Category Description</label>
                    <textarea name="description" required class="form-control" placeholder="Category Details " id="exampleTextarea1" rows="2"></textarea>
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
            @if(count($cats) > 0)
              @foreach($cats as $cat)
                <div class="d-flex mt-3 py-2 border-bottom">
                  <div class="wrapper ml-2">
                    <p class="mb-n1 font-weight-semibold">
                      {{ $cat->cat_name }}
                    </p>
                    <small>
                      {{ $cat->description }}
                    </small>
                  </div>
                </div>
              @endforeach
            @endif
        </div>
      </div>
    </div>
    
  </div>
@endsection