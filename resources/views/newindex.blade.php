@extends('layouts.guesttemplate')


@section('title','Aksitageh')

@section('container')
  <!--==========================
    Info Section
  ============================-->


  <section id="intro" class="clearfix">
    <!-- <div class="jumbotron jumbotron-fluid"> -->
    <div class="container">  
        <!-- <img src="{{url('backend/asset/img/pict/header.png')}}">  -->
        <div class="col-lg-4 col-md-4 col-sm-4 mb-5 "> 
                    <div class="card wow bounceInUp">
                      <div class="card-body">
                        <h2 class="card-title d-flex justify-content-center">ODP</h2> 
                        <h1 class="d-flex justify-content-center">{{$odp -> jumlah}}</h1>
                      </div>
                    </div>        
                  </div>
                  
                  <div class="col-lg-4 col-md-4 col-sm-4 mb-5 "> 
                    <div class="card wow bounceInUp">
                      <div class="card-body">
                        <h2 class="card-title d-flex justify-content-center">PDP</h2>
                        <h1 class="d-flex justify-content-center">{{$pdp -> jumlah}}</h1>
                      </div>
                    </div>        
                  </div>
                  
                  <div class="col-lg-4 col-md-4 col-sm-4 mb-5 "> 
                    <div class="card wow bounceInUp">
                      <div class="card-body">
                        <h2 class="card-title d-flex justify-content-center">Positif</h2>
                        <h1 class="d-flex justify-content-center">{{$positif -> jumlah}}</h1>
                      </div>
                    </div>        
                  </div>
                  
                  <div class="col-lg-2 col-md-2 col-sm-2 mb-5 "> 
                  </div>
                  
                  <div class="col-lg-4 col-md-4 col-sm-4 mb-5 "> 
                    <div class="card wow bounceInUp">
                      <div class="card-body">
                        <h2 class="card-title d-flex justify-content-center">Sembuh</h2>
                        <h1 class="d-flex justify-content-center">{{$sembuh -> jumlah}}</h1>
                      </div>
                    </div>        
                  </div>
                  
                  <div class="col-lg-4 col-md-4 col-sm-4 mb-5 "> 
                    <div class="card wow bounceInUp">
                      <div class="card-body">
                        <h2 class="card-title d-flex justify-content-center">Meninggal</h2>
                        <h1 class="d-flex justify-content-center">{{$meninggal -> jumlah}}</h1>
                      </div>
                    </div>        
                  </div>

        <!-- FLIP CARD -->

        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
        <div class="col-lg-12 col-md-12 col-sm-12 mb-5 " style="border:0;">
          <div class="flip-card ">
            <div class="flip-card-inner">
              <div class="flip-card-front"> 

              
                  

                   
              </div>


              <div class="flip-card-back"> 
                 -->
              <!-- <div class="d-flex justify-content-center">
                  <div id="odp" class="col-lg-12 col-md-12 col-sm-12"></div>
              </div> -->
                
              <!-- </div>
            </div>
             
          </div>  
        </div> -->

        <div class="col-lg-12 mb-5 d-flex justify-content-center"> 
          <a href="pasien_covid19">
            <button type="button" class="tampilgrafik">TAMPILKAN GRAFIK</button>
          </a>
        </div>

    </div>
    <!-- </div> -->
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      BERITA
    ============================-->
    <section id="berita" class="wow fadeIn">
      <div class="container swiper-container">
        <header class="section-header d-flex justify-content-center">
          <h3 class="bg">Berita</h3> <h3 class="bgkanan">Tageh</h3>
          <br>
        </header> 

        <div class="row mt-4">
          <div class="beritaBaru swiper-wrapper owl-carousel testimonials-carousel">

          <div>

            <div class="col-lg-6 col-md-6 col-sm-6 mb-4 swiper-slide">
              <div class="cardBerita card wow bounceInUp">
                <div class="d-flex justify-content-center">
                  <img src="{{ url('backend/asset/img/pict/jumfaskes.png') }}">
                </div>
                  <div class="card-body">
                <h1 class="card-title mb-4">18 KABUPATEN/KOTA SUDAH TERDATA AKSITAGEH</h1>
                <div class="d-flex justify-content-end">
                  <a href="/berkepapd">SELENGKAPNYA</a>
                </div>
                </div>
              </div>
            </div>
            
            <div class="col-lg-6 col-md-6 col-sm-6 mb-4 swiper-slide">
              <div class="cardBerita card wow bounceInUp">
                <div class="d-flex justify-content-center">
                  <img src="{{ url('backend/asset/img/pict/imgberita2.jpeg') }}">
                </div>
                <div class="card-body">
                  <h1 class="card-title mb-4">Gerakan Aksitageh bertukar pikiran dengan Tim Aplikasi Fightcovid19.id</h1>
                  <div class="d-flex justify-content-end">
                    <a href="/berdars">SELENGKAPNYA</a><br>
                  </div>
                </div>
              </div>
            </div>
          </div>                       
  
          </div>  
        </div>
      </div>
    </section>

    <!--==========================
      Document section
    ============================-->
    <!-- <section id="dokumen" class="wow fadeIn">
      <div class="container">
        <header class="section-header d-flex justify-content-center">
          <h3 class="dok">Dok</h3><h3 class="umen">umen</h3>
        </header>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6"> 
            <div class="card wow bounceInUp">
              <div class="card-body">
                <div class="d-flex justify-content-center">
                  <img src="{{ url('backend/asset/img/pict/file.png') }}" alt="">
                  <div class="ket">
                    <h2 class="card-title">TABEL KEBUTUHAN FASKES SUMBAR MEI 2020</h2>
                    <h2 class="card-title download-text">DOWNLOAD DOKUMEN</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6"> 
            <div class="card wow bounceInUp">
              <div class="card-body">
                <div class="d-flex justify-content-center">
                  <img src="{{ url('backend/asset/img/pict/file.png') }}" alt="">
                  <div class="ket">
                    <h2 class="card-title">TABEL KEBUTUHAN FASKES SUMBAR MEI 2020</h2>
                    <h2 class="card-title download-text">DOWNLOAD DOKUMEN</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6"> 
            <div class="card wow bounceInUp">
              <div class="card-body">
                <div class="d-flex justify-content-center">
                  <img src="{{ url('backend/asset/img/pict/file.png') }}" alt="">
                  <div class="ket">
                    <h2 class="card-title">TABEL KEBUTUHAN FASKES SUMBAR MEI 2020</h2>
                    <h2 class="card-title download-text">DOWNLOAD DOKUMEN</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6"> 
            <div class="card wow bounceInUp">
              <div class="card-body">
                <div class="d-flex justify-content-center">
                  <img src="{{ url('backend/asset/img/pict/file.png') }}" alt="">
                  <div class="ket">
                    <h2 class="card-title">TABEL KEBUTUHAN FASKES SUMBAR MEI 2020</h2>
                    <h2 class="card-title download-text">DOWNLOAD DOKUMEN</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    
    <!--==========================
      about covid
    ============================-->
    <section id="covid" class="clearfix">
      <div class="container">

        <header class="section-header d-flex justify-content-center">
          <h3 class="cov">Covid-</h3><h3 class="se">19</h3>
        </header>

        <div class="covid-img col-lg-5 col-md-5 col-sm-5">
          <img src="{{ url('backend/asset/img/pict/virus.png') }}" class="img-fluid">
        </div>
        
        <div class="covid-info col-lg-7 col-md-7 col-sm-7"> 
          <span>Coronavirus adalah suatu kelompok virus yang dapat menyebabkan penyakit pada hewan atau manusia. Beberapa jenis coronavirus diketahui menyebabkan infeksi saluran nafas pada manusia mulai dari batuk pilek hingga yang lebih serius seperti MERS dan SARS. Coronavirus jenis baru yang ditemukan menyebabkan penyakit Covid-19. Covid-19 adalah penyakit menular yang disebabkan oleh jenis coronavirus yang baru ditemukan. Ini merupakan virus baru dan penyakit yang sebelumnya tidak dikenal sebelum terjadi wabah di Wuhan, Tiongkok, bulan Desember 2019.</span>
        </div>

      </div>
    </section><!-- #intro -->
    
 
    <section id="regis" class="clearfix">
      <div class="container"> 
          <header class="section-header">
            <h3>Ayo Donasi Sekarang!</h3>  
          </header>
          <div class="d-flex justify-content-center">
            <img src="{{ url('backend/asset/img/pict/donasi.png') }}" class="img-fluid"> 
          </div>
      </div>
    </section> 
  </main>

  <script>
    $('.flip-card').on('click', function(){
        $(this).toggleClass('flipped')
      }
    )
  </script>

    <script>
        Highcharts.chart('odp', {
            chart: {
                type: 'line'
            },
            title: {
                text: 'ODP'
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
                name: 'odp',
                data: [ 
                  0, {{$odp -> jumlah}}
                ]
            }
            ]
        });
    </script>

  @endsection
