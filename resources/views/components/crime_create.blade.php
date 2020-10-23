<div class="row">
    <div class="col-md-6 d-flex align-items-stretch grid-margin">
      <div class="row flex-grow">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Report Crime</h4>
              <p class="card-description"> review Crime Categories properly to help provide the most accurate information </p>
              <form class="forms-sample" action="{{ url('/crimes') }}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Crime</label>
                  <input type="text" name="crime" required class="form-control" placeholder="ex: robery">
                </div>

                <div class="form-group">
                  {{-- <label for="exampleInputEmail1">Crime</label> --}}
                  <input type="hidden" name="location" value="Current Location" required class="form-control" placeholder="ex: robery">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Select Category</label>
                  <select name="cat" required class="form-control">
                      <option value="" disabled selected>Select Crime Category</option>
                      @if(count($cats) > 0)
                        @foreach($cats as $cat)
                          <option value="{{ $cat->id }}">{{ $cat->cat_name }}</option>
                        @endforeach
                      @endif
                  </select>
                </div>
                <div class="form-group">
                    <label for="exampleTextarea1">Describe the Crime</label>
                    <textarea name="description" required class="form-control" placeholder="Enter all the details you can find about the incident which may include number of casualties that might have been involved" id="exampleTextarea1" rows="2"></textarea>
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
                {{ $cats->links() }}
              @endif
          </div>
        </div>
      </div>
    
  </div>