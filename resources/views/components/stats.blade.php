@php
  $stats = get_stats();
  $num = 1
@endphp

<div class="row">
    <div class="col-md-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <div class="row">
            @if (count($stats) > 0)
               {{-- @while ($num < ) --}}
                  @foreach ($stats as $stat)
                  <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                      <div class="wrapper">
                      
                        <h3 class="mb-0 font-weight-semibold"> {{ $stat['count'] }}% <small> Chances</small></h3>
                        <h5 class="mb-0 font-weight-medium text-primary">{{ $stat['category'] }}</h5>
                        <p class="mb-0 text-muted">{{ $stat['count'] }} Cases</p>
                      </div>
                      <div class="wrapper my-auto ml-auto ml-lg-4">
                        <canvas height="50" width="100" id="stats-line-graph-{{ $num }}"></canvas>
                      </div>
                    </div>
                  </div>
                  @php
                      $num++;
                  @endphp
                  @endforeach
                {{-- @endwhile --}}
            @endif
            

          </div>
        </div>
      </div>
    </div>
  </div>