@extends('layouts.guesttemplate')


@section('title','Aksitageh')

@section('container')
<section id="intro">
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <div class="container">
        <div id="pasien">

        </div>
        <div class="container">
            <div class="row">
                <div class="col"></div>
                <div class="col"></div>
                <div class="col"></div>
                <div class="col"><img src="{{ url('backend/asset/img/pict/corona.png') }}" width="200px"></div>
            </div>
        </div>
    </div>
    <script>
        Highcharts.chart('pasien', {
            chart: {
                type: 'spline'
            },
            title: {
                text: 'Data Pasien COVID-19'
            },
            subtitle: {
                text: 'Provinsi Sumatera Barat'
            },
            yAxis: {
                title: {
                    text: 'Jumlah Pasien'
                }
            },
            xAxis: {
                categories: [' ',' ']
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },
            plotOptions: {
                series: {
                    label: {
                        connectorAllowed: false
                    },
                }
            },
            series: [{
                name: 'ODP',
                data: [0, 52503]
            }, {
                name: 'PDP',
                data: [0, 24064]
            }, {
                name: 'Positif',
                data: [0, 17722]
            }, {
                name: 'Meninggal',
                data: [0, 0]
            }],
            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }
        });
    </script>
</section>

@endsection