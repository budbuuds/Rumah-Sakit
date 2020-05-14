@extends('layouts.guesttemplate')


@section('title','Aksitageh')

@section('container')
<section id="kebutuhan" class="clearfix">
    <div class="container swiper-container">
        <h1 class="judul">Penyaluran</h1>
        <div class="panel">
            <div id="chart_kebutuhan">

            </div>
        </div>
    </div>
</section>

<main id="main">
    <!--==========================
      perbandingan perwilayah
    ============================-->
    <section id="perwilayah" class="wow fadeIn">
        <div class="container">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel"> 
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="d-flex justify-content-center">
                            <div id="daerah" class="col-lg-10 col-md-10 col-sm-10"></div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="d-flex justify-content-center">
                            <div id="daerah2" class="col-lg-10 col-md-10 col-sm-10"></div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="d-flex justify-content-center">
                            <div id="daerah3" class="col-lg-10 col-md-10 col-sm-10"></div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="d-flex justify-content-center">
                            <div id="daerah4" class="col-lg-10 col-md-10 col-sm-10"></div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="d-flex justify-content-center">
                            <div id="daerah5" class="col-lg-10 col-md-10 col-sm-10"></div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="d-flex justify-content-center">
                            <div id="daerah6" class="col-lg-10 col-md-10 col-sm-10"></div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="d-flex justify-content-center">
                            <div id="daerah7" class="col-lg-10 col-md-10 col-sm-10"></div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="d-flex justify-content-center">
                            <div id="daerah8" class="col-lg-10 col-md-10 col-sm-10"></div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="d-flex justify-content-center">
                            <div id="daerah9" class="col-lg-10 col-md-10 col-sm-10"></div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="d-flex justify-content-center">
                            <div id="daerah10" class="col-lg-10 col-md-10 col-sm-10"></div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="d-flex justify-content-center">
                            <div id="daerah11" class="col-lg-10 col-md-10 col-sm-10"></div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="d-flex justify-content-center">
                            <div id="daerah12" class="col-lg-10 col-md-10 col-sm-10"></div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="d-flex justify-content-center">
                            <div id="daerah13" class="col-lg-10 col-md-10 col-sm-10"></div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="d-flex justify-content-center">
                            <div id="daerah14" class="col-lg-10 col-md-10 col-sm-10"></div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="d-flex justify-content-center">
                            <div id="daerah15" class="col-lg-10 col-md-10 col-sm-10"></div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="d-flex justify-content-center">
                            <div id="daerah16" class="col-lg-10 col-md-10 col-sm-10"></div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="d-flex justify-content-center">
                            <div id="daerah17" class="col-lg-10 col-md-10 col-sm-10"></div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="d-flex justify-content-center">
                            <div id="daerah18" class="col-lg-10 col-md-10 col-sm-10"></div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="d-flex justify-content-center">
                            <div id="daerah19" class="col-lg-10 col-md-10 col-sm-10"></div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>

    <section id="tabelbanding">
        <div class="container">
            <h1>TABEL KEBUTUHAN DAN DONASI</h1>
            <div class="table">
            <table id="datatables-example" class="table table-bordered">
                <thead class="thead">
                    <tr>
                        <th scope="col" rowspan="2">Kota/Kab</th>
                        <th scope="col" rowspan="2">Nama</th>
                        <th scope="col" rowspan="2">Alamat</th>
                        <th scope="col" colspan="3">Masker N95</th>
                        <th scope="col" colspan="3">Masker Surgical</th>
                        <th scope="col" colspan="3">Sarung Tangan (gloves)</th>
                        <th scope="col" colspan="3">Coverall Jumpsuit (hazmat)</th>
                        <th scope="col" colspan="3">Faceshield</th>
                        <th scope="col" colspan="3">Kacamata Goggles</th>
                        <th scope="col" colspan="3">Boot and Shoe Cover</th>
                        <th scope="col" colspan="3">Handsanitizer</th>
                        <th scope="col" colspan="3">Desinfektan</th>
                        <th scope="col" colspan="3">Multivitamin</th>
                        <th scope="col" colspan="3">Kantong Jenazah</th>
                        <th scope="col" colspan="3">Skorlet</th>
                    </tr>
                    <tr>
                        <th>Request</th>
                        <th>Donasi</th>
                        <th>Persentase</th>
                        <th>Request</th>
                        <th>Donasi</th>
                        <th>Persentase</th>
                        <th>Request</th>
                        <th>Donasi</th>
                        <th>Persentase</th>
                        <th>Request</th>
                        <th>Donasi</th>
                        <th>Persentase</th>
                        <th>Request</th>
                        <th>Donasi</th>
                        <th>Persentase</th>
                        <th>Request</th>
                        <th>Donasi</th>
                        <th>Persentase</th>
                        <th>Request</th>
                        <th>Donasi</th>
                        <th>Persentase</th>
                        <th>Request</th>
                        <th>Donasi</th>
                        <th>Persentase</th>
                        <th>Request</th>
                        <th>Donasi</th>
                        <th>Persentase</th>
                        <th>Request</th>
                        <th>Donasi</th>
                        <th>Persentase</th>
                        <th>Request</th>
                        <th>Donasi</th>
                        <th>Persentase</th>
                        <th>Request</th>
                        <th>Donasi</th>
                        <th>Persentase</th>
                    </tr>
                </thead>
                <tbody style="overflow: scroll">
                @foreach($data_rs_2 as $pebanding)
                            <tr>
                            <td> {{$pebanding -> daerah -> kota}}</td>
                            <td> {{$pebanding -> nama_rs}} </td>
                            <td> {{$pebanding -> alamat}} </td>
                            <td> {{$pebanding -> r_masker_n95}} </td>
                            <td> {{$pebanding -> d_masker_n95}} </td>
                            <td> {{$pebanding -> p_masker_n95}} % </td>
                            <td> {{$pebanding -> r_masker_surgical}} </td>
                            <td> {{$pebanding -> d_masker_surgical}} </td>
                            <td> {{$pebanding -> p_masker_surgical}} %</td>
                            <td> {{$pebanding -> r_sarung_tangan}} </td>
                            <td> {{$pebanding -> d_sarung_tangan}} </td>
                            <td> {{$pebanding -> p_sarung_tangan}} %</td>
                            <td> {{$pebanding -> r_coverall_jumpsuit}} </td>
                            <td> {{$pebanding -> d_coverall_jumpsuit}} </td>
                            <td> {{$pebanding -> p_coverall_jumpsuit}} %</td>
                            <td> {{$pebanding -> r_faceshield}} </td>
                            <td> {{$pebanding -> d_faceshield}} </td>
                            <td> {{$pebanding -> p_faceshield}} %</td>
                            <td> {{$pebanding -> r_kacamata_goggles}} </td>
                            <td> {{$pebanding -> d_kacamata_goggles}} </td>
                            <td> {{$pebanding -> p_kacamata_goggles}} %</td>
                            <td> {{$pebanding -> r_boot_and_shoe_cover}} </td>
                            <td> {{$pebanding -> d_boot_and_shoe_cover}} </td>
                            <td> {{$pebanding -> p_boot_and_shoe_cover}} %</td>
                            <td> {{$pebanding -> r_handsanitizer}} </td>
                            <td> {{$pebanding -> d_handsanitizer}} </td>
                            <td> {{$pebanding -> p_handsanitizer}} %</td>
                            <td> {{$pebanding -> r_desinfektan}} </td>
                            <td> {{$pebanding -> d_desinfektan}} </td>
                            <td> {{$pebanding -> p_desinfektan}} %</td>
                            <td> {{$pebanding -> r_multivitamin}} </td>
                            <td> {{$pebanding -> d_multivitamin}} </td>
                            <td> {{$pebanding -> p_multivitamin}} %</td>
                            <td> {{$pebanding -> r_kantong_jenazah}} </td>
                            <td> {{$pebanding -> d_kantong_jenazah}} </td>
                            <td> {{$pebanding -> p_kantong_jenazah}} %</td>
                            <td> {{$pebanding -> r_Skorlet}} </td>
                            <td> {{$pebanding -> d_Skorlet}} </td>
                            <td> {{$pebanding -> p_Skorlet}} % </td>                    
                            </tr>
                            @endforeach  
                </tbody>
            </table>
            </div>
        </div>
    </section>

