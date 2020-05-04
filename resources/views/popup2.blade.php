@extends('layouts.guesttemplate')


@section('title','Aksitageh')

@section('container')
<section id="intro">
<script src="https://code.highcharts.com/highcharts.js"></script>
<div class="panel">
    <div id="chart_kebutuhan">

    </div>
</div>
<script>
    Highcharts.chart('chart_kebutuhan', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Kebutuhan APD'
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
        credits: {
                enabled: false
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

        },
        {
            name: 'Donasi',
            data: [{{$countd1}},{{$countd2}},{{$countd3}},{{$countd4}},{{$countd5}},{{$countd6}},{{$countd7}},{{$countd8}},{{$countd9}},{{$countd10}},{{$countd11}},{{$countd12}}]

        }
        ]
    });
</script>
</section>
@endsection