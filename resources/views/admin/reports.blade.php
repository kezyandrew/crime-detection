<?php
  use App\Crime;
  $locations = new_locations();
  $crimes = Crime::orderBy('created_at', 'desc')
    ->paginate(10);
    // ->get();

  /**
   * We should also have a criminals table fetch dat from here.
   * */
?>

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
              <h3 class="font-weight-medium mb-4">{{ count($crimes) }}</h3>
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
              <h3 class="font-weight-medium">{{ count($categories) }}</h3>
            </div>
            {{-- <canvas class="mt-n3" height="90" id="total-transaction"></canva> --}}
          </div>
        </div>
        <div class="col-md-12 grid-margin">
          <div class="card">
            <div class="card-body">
                    <h4 class="card-title">Current Crime log</h4>
                    {{-- <p class="card-description"> Current Crime log </p> --}}
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>  </th>
                          <th> Crime </th>
                          <th> Locations </th>
                          <th> rates </th>
                          <th> Dates </th>
                        </tr>
                      </thead>
                      <tbody>
                        @if (count($crimes) > 0)
                            @foreach ($crimes as $crime)
                              <tr>
                                <td class="py-1">
                                  <img src="{{ asset('assets/images/robber.png') }}" alt="image" /> </td>
                                <td> {{ $crime->crime_name }} </td>
                                <td> {{ $crime->location }} </td>
                                <td>
                                  <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </td>
                                
                                <td> {{ $crime->created_at }} </td>
                              </tr>
                            @endforeach
                            {{ $crimes->links() }}
                        @endif
                      </tbody>
                    </table>
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
                @if(count($locations) > 0)
                  @foreach($locations as $locs)

                    <div class="d-flex w-100 pt-2 mt-4">
                      <p class="mb-0 font-weight-semibold">{{ $locs->location }}</p>
                      <div class="wrapper ml-auto d-flex align-items-center">
                        <p class="font-weight-semibold mb-0">{{ $locs->country }}</p>
                        <p class="ml-1 mb-0"> {{ $locs->ip }} </p>
                      </div>
                    </div>
                    @endforeach
                  {{ $locations->links() }}
                  @else
                    No Locations Registered yet.
                @endif
              </div>
            </div>
          </div>
        </div>
        {{-- <div class="col-md-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title mb-0">New Criminals</h4>
              <div class="d-flex mt-3 py-2 border-bottom">
                <img class="img-sm rounded-circle" src="assets/images/robber.png" alt="profile image">
                <div class="wrapper ml-2">
                  <p class="mb-n1 font-weight-semibold">Ray Douglas</p>
                  <small>crime</small>
                </div>
                <small class="text-muted ml-auto">1 Hours ago</small>
              </div>
              
            </div>
          </div>
        </div> --}}
      </div>
    </div>
  </div>