</main>

<style>
    .table-fixed { 
        height: 400px !important;
        overflow-y: scroll;
        overflow-x: scroll;
    }
    .table-fixed thead{
        position: sticky;
        top: 0;
    }
</style>

    <script>
        Highcharts.chart('chart_kebutuhan', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'KEBUTUHAN DAN DONASI  SUMATRA BARAT'
            },
            xAxis: {
                categories: [
                    'Masker N95(pcs)',
                    'Masker Surgical(box)',
                    'Sarung Tangan(pcs)',
                    'Hazmat(pcs)',
                    'Faceshield(pcs)',
                    'Kacamata Goggles(pcs)',
                    'Boot and Shoe Cover(pcs)',
                    'Handsanitizer(L)',
                    'Desinfektan(L)',
                    'Multivitamin(pcs)'
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
                data: [{{$count1}},{{$count2}},{{$count3}},{{$count4}},{{$count5}},{{$count6}},{{$count7}},{{$count8}},{{$count9}},{{$count10}}]
            },
            {
                name: 'Donasi',
                data: [{{$countd1}},{{$countd2}},{{$countd3}},{{$countd4}},{{$countd5}},{{$countd6}},{{$countd7}},{{$countd8}},{{$countd9}},{{$countd10}}]
            }
            ]
        });
    </script>
    <script>
        Highcharts.chart('daerah', {
            chart: {
                type: 'column'
            },
            credits: {
                enabled: false
            },
            title: {
                text: 'Kebutuhan dan Donasi Wilayah'
            },
            subtitle: {
                text: '{{$data_daerah -> kota}}'
            },
            xAxis: {
                categories: [
                    'Masker N95(pcs)',
                    'Masker Surgical(box)',
                    'Sarung Tangan(pcs)',
                    'Hazmat(pcs)',
                    'Faceshield(pcs)',
                    'Kacamata Goggles(pcs)',
                    'Boot and Shoe Cover(pcs)',
                    'Handsanitizer(L)',
                    'Desinfektan(L)',
                    'Multivitamin(pcs)'
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
                data: [{{$data_daerah -> r_masker_n95}},{{$data_daerah -> r_masker_surgical}},{{$data_daerah -> r_sarung_tangan}},{{$data_daerah -> r_coverall_jumpsuit}},{{$data_daerah -> r_faceshield}},{{$data_daerah -> r_kacamata_goggles}},{{$data_daerah -> r_boot_and_shoe_cover}},{{$data_daerah -> r_handsanitizer}},{{$data_daerah -> r_desinfektan}},{{$data_daerah -> r_multivitamin}}]
            
            }
        
            ,
            
            {
                name: 'Donasi',
                data: [{{$data_daerah -> d_masker_n95}},{{$data_daerah -> d_masker_surgical}},{{$data_daerah -> d_sarung_tangan}},{{$data_daerah -> d_coverall_jumpsuit}},{{$data_daerah -> d_faceshield}},{{$data_daerah -> d_kacamata_goggles}},{{$data_daerah -> d_boot_and_shoe_cover}},{{$data_daerah -> d_handsanitizer}},{{$data_daerah -> d_desinfektan}},{{$data_daerah -> d_multivitamin}}]

            }
            
            ]
        });
    </script>
    <script>
        Highcharts.chart('daerah2', {
            chart: {
                type: 'column'
            },
            credits: {
                enabled: false
            },
            title: {
                text: 'Kebutuhan dan Donasi Wilayah'
            },
            subtitle: {
                text: '{{$data_daerah2 -> kota}}'
            },
            xAxis: {
                categories: [
                    'Masker N95(pcs)',
                    'Masker Surgical(box)',
                    'Sarung Tangan(pcs)',
                    'Hazmat(pcs)',
                    'Faceshield(pcs)',
                    'Kacamata Goggles(pcs)',
                    'Boot and Shoe Cover(pcs)',
                    'Handsanitizer(L)',
                    'Desinfektan(L)',
                    'Multivitamin(pcs)'
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
                data: [{{$data_daerah2 -> r_masker_n95}},{{$data_daerah2 -> r_masker_surgical}},{{$data_daerah2 -> r_sarung_tangan}},{{$data_daerah2 -> r_coverall_jumpsuit}},{{$data_daerah2 -> r_faceshield}},{{$data_daerah2 -> r_kacamata_goggles}},{{$data_daerah2 -> r_boot_and_shoe_cover}},{{$data_daerah2 -> r_handsanitizer}},{{$data_daerah2 -> r_desinfektan}},{{$data_daerah2 -> r_multivitamin}}]
            
            }
        
            ,
            
            {
                name: 'Donasi',
                data: [{{$data_daerah2 -> d_masker_n95}},{{$data_daerah2 -> d_masker_surgical}},{{$data_daerah2 -> d_sarung_tangan}},{{$data_daerah2 -> d_coverall_jumpsuit}},{{$data_daerah2 -> d_faceshield}},{{$data_daerah2 -> d_kacamata_goggles}},{{$data_daerah2 -> d_boot_and_shoe_cover}},{{$data_daerah2 -> d_handsanitizer}},{{$data_daerah2 -> d_desinfektan}},{{$data_daerah2 -> d_multivitamin}}]

            }
            
            ]
        });
    </script>
    <script>
        Highcharts.chart('daerah3', {
            chart: {
                type: 'column'
            },
            credits: {
                enabled: false
            },
            title: {
                text: 'Kebutuhan dan Donasi Wilayah'
            },
            subtitle: {
                text: '{{$data_daerah3 -> kota}}'
            },
            xAxis: {
                categories: [
                    'Masker N95(pcs)',
                    'Masker Surgical(box)',
                    'Sarung Tangan(pcs)',
                    'Hazmat(pcs)',
                    'Faceshield(pcs)',
                    'Kacamata Goggles(pcs)',
                    'Boot and Shoe Cover(pcs)',
                    'Handsanitizer(L)',
                    'Desinfektan(L)',
                    'Multivitamin(pcs)'
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
                data: [{{$data_daerah3 -> r_masker_n95}},{{$data_daerah3 -> r_masker_surgical}},{{$data_daerah3 -> r_sarung_tangan}},{{$data_daerah3 -> r_coverall_jumpsuit}},{{$data_daerah3 -> r_faceshield}},{{$data_daerah3 -> r_kacamata_goggles}},{{$data_daerah3 -> r_boot_and_shoe_cover}},{{$data_daerah3 -> r_handsanitizer}},{{$data_daerah3 -> r_desinfektan}},{{$data_daerah3 -> r_multivitamin}}]
            
            }
        
            ,
            
            {
                name: 'Donasi',
                data: [{{$data_daerah3 -> d_masker_n95}},{{$data_daerah3 -> d_masker_surgical}},{{$data_daerah3 -> d_sarung_tangan}},{{$data_daerah3 -> d_coverall_jumpsuit}},{{$data_daerah3 -> d_faceshield}},{{$data_daerah3 -> d_kacamata_goggles}},{{$data_daerah3 -> d_boot_and_shoe_cover}},{{$data_daerah3 -> d_handsanitizer}},{{$data_daerah3 -> d_desinfektan}},{{$data_daerah3 -> d_multivitamin}}]

            }
            
            ]
        });
    </script>
    <script>
        Highcharts.chart('daerah4', {
            chart: {
                type: 'column'
            },
            credits: {
                enabled: false
            },
            title: {
                text: 'Kebutuhan dan Donasi Wilayah'
            },
            subtitle: {
                text: '{{$data_daerah4 -> kota}}'
            },
            xAxis: {
                categories: [
                    'Masker N95(pcs)',
                    'Masker Surgical(box)',
                    'Sarung Tangan(pcs)',
                    'Hazmat(pcs)',
                    'Faceshield(pcs)',
                    'Kacamata Goggles(pcs)',
                    'Boot and Shoe Cover(pcs)',
                    'Handsanitizer(L)',
                    'Desinfektan(L)',
                    'Multivitamin(pcs)'
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
                data: [{{$data_daerah4 -> r_masker_n95}},{{$data_daerah4 -> r_masker_surgical}},{{$data_daerah4 -> r_sarung_tangan}},{{$data_daerah4 -> r_coverall_jumpsuit}},{{$data_daerah4 -> r_faceshield}},{{$data_daerah4 -> r_kacamata_goggles}},{{$data_daerah4 -> r_boot_and_shoe_cover}},{{$data_daerah4 -> r_handsanitizer}},{{$data_daerah4 -> r_desinfektan}},{{$data_daerah4 -> r_multivitamin}}]
            
            }
        
            ,
            
            {
                name: 'Donasi',
                data: [{{$data_daerah4 -> d_masker_n95}},{{$data_daerah4 -> d_masker_surgical}},{{$data_daerah4 -> d_sarung_tangan}},{{$data_daerah4 -> d_coverall_jumpsuit}},{{$data_daerah4 -> d_faceshield}},{{$data_daerah4 -> d_kacamata_goggles}},{{$data_daerah4 -> d_boot_and_shoe_cover}},{{$data_daerah4 -> d_handsanitizer}},{{$data_daerah4 -> d_desinfektan}},{{$data_daerah4 -> d_multivitamin}}]

            }
            
            ]
        });
    </script>
    <script>
        Highcharts.chart('daerah5', {
            chart: {
                type: 'column'
            },
            credits: {
                enabled: false
            },
            title: {
                text: 'Kebutuhan dan Donasi Wilayah'
            },
            subtitle: {
                text: '{{$data_daerah5 -> kota}}'
            },
            xAxis: {
                categories: [
                    'Masker N95(pcs)',
                    'Masker Surgical(box)',
                    'Sarung Tangan(pcs)',
                    'Hazmat(pcs)',
                    'Faceshield(pcs)',
                    'Kacamata Goggles(pcs)',
                    'Boot and Shoe Cover(pcs)',
                    'Handsanitizer(L)',
                    'Desinfektan(L)',
                    'Multivitamin(pcs)'
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
                data: [{{$data_daerah5 -> r_masker_n95}},{{$data_daerah5 -> r_masker_surgical}},{{$data_daerah5 -> r_sarung_tangan}},{{$data_daerah5 -> r_coverall_jumpsuit}},{{$data_daerah5 -> r_faceshield}},{{$data_daerah5 -> r_kacamata_goggles}},{{$data_daerah5 -> r_boot_and_shoe_cover}},{{$data_daerah5 -> r_handsanitizer}},{{$data_daerah5 -> r_desinfektan}},{{$data_daerah5 -> r_multivitamin}}]
            
            }
        
            ,
            
            {
                name: 'Donasi',
                data: [{{$data_daerah5 -> d_masker_n95}},{{$data_daerah5 -> d_masker_surgical}},{{$data_daerah5 -> d_sarung_tangan}},{{$data_daerah5 -> d_coverall_jumpsuit}},{{$data_daerah5 -> d_faceshield}},{{$data_daerah5 -> d_kacamata_goggles}},{{$data_daerah5 -> d_boot_and_shoe_cover}},{{$data_daerah5 -> d_handsanitizer}},{{$data_daerah5 -> d_desinfektan}},{{$data_daerah5 -> d_multivitamin}}]

            }
            
            ]
        });
    </script>
    <script>
        Highcharts.chart('daerah6', {
            chart: {
                type: 'column'
            },
            credits: {
                enabled: false
            },
            title: {
                text: 'Kebutuhan dan Donasi Wilayah'
            },
            subtitle: {
                text: '{{$data_daerah6 -> kota}}'
            },
            xAxis: {
                categories: [
                    'Masker N95(pcs)',
                    'Masker Surgical(box)',
                    'Sarung Tangan(pcs)',
                    'Hazmat(pcs)',
                    'Faceshield(pcs)',
                    'Kacamata Goggles(pcs)',
                    'Boot and Shoe Cover(pcs)',
                    'Handsanitizer(L)',
                    'Desinfektan(L)',
                    'Multivitamin(pcs)'
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
                data: [{{$data_daerah6 -> r_masker_n95}},{{$data_daerah6 -> r_masker_surgical}},{{$data_daerah6 -> r_sarung_tangan}},{{$data_daerah6 -> r_coverall_jumpsuit}},{{$data_daerah6 -> r_faceshield}},{{$data_daerah6 -> r_kacamata_goggles}},{{$data_daerah6 -> r_boot_and_shoe_cover}},{{$data_daerah6 -> r_handsanitizer}},{{$data_daerah6 -> r_desinfektan}},{{$data_daerah6 -> r_multivitamin}}]
            
            }
        
            ,
            
            {
                name: 'Donasi',
                data: [{{$data_daerah6 -> d_masker_n95}},{{$data_daerah6 -> d_masker_surgical}},{{$data_daerah6 -> d_sarung_tangan}},{{$data_daerah6 -> d_coverall_jumpsuit}},{{$data_daerah6 -> d_faceshield}},{{$data_daerah6 -> d_kacamata_goggles}},{{$data_daerah6 -> d_boot_and_shoe_cover}},{{$data_daerah6 -> d_handsanitizer}},{{$data_daerah6 -> d_desinfektan}},{{$data_daerah6 -> d_multivitamin}}]

            }
            
            ]
        });
    </script>
    <script>
        Highcharts.chart('daerah7', {
            chart: {
                type: 'column'
            },
            credits: {
                enabled: false
            },
            title: {
                text: 'Kebutuhan dan Donasi Wilayah'
            },
            subtitle: {
                text: '{{$data_daerah7 -> kota}}'
            },
            xAxis: {
                categories: [
                    'Masker N95(pcs)',
                    'Masker Surgical(box)',
                    'Sarung Tangan(pcs)',
                    'Hazmat(pcs)',
                    'Faceshield(pcs)',
                    'Kacamata Goggles(pcs)',
                    'Boot and Shoe Cover(pcs)',
                    'Handsanitizer(L)',
                    'Desinfektan(L)',
                    'Multivitamin(pcs)'
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
                data: [{{$data_daerah7 -> r_masker_n95}},{{$data_daerah7 -> r_masker_surgical}},{{$data_daerah7 -> r_sarung_tangan}},{{$data_daerah7 -> r_coverall_jumpsuit}},{{$data_daerah7 -> r_faceshield}},{{$data_daerah7 -> r_kacamata_goggles}},{{$data_daerah7 -> r_boot_and_shoe_cover}},{{$data_daerah7 -> r_handsanitizer}},{{$data_daerah7 -> r_desinfektan}},{{$data_daerah7 -> r_multivitamin}}]
            
            }
        
            ,
            
            {
                name: 'Donasi',
                data: [{{$data_daerah7 -> d_masker_n95}},{{$data_daerah7 -> d_masker_surgical}},{{$data_daerah7 -> d_sarung_tangan}},{{$data_daerah7 -> d_coverall_jumpsuit}},{{$data_daerah7 -> d_faceshield}},{{$data_daerah7 -> d_kacamata_goggles}},{{$data_daerah7 -> d_boot_and_shoe_cover}},{{$data_daerah7 -> d_handsanitizer}},{{$data_daerah7 -> d_desinfektan}},{{$data_daerah7 -> d_multivitamin}}]

            }
            
            ]
        });
    </script>
    <script>
        Highcharts.chart('daerah8', {
            chart: {
                type: 'column'
            },
            credits: {
                enabled: false
            },
            title: {
                text: 'Kebutuhan dan Donasi Wilayah'
            },
            subtitle: {
                text: '{{$data_daerah8 -> kota}}'
            },
            xAxis: {
                categories: [
                    'Masker N95(pcs)',
                    'Masker Surgical(box)',
                    'Sarung Tangan(pcs)',
                    'Hazmat(pcs)',
                    'Faceshield(pcs)',
                    'Kacamata Goggles(pcs)',
                    'Boot and Shoe Cover(pcs)',
                    'Handsanitizer(L)',
                    'Desinfektan(L)',
                    'Multivitamin(pcs)'
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
                data: [{{$data_daerah8 -> r_masker_n95}},{{$data_daerah8 -> r_masker_surgical}},{{$data_daerah8 -> r_sarung_tangan}},{{$data_daerah8 -> r_coverall_jumpsuit}},{{$data_daerah8 -> r_faceshield}},{{$data_daerah8 -> r_kacamata_goggles}},{{$data_daerah8 -> r_boot_and_shoe_cover}},{{$data_daerah8 -> r_handsanitizer}},{{$data_daerah8 -> r_desinfektan}},{{$data_daerah8 -> r_multivitamin}}]
            
            }
        
            ,
            
            {
                name: 'Donasi',
                data: [{{$data_daerah8 -> d_masker_n95}},{{$data_daerah8 -> d_masker_surgical}},{{$data_daerah8 -> d_sarung_tangan}},{{$data_daerah8 -> d_coverall_jumpsuit}},{{$data_daerah8 -> d_faceshield}},{{$data_daerah8 -> d_kacamata_goggles}},{{$data_daerah8 -> d_boot_and_shoe_cover}},{{$data_daerah8 -> d_handsanitizer}},{{$data_daerah8 -> d_desinfektan}},{{$data_daerah8 -> d_multivitamin}}]

            }
            
            ]
        });
    </script>
    <script>
        Highcharts.chart('daerah9', {
            chart: {
                type: 'column'
            },
            credits: {
                enabled: false
            },
            title: {
                text: 'Kebutuhan dan Donasi Wilayah'
            },
            subtitle: {
                text: '{{$data_daerah9 -> kota}}'
            },
            xAxis: {
                categories: [
                    'Masker N95(pcs)',
                    'Masker Surgical(box)',
                    'Sarung Tangan(pcs)',
                    'Hazmat(pcs)',
                    'Faceshield(pcs)',
                    'Kacamata Goggles(pcs)',
                    'Boot and Shoe Cover(pcs)',
                    'Handsanitizer(L)',
                    'Desinfektan(L)',
                    'Multivitamin(pcs)'
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
                data: [{{$data_daerah9 -> r_masker_n95}},{{$data_daerah9 -> r_masker_surgical}},{{$data_daerah9 -> r_sarung_tangan}},{{$data_daerah9 -> r_coverall_jumpsuit}},{{$data_daerah9 -> r_faceshield}},{{$data_daerah9 -> r_kacamata_goggles}},{{$data_daerah9 -> r_boot_and_shoe_cover}},{{$data_daerah9 -> r_handsanitizer}},{{$data_daerah9 -> r_desinfektan}},{{$data_daerah9 -> r_multivitamin}}]
            
            }
        
            ,
            
            {
                name: 'Donasi',
                data: [{{$data_daerah9 -> d_masker_n95}},{{$data_daerah9 -> d_masker_surgical}},{{$data_daerah9 -> d_sarung_tangan}},{{$data_daerah9 -> d_coverall_jumpsuit}},{{$data_daerah9 -> d_faceshield}},{{$data_daerah9 -> d_kacamata_goggles}},{{$data_daerah9 -> d_boot_and_shoe_cover}},{{$data_daerah9 -> d_handsanitizer}},{{$data_daerah9 -> d_desinfektan}},{{$data_daerah9 -> d_multivitamin}}]

            }
            
            ]
        });
    </script>
    <script>
        Highcharts.chart('daerah10', {
            chart: {
                type: 'column'
            },
            credits: {
                enabled: false
            },
            title: {
                text: 'Kebutuhan dan Donasi Wilayah'
            },
            subtitle: {
                text: '{{$data_daerah10 -> kota}}'
            },
            xAxis: {
                categories: [
                    'Masker N95(pcs)',
                    'Masker Surgical(box)',
                    'Sarung Tangan(pcs)',
                    'Hazmat(pcs)',
                    'Faceshield(pcs)',
                    'Kacamata Goggles(pcs)',
                    'Boot and Shoe Cover(pcs)',
                    'Handsanitizer(L)',
                    'Desinfektan(L)',
                    'Multivitamin(pcs)'
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
                data: [{{$data_daerah10 -> r_masker_n95}},{{$data_daerah10 -> r_masker_surgical}},{{$data_daerah10 -> r_sarung_tangan}},{{$data_daerah10 -> r_coverall_jumpsuit}},{{$data_daerah10 -> r_faceshield}},{{$data_daerah10 -> r_kacamata_goggles}},{{$data_daerah10 -> r_boot_and_shoe_cover}},{{$data_daerah10 -> r_handsanitizer}},{{$data_daerah10 -> r_desinfektan}},{{$data_daerah10 -> r_multivitamin}}]
            
            }
        
            ,
            
            {
                name: 'Donasi',
                data: [{{$data_daerah10 -> d_masker_n95}},{{$data_daerah10 -> d_masker_surgical}},{{$data_daerah10 -> d_sarung_tangan}},{{$data_daerah10 -> d_coverall_jumpsuit}},{{$data_daerah10 -> d_faceshield}},{{$data_daerah10 -> d_kacamata_goggles}},{{$data_daerah10 -> d_boot_and_shoe_cover}},{{$data_daerah10 -> d_handsanitizer}},{{$data_daerah10 -> d_desinfektan}},{{$data_daerah10 -> d_multivitamin}}]

            }
            
            ]
        });
    </script>
    <script>
        Highcharts.chart('daerah11', {
            chart: {
                type: 'column'
            },
            credits: {
                enabled: false
            },
            title: {
                text: 'Kebutuhan dan Donasi Wilayah'
            },
            subtitle: {
                text: '{{$data_daerah11 -> kota}}'
            },
            xAxis: {
                categories: [
                    'Masker N95(pcs)',
                    'Masker Surgical(box)',
                    'Sarung Tangan(pcs)',
                    'Hazmat(pcs)',
                    'Faceshield(pcs)',
                    'Kacamata Goggles(pcs)',
                    'Boot and Shoe Cover(pcs)',
                    'Handsanitizer(L)',
                    'Desinfektan(L)',
                    'Multivitamin(pcs)'
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
                data: [{{$data_daerah11 -> r_masker_n95}},{{$data_daerah11 -> r_masker_surgical}},{{$data_daerah11 -> r_sarung_tangan}},{{$data_daerah11 -> r_coverall_jumpsuit}},{{$data_daerah11 -> r_faceshield}},{{$data_daerah11 -> r_kacamata_goggles}},{{$data_daerah11 -> r_boot_and_shoe_cover}},{{$data_daerah11 -> r_handsanitizer}},{{$data_daerah11 -> r_desinfektan}},{{$data_daerah11 -> r_multivitamin}}]
            
            }
        
            ,
            
            {
                name: 'Donasi',
                data: [{{$data_daerah11 -> d_masker_n95}},{{$data_daerah11 -> d_masker_surgical}},{{$data_daerah11 -> d_sarung_tangan}},{{$data_daerah11 -> d_coverall_jumpsuit}},{{$data_daerah11 -> d_faceshield}},{{$data_daerah11 -> d_kacamata_goggles}},{{$data_daerah11 -> d_boot_and_shoe_cover}},{{$data_daerah11 -> d_handsanitizer}},{{$data_daerah11 -> d_desinfektan}},{{$data_daerah11 -> d_multivitamin}}]

            }
            
            ]
        });
    </script>
    <script>
        Highcharts.chart('daerah12', {
            chart: {
                type: 'column'
            },
            credits: {
                enabled: false
            },
            title: {
                text: 'Kebutuhan dan Donasi Wilayah'
            },
            subtitle: {
                text: '{{$data_daerah12 -> kota}}'
            },
            xAxis: {
                categories: [
                    'Masker N95(pcs)',
                    'Masker Surgical(box)',
                    'Sarung Tangan(pcs)',
                    'Hazmat(pcs)',
                    'Faceshield(pcs)',
                    'Kacamata Goggles(pcs)',
                    'Boot and Shoe Cover(pcs)',
                    'Handsanitizer(L)',
                    'Desinfektan(L)',
                    'Multivitamin(pcs)'
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
                data: [{{$data_daerah12 -> r_masker_n95}},{{$data_daerah12 -> r_masker_surgical}},{{$data_daerah12 -> r_sarung_tangan}},{{$data_daerah12 -> r_coverall_jumpsuit}},{{$data_daerah12 -> r_faceshield}},{{$data_daerah12 -> r_kacamata_goggles}},{{$data_daerah12 -> r_boot_and_shoe_cover}},{{$data_daerah12 -> r_handsanitizer}},{{$data_daerah12 -> r_desinfektan}},{{$data_daerah12 -> r_multivitamin}}]
            
            }
        
            ,
            
            {
                name: 'Donasi',
                data: [{{$data_daerah12 -> d_masker_n95}},{{$data_daerah12 -> d_masker_surgical}},{{$data_daerah12 -> d_sarung_tangan}},{{$data_daerah12 -> d_coverall_jumpsuit}},{{$data_daerah12 -> d_faceshield}},{{$data_daerah12 -> d_kacamata_goggles}},{{$data_daerah12 -> d_boot_and_shoe_cover}},{{$data_daerah12 -> d_handsanitizer}},{{$data_daerah12 -> d_desinfektan}},{{$data_daerah12 -> d_multivitamin}}]

            }
            
            ]
        });
    </script>
    <script>
        Highcharts.chart('daerah13', {
            chart: {
                type: 'column'
            },
            credits: {
                enabled: false
            },
            title: {
                text: 'Kebutuhan dan Donasi Wilayah'
            },
            subtitle: {
                text: '{{$data_daerah13 -> kota}}'
            },
            xAxis: {
                categories: [
                    'Masker N95(pcs)',
                    'Masker Surgical(box)',
                    'Sarung Tangan(pcs)',
                    'Hazmat(pcs)',
                    'Faceshield(pcs)',
                    'Kacamata Goggles(pcs)',
                    'Boot and Shoe Cover(pcs)',
                    'Handsanitizer(L)',
                    'Desinfektan(L)',
                    'Multivitamin(pcs)'
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
                data: [{{$data_daerah13 -> r_masker_n95}},{{$data_daerah13 -> r_masker_surgical}},{{$data_daerah13 -> r_sarung_tangan}},{{$data_daerah13 -> r_coverall_jumpsuit}},{{$data_daerah13 -> r_faceshield}},{{$data_daerah13 -> r_kacamata_goggles}},{{$data_daerah13 -> r_boot_and_shoe_cover}},{{$data_daerah13 -> r_handsanitizer}},{{$data_daerah13 -> r_desinfektan}},{{$data_daerah13 -> r_multivitamin}}]
            
            }
        
            ,
            
            {
                name: 'Donasi',
                data: [{{$data_daerah13 -> d_masker_n95}},{{$data_daerah13 -> d_masker_surgical}},{{$data_daerah13 -> d_sarung_tangan}},{{$data_daerah13 -> d_coverall_jumpsuit}},{{$data_daerah13 -> d_faceshield}},{{$data_daerah13 -> d_kacamata_goggles}},{{$data_daerah13 -> d_boot_and_shoe_cover}},{{$data_daerah13 -> d_handsanitizer}},{{$data_daerah13 -> d_desinfektan}},{{$data_daerah13 -> d_multivitamin}}]

            }
            
            ]
        });
    </script>
    <script>
        Highcharts.chart('daerah14', {
            chart: {
                type: 'column'
            },
            credits: {
                enabled: false
            },
            title: {
                text: 'Kebutuhan dan Donasi Wilayah'
            },
            subtitle: {
                text: '{{$data_daerah14 -> kota}}'
            },
            xAxis: {
                categories: [
                    'Masker N95(pcs)',
                    'Masker Surgical(box)',
                    'Sarung Tangan(pcs)',
                    'Hazmat(pcs)',
                    'Faceshield(pcs)',
                    'Kacamata Goggles(pcs)',
                    'Boot and Shoe Cover(pcs)',
                    'Handsanitizer(L)',
                    'Desinfektan(L)',
                    'Multivitamin(pcs)'
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
                data: [{{$data_daerah14 -> r_masker_n95}},{{$data_daerah14 -> r_masker_surgical}},{{$data_daerah14 -> r_sarung_tangan}},{{$data_daerah14 -> r_coverall_jumpsuit}},{{$data_daerah14 -> r_faceshield}},{{$data_daerah14 -> r_kacamata_goggles}},{{$data_daerah14 -> r_boot_and_shoe_cover}},{{$data_daerah14 -> r_handsanitizer}},{{$data_daerah14 -> r_desinfektan}},{{$data_daerah14 -> r_multivitamin}}]
            
            }
        
            ,
            
            {
                name: 'Donasi',
                data: [{{$data_daerah14 -> d_masker_n95}},{{$data_daerah14 -> d_masker_surgical}},{{$data_daerah14 -> d_sarung_tangan}},{{$data_daerah14 -> d_coverall_jumpsuit}},{{$data_daerah14 -> d_faceshield}},{{$data_daerah14 -> d_kacamata_goggles}},{{$data_daerah14 -> d_boot_and_shoe_cover}},{{$data_daerah14 -> d_handsanitizer}},{{$data_daerah14 -> d_desinfektan}},{{$data_daerah14 -> d_multivitamin}}]

            }
            
            ]
        });
    </script>
    <script>
        Highcharts.chart('daerah15', {
            chart: {
                type: 'column'
            },
            credits: {
                enabled: false
            },
            title: {
                text: 'Kebutuhan dan Donasi Wilayah'
            },
            subtitle: {
                text: '{{$data_daerah15 -> kota}}'
            },
            xAxis: {
                categories: [
                    'Masker N95(pcs)',
                    'Masker Surgical(box)',
                    'Sarung Tangan(pcs)',
                    'Hazmat(pcs)',
                    'Faceshield(pcs)',
                    'Kacamata Goggles(pcs)',
                    'Boot and Shoe Cover(pcs)',
                    'Handsanitizer(L)',
                    'Desinfektan(L)',
                    'Multivitamin(pcs)'
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
                data: [{{$data_daerah15 -> r_masker_n95}},{{$data_daerah15 -> r_masker_surgical}},{{$data_daerah15 -> r_sarung_tangan}},{{$data_daerah15 -> r_coverall_jumpsuit}},{{$data_daerah15 -> r_faceshield}},{{$data_daerah15 -> r_kacamata_goggles}},{{$data_daerah15 -> r_boot_and_shoe_cover}},{{$data_daerah15 -> r_handsanitizer}},{{$data_daerah15 -> r_desinfektan}},{{$data_daerah15 -> r_multivitamin}}]
            
            }
        
            ,
            
            {
                name: 'Donasi',
                data: [{{$data_daerah15 -> d_masker_n95}},{{$data_daerah15 -> d_masker_surgical}},{{$data_daerah15 -> d_sarung_tangan}},{{$data_daerah15 -> d_coverall_jumpsuit}},{{$data_daerah15 -> d_faceshield}},{{$data_daerah15 -> d_kacamata_goggles}},{{$data_daerah15 -> d_boot_and_shoe_cover}},{{$data_daerah15 -> d_handsanitizer}},{{$data_daerah15 -> d_desinfektan}},{{$data_daerah15 -> d_multivitamin}}]

            }
            
            ]
        });
    </script>
    <script>
        Highcharts.chart('daerah16', {
            chart: {
                type: 'column'
            },
            credits: {
                enabled: false
            },
            title: {
                text: 'Kebutuhan dan Donasi Wilayah'
            },
            subtitle: {
                text: '{{$data_daerah16 -> kota}}'
            },
            xAxis: {
                categories: [
                    'Masker N95(pcs)',
                    'Masker Surgical(box)',
                    'Sarung Tangan(pcs)',
                    'Hazmat(pcs)',
                    'Faceshield(pcs)',
                    'Kacamata Goggles(pcs)',
                    'Boot and Shoe Cover(pcs)',
                    'Handsanitizer(L)',
                    'Desinfektan(L)',
                    'Multivitamin(pcs)'
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
                data: [{{$data_daerah16 -> r_masker_n95}},{{$data_daerah16 -> r_masker_surgical}},{{$data_daerah16 -> r_sarung_tangan}},{{$data_daerah16 -> r_coverall_jumpsuit}},{{$data_daerah16 -> r_faceshield}},{{$data_daerah16 -> r_kacamata_goggles}},{{$data_daerah16 -> r_boot_and_shoe_cover}},{{$data_daerah16 -> r_handsanitizer}},{{$data_daerah16 -> r_desinfektan}},{{$data_daerah16 -> r_multivitamin}}]
            
            }
        
            ,
            
            {
                name: 'Donasi',
                data: [{{$data_daerah16 -> d_masker_n95}},{{$data_daerah16 -> d_masker_surgical}},{{$data_daerah16 -> d_sarung_tangan}},{{$data_daerah16 -> d_coverall_jumpsuit}},{{$data_daerah16 -> d_faceshield}},{{$data_daerah16 -> d_kacamata_goggles}},{{$data_daerah16 -> d_boot_and_shoe_cover}},{{$data_daerah16 -> d_handsanitizer}},{{$data_daerah16 -> d_desinfektan}},{{$data_daerah16 -> d_multivitamin}}]

            }
            
            ]
        });
    </script>
    <script>
        Highcharts.chart('daerah17', {
            chart: {
                type: 'column'
            },
            credits: {
                enabled: false
            },
            title: {
                text: 'Kebutuhan dan Donasi Wilayah'
            },
            subtitle: {
                text: '{{$data_daerah17 -> kota}}'
            },
            xAxis: {
                categories: [
                    'Masker N95(pcs)',
                    'Masker Surgical(box)',
                    'Sarung Tangan(pcs)',
                    'Hazmat(pcs)',
                    'Faceshield(pcs)',
                    'Kacamata Goggles(pcs)',
                    'Boot and Shoe Cover(pcs)',
                    'Handsanitizer(L)',
                    'Desinfektan(L)',
                    'Multivitamin(pcs)'
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
                data: [{{$data_daerah17 -> r_masker_n95}},{{$data_daerah17 -> r_masker_surgical}},{{$data_daerah17 -> r_sarung_tangan}},{{$data_daerah17 -> r_coverall_jumpsuit}},{{$data_daerah17 -> r_faceshield}},{{$data_daerah17 -> r_kacamata_goggles}},{{$data_daerah17 -> r_boot_and_shoe_cover}},{{$data_daerah17 -> r_handsanitizer}},{{$data_daerah17 -> r_desinfektan}},{{$data_daerah17 -> r_multivitamin}}]
            
            }
        
            ,
            
            {
                name: 'Donasi',
                data: [{{$data_daerah17 -> d_masker_n95}},{{$data_daerah17 -> d_masker_surgical}},{{$data_daerah17 -> d_sarung_tangan}},{{$data_daerah17 -> d_coverall_jumpsuit}},{{$data_daerah17 -> d_faceshield}},{{$data_daerah17 -> d_kacamata_goggles}},{{$data_daerah17 -> d_boot_and_shoe_cover}},{{$data_daerah17 -> d_handsanitizer}},{{$data_daerah17 -> d_desinfektan}},{{$data_daerah17 -> d_multivitamin}}]

            }
            
            ]
        });
    </script>
    <script>
        Highcharts.chart('daerah18', {
            chart: {
                type: 'column'
            },
            credits: {
                enabled: false
            },
            title: {
                text: 'Kebutuhan dan Donasi Wilayah'
            },
            subtitle: {
                text: '{{$data_daerah18 -> kota}}'
            },
            xAxis: {
                categories: [
                    'Masker N95(pcs)',
                    'Masker Surgical(box)',
                    'Sarung Tangan(pcs)',
                    'Hazmat(pcs)',
                    'Faceshield(pcs)',
                    'Kacamata Goggles(pcs)',
                    'Boot and Shoe Cover(pcs)',
                    'Handsanitizer(L)',
                    'Desinfektan(L)',
                    'Multivitamin(pcs)'
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
                data: [{{$data_daerah18 -> r_masker_n95}},{{$data_daerah18 -> r_masker_surgical}},{{$data_daerah18 -> r_sarung_tangan}},{{$data_daerah18 -> r_coverall_jumpsuit}},{{$data_daerah18 -> r_faceshield}},{{$data_daerah18 -> r_kacamata_goggles}},{{$data_daerah18 -> r_boot_and_shoe_cover}},{{$data_daerah18 -> r_handsanitizer}},{{$data_daerah18 -> r_desinfektan}},{{$data_daerah18 -> r_multivitamin}}]
            
            }
        
            ,
            
            {
                name: 'Donasi',
                data: [{{$data_daerah18 -> d_masker_n95}},{{$data_daerah18 -> d_masker_surgical}},{{$data_daerah18 -> d_sarung_tangan}},{{$data_daerah18 -> d_coverall_jumpsuit}},{{$data_daerah18 -> d_faceshield}},{{$data_daerah18 -> d_kacamata_goggles}},{{$data_daerah18 -> d_boot_and_shoe_cover}},{{$data_daerah18 -> d_handsanitizer}},{{$data_daerah18 -> d_desinfektan}},{{$data_daerah18 -> d_multivitamin}}]

            }
            
            ]
        });
    </script>
    <script>
        Highcharts.chart('daerah19', {
            chart: {
                type: 'column'
            },
            credits: {
                enabled: false
            },
            title: {
                text: 'Kebutuhan dan Donasi Wilayah'
            },
            subtitle: {
                text: '{{$data_daerah19 -> kota}}'
            },
            xAxis: {
                categories: [
                    'Masker N95(pcs)',
                    'Masker Surgical(box)',
                    'Sarung Tangan(pcs)',
                    'Hazmat(pcs)',
                    'Faceshield(pcs)',
                    'Kacamata Goggles(pcs)',
                    'Boot and Shoe Cover(pcs)',
                    'Handsanitizer(L)',
                    'Desinfektan(L)',
                    'Multivitamin(pcs)'
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
                data: [{{$data_daerah19 -> r_masker_n95}},{{$data_daerah19 -> r_masker_surgical}},{{$data_daerah19 -> r_sarung_tangan}},{{$data_daerah19 -> r_coverall_jumpsuit}},{{$data_daerah19 -> r_faceshield}},{{$data_daerah19 -> r_kacamata_goggles}},{{$data_daerah19 -> r_boot_and_shoe_cover}},{{$data_daerah19 -> r_handsanitizer}},{{$data_daerah19 -> r_desinfektan}},{{$data_daerah19 -> r_multivitamin}}]
            
            }
        
            ,
            
            {
                name: 'Donasi',
                data: [{{$data_daerah19 -> d_masker_n95}},{{$data_daerah19 -> d_masker_surgical}},{{$data_daerah19 -> d_sarung_tangan}},{{$data_daerah19 -> d_coverall_jumpsuit}},{{$data_daerah19 -> d_faceshield}},{{$data_daerah19 -> d_kacamata_goggles}},{{$data_daerah19 -> d_boot_and_shoe_cover}},{{$data_daerah19 -> d_handsanitizer}},{{$data_daerah19 -> d_desinfektan}},{{$data_daerah19 -> d_multivitamin}}]

            }
            
            ]
        });
    </script>
    <!-- start: Javascript -->
    <script src="{{ url('backend/asset/js/jquery.min.js')}}"></script>
    <script src="{{ url('backend/asset/js/jquery.ui.min.js')}}"></script>
    <script src="{{ url('backend/asset/js/bootstrap.min.js')}}"></script>
    <!-- plugins -->
    <script src="{{ url('backend/asset/js/plugins/moment.min.js')}}"></script>
    <script src="{{ url('backend/asset/js/plugins/jquery.datatables.min.js')}}"></script>
    <script src="{{ url('backend/asset/js/plugins/datatables.bootstrap.min.js')}}"></script>
    <script src="{{ url('backend/asset/js/plugins/jquery.nicescroll.js')}}"></script>
    <!-- custom -->
    <script src="{{url('backend/asset/js/main.js')}}"></script>
    <script type="text/javascript">
    </script>
    <!-- DataTables -->
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready( function () {
        $('#datatables-example').DataTable();
    } );
  </script>
@endsection
