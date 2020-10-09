<div class="row">
    <div class="col-md-8">
      <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body pb-0">
              <div class="d-flex justify-content-between">
                <h4 class="card-title mb-0">Crimes Registered</h4>
                <p class="font-weight-semibold mb-0">
                    <a href="{{ url('/crimes') }}" class="btn btn-xs btn-primary">Add New</a>
                </p>
              </div>
              <h3 class="font-weight-medium mb-4">{{ '0' }}</h3>
            </div>
            {{-- <canvas class="mt-n4" height="90" id="total-revenue"></canva> --}}
          </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body pb-0">
              <div class="d-flex justify-content-between">
                <h4 class="card-title mb-0">Crime Categories</h4>
                <p class="font-weight-semibold mb-0">
                    <a href="{{ url('/categories') }}" class="btn btn-xs btn-primary">Add New</a>
                </p>
              </div>
              <h3 class="font-weight-medium">{{ '0' }}</h3>
            </div>
            {{-- <canvas class="mt-n3" height="90" id="total-transaction"></canva> --}}
          </div>
        </div>
        <div class="col-md-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title mb-0">Crime Stat</h4>
              <div class="d-flex align-items-center justify-content-between w-100">
                <p class="mb-0">Crime Statistics and how occurances</p>
                <div class="dropdown">
                  <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dateSorter" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">This Month</button>
                  <div class="dropdown-menu" aria-labelledby="dateSorter">
                    <div class="dropdown-item" id="market-overview_1">Daily</div>
                    <div class="dropdown-item" id="market-overview_2">Weekly</div>
                    <div class="dropdown-item" id="market-overview_3">Monthly</div>
                  </div>
                </div>
              </div>
              <div class="d-flex align-items-end">
                <h3 class="mb-0 font-weight-semibold">0</h3>
                <p class="mb-0 text-success font-weight-semibold mb-1">(^1.37%)</p>
              </div>
              <canvas class="mt-4" height="100" id="market-overview-chart"></canvas>
            </div>
          </div>
        </div>
        
       
      </div>
    </div>
    <div class="col-md-4">
      <div class="row">
        <div class="col-md-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title mb-4">New Locations</h4>
              <div id="dashboard-vmap" class="vector-map"></div>
              <div class="wrapper">

                <div class="d-flex w-100 pt-2 mt-4">
                  <p class="mb-0 font-weight-semibold">California</p>
                  <div class="wrapper ml-auto d-flex align-items-center">
                    <p class="font-weight-semibold mb-0">26,437</p>
                    <p class="ml-1 mb-0">26%</p>
                  </div>
                </div>
                
                
                <a class="d-block mt-5" href="#">Show all</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title mb-0">New Criminals</h4>
              <div class="d-flex mt-3 py-2 border-bottom">
                <img class="img-sm rounded-circle" src="assets/images/faces/face3.jpg" alt="profile image">
                <div class="wrapper ml-2">
                  <p class="mb-n1 font-weight-semibold">Ray Douglas</p>
                  <small>crime</small>
                </div>
                <small class="text-muted ml-auto">1 Hours ago</small>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>