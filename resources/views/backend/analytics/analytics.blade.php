@extends('layout.base')

@section('content')

 <div class="container" style="background-color: white!important; margin-top: 30px">
     <div class="row">
         <div class="col-md-6">
             <div class="tile">

                 <div id="chart" style="height: 370px; width: 100%;"></div>
             </div>
         </div>
         <div class="col-md-6">
             <div id="chart2" style="height: 370px; width: 100%;"></div>
         </div>
     </div>
 </div>


@endsection


@section('javascript')
<script>
    //Credit /Income
    var options = {
        series: [{
            name: "Income/Credits",
            data: [
                1000,2000,1300,4000,2000,3400
            ]
        }],
        chart: {
            height: 350,
            type: 'line',
            zoom: {
                enabled: false
            }
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'straight'
        },

        title: {
            text: 'Income / Credits For The Last 6 Months in Naira',
            align: 'left'
        },
        grid: {
            row: {
                colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                opacity: 0.5
            },
        },
        xaxis: {
            categories: [
                'Jan','Feb','Mar','Apr','May','Jun'
            ],
        }
    };

    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();


    // Transactions

    var options2 = {
        series: [{
            data: [400, 430, 1448, 470, 1100, 1200],
            name: "Transactions",
        }],
        chart: {
            type: 'bar',
            height: 350
        },
        plotOptions: {
            bar: {
                horizontal: false,
            }
        },
        title: {
            text: 'Transactions In The Last 6 Months',
            align: 'right'
        },

        dataLabels: {
            enabled: false
        },
        xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June',

            ],
        }
    };

    var chart2 = new ApexCharts(document.querySelector("#chart2"), options2);
    chart2.render();



</script>

@endsection