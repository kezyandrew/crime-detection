@php
    use App\Chart;
    use Illuminate\Support\Facades\DB;

    $crimes = DB::table('crimes')
            ->select('catergory', DB::raw('count(*) as total'))
            ->groupBy('catergory')
            ->pluck('total', 'catergory')->all();

        for ($i=0; $i <= count($crimes) ; $i++) {
            $colours[] = '#'.substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 6);
        }

        $chart = new Chart;
            $chart->labels = (array_keys($crimes));
            $chart->dataset = (array_values($crimes));
            $chart->colours = $colours;
@endphp


<div class="col-md-8 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title mb-0">Crime Starts</h4>
        <div class="d-flex flex-column flex-lg-row">
          <p>Crime Performance according to location</p>
        </div>
        <div class="d-flex flex-column flex-lg-row">
          <div class="data-wrapper d-flex mt-2 mt-lg-0">
            <div class="wrapper pr-5">
              <h5 class="mb-0">Total Crimes</h5>
              <div class="d-flex align-items-center">
                <h4 class="font-weight-semibold mb-0">{{ total_crimes() }}</h4>
                <small class="ml-2 text-gray d-none d-lg-block"><b>Crimes</b></small>
              </div>
            </div>
            <div class="wrapper">
              <h5 class="mb-0">Total Locations</h5>
              <div class="d-flex align-items-center">
                <h4 class="font-weight-semibold mb-0">{{ total_locations() }}</h4>
                <small class="ml-2 text-gray d-none d-lg-block"><b>Locations</b></small>
              </div>
            </div>
          </div>
          <div class="ml-lg-auto" id="sales-statistics-legend"></div>
        </div>
        <canvas id="userChart" class="rounded shadow"></canvas>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  <!-- CHARTS -->
  <script>
      var ctx = document.getElementById('userChart').getContext('2d');
      var chart = new Chart(ctx, {
          // The type of chart we want to create
        //   type: 'pie',
        //   type: 'line',
          type: 'bar',
  // The data for our dataset
          data: {
              labels:  {!!json_encode($chart->labels)!!} ,
              datasets: [
                  {
                      label: 'Count of crimes',
                      backgroundColor: {!! json_encode($chart->colours)!!} ,
                      data:  {!! json_encode($chart->dataset)!!} ,
                  },
              ]
          },
  // Configuration options go here
          options: {
              scales: {
                  yAxes: [{
                      ticks: {
                          beginAtZero: true,
                          callback: function(value) {if (value % 1 === 0) {return value;}}
                      },
                      scaleLabel: {
                          display: false
                      }
                  }]
              },
              legend: {
                  labels: {
                      // This more specific font property overrides the global property
                      fontColor: '#122C4B',
                      fontFamily: "'Muli', sans-serif",
                      padding: 25,
                      boxWidth: 25,
                      fontSize: 14,
                  }
              },
              layout: {
                  padding: {
                      left: 10,
                      right: 10,
                      top: 0,
                      bottom: 10
                  }
              }
          }
      });
  </script>
