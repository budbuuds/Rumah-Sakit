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
            series: [
                
            {
                name: 'PDP',
                data: [0, 15, 20, 13, 20]
            }, 
            // {
            //     name: 'Positif',
            //     data: [0, 17]
            // }, {
            //     name: 'Meninggal',
            //     data: [0, 1]
            // }
            ],
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
            },
            credits: {
                enabled: true
            }
        });
    </script>
</section>

@endsection