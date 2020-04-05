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
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Jumlah Kebutuhan',
            data: [49, 71, 106, 129, 144, 176, 135, 148, 216, 194, 95, 54]

        }]
    });
</script>
</section>
@endsection