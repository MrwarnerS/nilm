@extends('layouts/app')
@section('header')
Datos Ultimos 30 días
@endsection
@section('scripts')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
@endsection
@section('contenido')
<style>
    .highcharts-figure,
    .highcharts-data-table table {
        min-width: 310px;
        max-width: 800px;
        margin: 1em auto;
    }

    #container {
        height: 400px;
    }

    .highcharts-data-table table {
        font-family: Verdana, sans-serif;
        border-collapse: collapse;
        border: 1px solid #EBEBEB;
        margin: 10px auto;
        text-align: center;
        width: 100%;
        max-width: 500px;
    }

    .highcharts-data-table caption {
        padding: 1em 0;
        font-size: 1.2em;
        color: #555;
    }

    .highcharts-data-table th {
        font-weight: 600;
        padding: 0.5em;
    }

    .highcharts-data-table td,
    .highcharts-data-table th,
    .highcharts-data-table caption {
        padding: 0.5em;
    }

    .highcharts-data-table thead tr,
    .highcharts-data-table tr:nth-child(even) {
        background: #f8f8f8;
    }

    .highcharts-data-table tr:hover {
        background: #f1f7ff;
    }

</style>

<div class=" py-4 px-8 bg-white shadow-lg rounded-lg my-20 cardInfo home-section">
    <div>
      <h2 class="text-gray-800 text-3xl font-semibold text-center">Consumo mes actual</h2>
      <figure class="highcharts-figure" class="mt-2">
        <div id="container"></div>
        <p class="highcharts-description">
            {{--  Chart showing stacked columns with grouping, allowing specific series to
          be stacked on the same column. Stacking is often used to visualize
          data that accumulates to a sum. --}}
        </p>
    </figure>
    </div>
  </div>
{{-- <x-components.card-info :nombre="$nombre" :contenido="$contenido" /> --}}
<script>
    Highcharts.chart('container', {

        chart: {
            type: 'column'
        },

        xAxis: {
            /* categories: ['Apples', 'Oranges', 'Pears', 'Grapes', 'Bananas'] */
        },

        
        yAxis: {
            allowDecimals: false,
            min: 0,
            title: {
                text: 'Number of fruits'
            }
        },

        tooltip: {
            formatter: function () {
                return '<b>' + this.x + '</b><br/>' +
                    this.series.name + ': ' + this.y + '<br/>' +
                    'Total: ' + this.point.stackTotal;
            }
        },

        plotOptions: {
            column: {
                stacking: 'normal'
            }
        },

        series: [{
            name: 'Nevera',
            data: [5, 3, 4, 7, 2],

        }, {
            name: 'Microondas',
            data: [3, 4, 4, 2, 5],

        }, {
            name: 'TV',
            data: [2, 5, 6, 2, 1],

        }, {
            name: 'Otros',
            data: [3, 0, 4, 4, 3],
        }]
    });
</script>
@endsection
