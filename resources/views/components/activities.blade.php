<?php
  use App\Locations;
  use App\Category;
  use App\Crime;

  $Locs = Locations::where('created_By', Auth::user()->email)
    ->paginate(4);

  $crimes = Crime::orderBy('id', 'desc')
    ->paginate(5);

  $cats = Category::orderBy('id', 'desc')
    ->paginate(5);
?>
<div class="row">
    <div class="col-md-4 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title mb-0">Recent Crimes</h4>

          @if(count($crimes) > 0)
            @foreach($crimes as $crime)
              <div class="d-flex py-2 border-bottom">
                <div class="wrapper">
                  <small class="text-muted">{{ $crime->created_at }}</small>
                  <p class="font-weight-semibold text-gray mb-0">{{ $crime->crime_name }}</p>
                </div>
                <small class="text-muted ml-auto">View Details</small>
              </div>
            @endforeach
            {{ $crimes->links() }}
            @else
            <p class="font-weight-semibold text-gray mb-0">No Crimes Yets</p>
          @endif
          
          {{-- <a class="d-block mt-5" href="#">Show all</a> --}}
        </div>
      </div>
    </div>
    <div class="col-md-4 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between pb-3">
            <h4 class="card-title mb-0">Movements</h4>
            <p class="mb-0 text-muted">Your Travel history</p>
          </div>
          <ul class="timeline">
            @if(count($Locs) > 0)
              @foreach ($Locs as $location)
                  <li class="timeline-item">
                    <p class="timeline-content"><a href="#">{{ $location->location }}</a> in {{ $location->region }} Region </p>
                    <p class="event-time">Visited {{ $location->created_at }}</p>
                  </li>
              @endforeach
              {{ $Locs->links() }}
              @else
                  No Location found yet
            @endif
            

          </ul>
          {{-- <a class="d-block mt-3" href="#">Show all</a> --}}
        </div>
      </div>
    </div>
    <div class="col-md-4 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title mb-0">New Crime Categories</h4>
          <div class="table-responsive">
            <table class="table table-stretched">
              <thead>
                <tr>
                  <th>Symbol</th>
                  <th>Last Price</th>
                  <th>Change</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <p class="mb-1 text-dark font-weight-medium">NFLX</p><small class="font-weight-medium">Netflix, Inc.</small>
                  </td>
                  <td class="font-weight-medium">$250.00</td>
                  <td class="text-success font-weight-medium">+12.64</td>
                </tr>
                
                
              </tbody>
            </table>
          </div>
          {{-- <a class="d-block mt-3" href="#">Show all</a> --}}
        </div>
      </div>
    </div>
  </div>