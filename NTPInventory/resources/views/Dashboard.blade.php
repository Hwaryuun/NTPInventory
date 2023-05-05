@extends('Layout.CustomerApp')

@section('contentFE')
@section('TopTTL','Dashboard')

    <section class="home" id="home"> </section>

        <!--container--->
        <section class="container">
            <div class="text">
                <h2>SUMMARY REPORT</h2>
            </div>
            
            <div class="row">
                    <div class="column" id="shart">    
                        <h5 class='namechart'>POSITION </h5>
                        <canvas id="myChart" ></canvas>          
                    </div>
                    
                    <div class="column" id="shart">
                        <h5 class='namechart' >GENDER </h5>
                        <canvas id="myCharts" ></canvas>                      
                    </div>    
            </div>

         
        </section>


        <!--destination section--->
    <section class="destination" id="destination">
        <div class="core">     
            <h5 class='namechart' >STATUS REPORT </h5>
                <div>
                    <canvas id="myChartb" ></canvas>           
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
                label: 'My First Dataset',
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



<script>
        const ctx = document.getElementById('myChartb');
      
        new Chart(ctx, {
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
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)'
                    ],
                    borderColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)'
                ],
              borderWidth: 1
            }]
          },
          
          options: {
            scales: {
              y: {
                beginAtZero: true
              }
            },
      
       
          }
        });
      </script>

@endsection  










