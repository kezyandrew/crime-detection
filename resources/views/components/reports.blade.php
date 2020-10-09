<div class="row">
    <div class="col-md-8">
      <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body pb-0">
              <div class="d-flex justify-content-between">
                <h4 class="card-title mb-0">Total Revenue</h4>
                <p class="font-weight-semibold mb-0">+1.37%</p>
              </div>
              <h3 class="font-weight-medium mb-4">184.42K</h3>
            </div>
            <canvas class="mt-n4" height="90" id="total-revenue"></canva>
          </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body pb-0">
              <div class="d-flex justify-content-between">
                <h4 class="card-title mb-0">Transaction</h4>
                <p class="font-weight-semibold mb-0">-2.87%</p>
              </div>
              <h3 class="font-weight-medium">147.7K</h3>
            </div>
            <canvas class="mt-n3" height="90" id="total-transaction"></canva>
          </div>
        </div>
        <div class="col-md-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title mb-0">Market Overview</h4>
              <div class="d-flex align-items-center justify-content-between w-100">
                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
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
                <h3 class="mb-0 font-weight-semibold">$36,2531.00</h3>
                <p class="mb-0 font-weight-medium mr-2 ml-2 mb-1">USD</p>
                <p class="mb-0 text-success font-weight-semibold mb-1">(+1.37%)</p>
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
              <h4 class="card-title mb-4">World sellings</h4>
              <div id="dashboard-vmap" class="vector-map"></div>
              <div class="wrapper">
                <div class="d-flex w-100 pt-2 mt-4">
                  <p class="mb-0 font-weight-semibold">California</p>
                  <div class="wrapper ml-auto d-flex align-items-center">
                    <p class="font-weight-semibold mb-0">26,437</p>
                    <p class="ml-1 mb-0">26%</p>
                  </div>
                </div>
                <div class="d-flex w-100 pt-2">
                  <p class="mb-0 font-weight-semibold">Washington</p>
                  <div class="wrapper ml-auto d-flex align-items-center">
                    <p class="font-weight-semibold mb-0">3252</p>
                    <p class="ml-1 mb-0">64%</p>
                  </div>
                </div>
                <div class="d-flex w-100 pt-2">
                  <p class="mb-0 font-weight-semibold">Michigan</p>
                  <div class="wrapper ml-auto d-flex align-items-center">
                    <p class="font-weight-semibold mb-0">4,987</p>
                    <p class="ml-1 mb-0">30%</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title mb-0">New Criminals </h4>
              <div class="d-flex mt-3 py-2 border-bottom">
                <img class="img-sm rounded-circle" src="assets/images/faces/face3.jpg" alt="profile image">
                <div class="wrapper ml-2">
                  <p class="mb-n1 font-weight-semibold">Ray Douglas</p>
                  <small>crime</small>
                </div>
                <small class="text-muted ml-auto">1 Hours ago</small>
              </div>
              <div class="d-flex py-2 border-bottom">
                <span class="img-sm rounded-circle bg-warning text-white text-avatar">OH</span>
                <div class="wrapper ml-2">
                  <p class="mb-n1 font-weight-semibold">Ora Hill</p>
                  <small>162543</small>
                </div>
                <small class="text-muted ml-auto">4 Hours ago</small>
              </div>
              <div class="d-flex py-2 border-bottom">
                <img class="img-sm rounded-circle" src="assets/images/faces/face4.jpg" alt="profile image">
                <div class="wrapper ml-2">
                  <p class="mb-n1 font-weight-semibold">Brian Dean</p>
                  <small>162543</small>
                </div>
                <small class="text-muted ml-auto">4 Hours ago</small>
              </div>
              <div class="d-flex pt-2">
                <span class="img-sm rounded-circle bg-success text-white text-avatar">OB</span>
                <div class="wrapper ml-2">
                  <p class="mb-n1 font-weight-semibold">Olive Bridges</p>
                  <small>162543</small>
                </div>
                <small class="text-muted ml-auto">7 Hours ago</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>