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
                text: '{{$data_daerah -> kota}}'
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
                data: [{{$data_daerah -> r_masker_n95}},{{$data_daerah -> r_masker_surgical}},{{$data_daerah -> r_sarung_tangan}},{{$data_daerah -> r_coverall_jumpsuit}},{{$data_daerah -> r_faceshield}},{{$data_daerah -> r_kacamata_goggles}},{{$data_daerah -> r_boot_and_shoe_cover}},{{$data_daerah -> r_handsanitizer}},{{$data_daerah -> r_desinfektan}},{{$data_daerah -> r_multivitamin}},{{$data_daerah -> r_kantong_jenazah}},{{$data_daerah -> r_Skorlet}}]
              
            }
           
            ,
            
             {
                name: 'Donasi',
                data: [{{$data_daerah -> d_masker_n95}},{{$data_daerah -> d_masker_surgical}},{{$data_daerah -> d_sarung_tangan}},{{$data_daerah -> d_coverall_jumpsuit}},{{$data_daerah -> d_faceshield}},{{$data_daerah -> d_kacamata_goggles}},{{$data_daerah -> d_boot_and_shoe_cover}},{{$data_daerah -> d_handsanitizer}},{{$data_daerah -> d_desinfektan}},{{$data_daerah -> d_multivitamin}},{{$data_daerah -> d_kantong_jenazah}},{{$data_daerah -> d_Skorlet}}]

            }
               
            ]
        });
    </script>
</section>
@endsection