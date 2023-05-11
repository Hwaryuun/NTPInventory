@extends('Layout.CustomerApp')

@section('contentFE')
@section('TopTTL','Dashboard')

    <section class="home" id="home"> </section>

        <!--container--->
        <section class="container">
            <div class="text">
                <h2>SUMMARY REPORT</h2>
            </div>
            
            <!-- FOR CARDS -->

            <div class="card-row">
              <div class="card-column">
                <div class="mainCard">
                  <div class="content-column">
                    <p>Total Applicants</p>
                    <h1>0</h1>
                  </div>
                  <div class="card-icon">
                    <i class="fa-solid fa-users"></i>
                  </div>
                </div>
              </div>

              <div class="card-column">
                <div class="mainCard">
                  <div class="content-column">
                    <p>Total Schools</p>
                    <h1>0</h1>
                  </div>
                  <div class="card-icon">
                    <i class="fa-solid fa-school"></i>
                  </div>
                </div>
              </div>
              
              <div class="card-column">
                <div class="mainCard">
                  <div class="content-column">
                    <p>Total Districts</p>
                    <h1>0</h1>
                  </div>
                  <div class="card-icon">
                    <i class="fa-solid fa-city"></i>
                  </div>
                </div>
              </div>
            </div>
            <!-- END FOR CARDS -->

            <div class="row">
                <div class="column" id="shart">    
                    <h5 class='namechart'>SCHOOLS PER DISTRICT</h5>
                    <canvas id="myChart" ></canvas>          
                </div>
                
                <div class="column" id="shart">
                    <h5 class='namechart' >SCHOOL LEVELS</h5>
                    <canvas id="myCharts" ></canvas>                      
                </div>    
            </div>
        </section>

        <!--destination section--->
        <section class="destination" id="destination">
            <div class="core">
                <h5 class='namechart'>APPLICANT INFORMATION ANALYTICS</h5>
                <div class="row app-row">
                  <div class="column app-column">
                    <canvas id="myChartb"></canvas>
                  </div>
                  <div class="column app-column" id="shart">
                    <canvas id="ToAChart"></canvas>           
                  </div>
                </div>
                <div class="row app-row" style="margin-bottom: -110px">
                  <div class="column app-column">
                    <canvas id="DepartmentChart"></canvas>
                  </div>
                  <div class="column app-column">
                    <canvas id="PositionChart"></canvas>
                  <div>
                </div>
            </div>
        </section>

   
    </section>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
      const ctxss = document.getElementById('myCharts');

      new Chart(ctxss, {
        type: 'doughnut',
        data: {
            labels: [
                'Red',
                'Blue',
                'Yellow'
            ],
            datasets: [{
                label: 'My First Dataset',
                data: [300, 50, 100],
                backgroundColor: [
                'rgb(255, 99, 132)',
                'rgb(54, 162, 235)',
                'rgb(255, 205, 86)'
                ],
                hoverOffset: 4
            }]
        }
      });
    </script>

<script>
      const ctxs = document.getElementById('myChart');

      new Chart(ctxs, {
        type: 'polarArea',
        data: {
            labels: [
                        'Red',
                        'Green',
                        'Yellow',
                        'Grey',
                        'Blue'
                    ],
          datasets: [{
                label: '',
                data: [11, 16, 7, 3, 14],
                backgroundColor: [
                'rgb(255, 99, 132)',
                'rgb(75, 192, 192)',
                'rgb(255, 205, 86)',
                'rgb(201, 203, 207)',
                'rgb(54, 162, 235)'
                ]
            }]
        }
      });
</script>

<!-- APPLICANT ANALYTICS -->

<script>
      const toa = document.getElementById('ToAChart');

      new Chart(toa, {
        type: 'doughnut',
        data: {
            labels: [
                'City Permanent',
                'National Permanent',
                'MOOE',
                'Contractual'
            ],
            datasets: [{
                label: 'My First Dataset',
                data: [300, 50, 100],
                backgroundColor: [
                'rgb(255, 99, 132)',
                'rgb(54, 162, 235)',
                'rgb(255, 205, 86)'
                ],
                hoverOffset: 4
            }]
        },
        options: {
          responsive: true,
          plugins: {
            legend: {
              position: 'top',
            },
            title: {
              display: true,
              text: 'Type of Application'
            }
          }
        },
      });
    </script>


<script>
        const ctx = document.getElementById('myChartb');
      
        new Chart(ctx, {
          type: 'bar',
          data: {
            labels: [
              'Diseased',  'Retired', 'Resigned', 'Transferred', 'AWOL', 'Active', 'Inactive',
            ],
            datasets: [{
              label: 'Full',
              data:  [
               61,10,23,14,51,13,2
              ],
              backgroundColor: [
                'rgba(255, 99, 132, 0.7)',
                'rgba(255, 159, 64, 0.7)',
                'rgba(255, 205, 86, 0.7)',
                'rgba(75, 192, 192, 0.7)',
                'rgba(54, 162, 235, 0.7)',
                'rgba(153, 102, 255, 0.7)',
                'rgba(201, 203, 207, 0.7)',
              ],
              borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)',
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
                'rgb(201, 203, 207)',
              ], 
              borderRadius: 30,
              borderWidth: 1
            }]
          },
          options: {
            responsive: true,
            scales: {
              y: {
                beginAtZero: true
              }
            },
            plugins: {
              title: {
                display: true,
                text: 'Applicant Status Chart'
              }
            }
          }
        });



  </script>

  <script>
    
    const statusBar = document.getElementById('DepartmentChart');

    new Chart(statusBar, {
      type: 'bar',
      data: {
        labels: [
           'MOOE',  'CONTRACT',   'PERMA',   'SSAAS',  
        ],
        datasets: [{
          label: 'Full',
          data:  [
            14,21,23,32
          ],
          backgroundColor: [
            'rgb(121, 129, 255)',
          ],
          borderColor: [
            'rgb(121, 129, 255)',
          ],
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        indexAxis: 'y',
        elements: {
          bar: {
            borderWidth: 2,
          }
        },
        plugins: {
          title: {
            display: true,
            text: 'Applicant Department Chart'
          }
        }
      },
    });

  </script>

  <script>
    
    const positionBar = document.getElementById('PositionChart');

    new Chart(positionBar, {
      type: 'bar',
      data: {
      labels: [
          'MOOE',  'CONTRACT',   'PERMA',   'SSAAS',
      ],
      datasets: [{
        label: 'Full',
        data:  [
                  14,21,23,32
              ],
              backgroundColor: [
                'rgb(121, 129, 255)',
              ],
              borderColor: [
                'rgb(121, 129, 255)',
              ],
              borderWidth: 1
            }]
      },
      options: {
        responsive: true,
        indexAxis: 'y',
        elements: {
          bar: {
            borderWidth: 2,
          }
        },
        plugins: {
          title: {
            display: true,
            text: 'Applicant Position Chart'
          }
        }
      },
    });

  </script>

@endsection  










