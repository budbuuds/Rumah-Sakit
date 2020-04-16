@extends('layouts.guesttemplate')


@section('title','Aksitageh')

@section('container')
<section id="intro">
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <div class="container">
        <div class="jumbotron">
            <div id="daerah">

            </div>
        </div>
    </div>
    <script>
        Highcharts.chart('daerah', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Jumlah Data Pasien'
            },
            subtitle: {
                text: 'Sumatera Barat'
            },
            xAxis: {
                categories: [
                    @foreach($data_pasien as $pasien)
                    '{{$pasien -> kelompok}}',
                    @endforeach
                ],
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Jumlah'
                }
            },
            credits: {
                enabled: false
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [
                
                {
                
                name: 'Jumlah',
                data: 
                [
                    @foreach($data_pasien as $pasien)
                    {{$pasien -> jumlah}},
                    @endforeach
                    
                ]
              
            }
           ]
        });
    </script>
</section>
@endsection