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
                text: 'Jumlah Kebutuhan Daerah'
            },
            subtitle: {
                text: 'Padang'
            },
            xAxis: {
                categories: [
                    'Masker N95',
                    'Masker Surgical',
                    'Sarung Tangan',
                    'Hazmat',
                    'Faceshield',
                    'Kacamata Goggles',
                    'Boot and Shoe Cover',
                    'Handsanitizer',
                    'Desinfektan',
                    'Multivitamin',
                    'Kantong Jenazah',
                    'Skorlet'
                ],
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Jumlah'
                }
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
                
                name: 'Kebutuhan',
                data: [{{$count1}},{{$count2}},{{$count3}},{{$count4}},{{$count5}},{{$count6}},{{$count7}},{{$count8}},{{$count9}},{{$count10}},{{$count11}},{{$count12}}]
              
            }
           
            ,
            
             {
                name: 'Donasi',
                data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]

            }]
        });
    </script>
</section>
@endsection