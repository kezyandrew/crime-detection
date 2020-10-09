<div class="row">
    <div class="col-md-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-3 col-md-6">
              <div class="d-flex">
                <div class="wrapper">
                 
                  <h3 class="mb-0 font-weight-semibold"> {{ count($crimes) }}</h3>
                  <h5 class="mb-0 font-weight-medium text-primary">Crimes</h5>
                  <p class="mb-0 text-muted">+14(Today)</p>
                </div>
                <div class="wrapper my-auto ml-auto ml-lg-4">
                  <canvas height="50" width="100" id="stats-line-graph-1"></canvas>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
              <div class="d-flex">
                <div class="wrapper">
                  <h3 class="mb-0 font-weight-semibold">{{ count($cats) }}</h3>
                  <h5 class="mb-0 font-weight-medium text-primary">Categories</h5>
                  {{-- <p class="mb-0 text-muted">+138.97(+0.54%)</p> --}}
                </div>
                <div class="wrapper my-auto ml-auto ml-lg-4">
                  <canvas height="50" width="100" id="stats-line-graph-2"></canvas>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
              <div class="d-flex">
                <div class="wrapper">
                  <h3 class="mb-0 font-weight-semibold">{{ count($locations) }}</h3>
                  <h5 class="mb-0 font-weight-medium text-primary">{{  }}</h5>
                  <p class="mb-0 text-muted">visited</p>
                </div>
                <div class="wrapper my-auto ml-auto ml-lg-4">
                  <canvas height="50" width="100" id="stats-line-graph-3"></canvas>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
              <div class="d-flex">
                <div class="wrapper">
                  <h3 class="mb-0 font-weight-semibold">{{ 0 }}</h3>
                  <h5 class="mb-0 font-weight-medium text-primary">Black Spots</h5>
                  <p class="mb-0 text-muted">+3 (Today)</p>
                </div>
                <div class="wrapper my-auto ml-auto ml-lg-4">
                  <canvas height="50" width="100" id="stats-line-graph-4"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>