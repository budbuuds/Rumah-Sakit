


<?php $__env->startSection('title','Aksitageh'); ?>

<?php $__env->startSection('container'); ?>
  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container">

      <div>
        <div class="intro-img">
          <img src="<?php echo e(url('backend/asset/img/pict/database.png')); ?>" class="img-fluid">
        </div>
      </div>
      
      <div class="intro-info">
        <h2>Aksitageh<br></h2>
        <p>
            Aksitageh adalah gerakan sosial yang 
            mempersatukan relawan-relawan yang berjuang 
            untuk menghilangkan Covid di Sumbar dengan 
            Cepat dan Cerdas. 
        </p>
        <p>
            Salah satu layanan yang diberikan adalah dengan 
            memberikan informasi pada relawan serta donatur 
            mengenai kebutuhan fasilitas kesehatan untuk 
            menangani Covid-19.
        </p>
        <p>
            Data kebutuhan dari fasilitas kesehatan ini 
            bersumber dari kontak person Aksitageh pada 
            setiap Faskes.
        </p>
        <p>
            Mari manfaatkan data pada Aksitageh untuk 
            mengetahui kemana bantuan hendak disalurkan. 
        </p>
      </div>

    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="donatur" class="wow fadeIn">
      <div class="container">
        <div class="daerah row row-eq-height d-flex justify-content-center">
            <div class="col-lg-4 mb-4">
              <div class="cardnew card wow bounceInUp">
                <div class="card-body">
                  <h1 class="card-title">Data Pasien</h1>
                  <img src="<?php echo e(url('backend/asset/img/pict/graph.png')); ?>">
                  <form action="/pasien">
                    <button type="submit" class="tombol donaturbtn">MORE</button>
                  </form>
                </div>
              </div>
            </div>

            <div class="col-lg-4 mb-4">
              <div class="cardnew card wow bounceInUp">
                <div class="card-body">
                  <h1 class="card-title">Permintaan APD</h1>
                  <img src="<?php echo e(url('backend/asset/img/pict/graphapd.png')); ?>">
                  <form action="/kebutuhan">
                    <button type="submit" class="tombol donaturbtn">MORE</button>
                  </form>
                </div>
              </div> 
            </div>

            <div class="col-lg-4 mb-4">
              <div class="cardnew card wow bounceInUp">
                <div class="card-body">
                  <h1 class="card-title">Data Rumah Sakit</h1>
                  <img src="<?php echo e(url('backend/asset/img/pict/hospital.png')); ?>">
                  <form action="rumahsakit">
                    <button type="submit" class="tombol donaturbtn">MORE</button>
                  </form>
                </div>
              </div>
            </div>

          </div> 
        </div> 
      </div>
    </section><!-- #about -->
    
    <!--==========================
      OUR DIVISIONS
    ============================-->
    <section id="why-us" class="wow fadeIn">
      <div class="container">
        <header class="section-header">
          <h3>Kebutuhan per Daerah</h3>
          <br>
        </header>
        
        <div class="daerah row row-eq-height justify-content-center owl-carousel testimonials-carousel wow fadeInUp">
          <!-- <img class="bg" src="pict/Path5.png"> -->
          <div>
            <div class="col-lg-4 col-md-4 col-sm-4 mb-4">
              <div class="card wow bounceInUp">
                <div class="card-body">
                  <h5 class="card-title">Agam</h5><br>
                    <p class="card-text">Masker N95 <br>Gloves<br>Hansanitizer<br>Googles <br>. . .</p>
                  <form action="Agam">
                    <button type="submit" class="tombol">MORE</button>
                  </form>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 mb-4">
              <div class="card wow bounceInUp">
                <div class="card-body">
                  <h5 class="card-title">Dharmasraya</h5><br>
                    <p class="card-text">Masker N95 <br>Gloves<br>Hansanitizer<br>Googles <br>. . .</p>
                    <form action="Dharmasraya">
                    <button type="submit" class="tombol">MORE</button>
                  </form>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 mb-4">
              <div class="card wow bounceInUp">
                <div class="card-body">
                  <h5 class="card-title">Kep. Mentawai</h5><br>
                    <p class="card-text">Masker N95 <br>Gloves<br>Hansanitizer<br>Googles <br>. . .</p>
                    <form action="KepulauanMentawai">
                    <button type="submit" class="tombol">MORE</button>
                  </form>
                </div>
              </div>
            </div> 
          </div>

          <div>
            <div class="col-lg-4 col-md-4 col-sm-4 mb-4">
              <div class="card wow bounceInUp">
                <div class="card-body">
                  <h5 class="card-title">Bukittinggi</h5><br>
                    <p class="card-text">Masker N95 <br>Gloves<br>Hansanitizer<br>Googles <br>. . .</p>
                  <form action="Bukittinggi">
                    <button type="submit" class="tombol">MORE</button>
                  </form>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 mb-4">
              <div class="card wow bounceInUp">
                <div class="card-body">
                  <h5 class="card-title">Padang</h5><br>
                    <p class="card-text">Masker N95 <br>Gloves<br>Hansanitizer<br>Googles <br>. . .</p>
                  <form action="Padang">
                    <button type="submit" class="tombol">MORE</button>
                  </form>
                  </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 mb-4">
              <div class="card wow bounceInUp">
                <div class="card-body">
                  <h5 class="card-title">Pariaman</h5><br>
                    <p class="card-text">Masker N95 <br>Gloves<br>Hansanitizer<br>Googles <br>. . .</p>
                  <form action="Pariaman">
                    <button type="submit" class="tombol">MORE</button>
                  </form>                  
                </div>
              </div>
            </div>
          </div>

          <div>
            <div class="col-lg-4 col-md-4 col-sm-4 mb-4">
              <div class="card wow bounceInUp">
                <div class="card-body">
                  <h5 class="card-title">50 Kota</h5><br>
                    <p class="card-text">Masker N95 <br>Gloves<br>Hansanitizer<br>Googles <br>. . .</p>
                  <form action="50Kota">
                    <button type="submit" class="tombol">MORE</button>
                  </form>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 mb-4">
              <div class="card wow bounceInUp">
                <div class="card-body">
                  <h5 class="card-title">Payakumbuh</h5><br>
                    <p class="card-text">Masker N95 <br>Gloves<br>Hansanitizer<br>Googles <br>. . .</p>
                  <form action="Payakumbuh">
                    <button type="submit" class="tombol">MORE</button>
                  </form>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 mb-4">
              <div class="card wow bounceInUp">
                <div class="card-body">
                  <h5 class="card-title">Sawah Lunto</h5><br>
                    <p class="card-text">Masker N95 <br>Gloves<br>Hansanitizer<br>Googles <br>. . .</p>
                  <form action="SawahLunto">
                    <button type="submit" class="tombol">MORE</button>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div>
            <div class="col-lg-4 col-md-4 col-sm-4 mb-4">
              <div class="card wow bounceInUp">
                <div class="card-body">
                  <h5 class="card-title">Pasaman Barat</h5><br>
                    <p class="card-text">Masker N95 <br>Gloves<br>Hansanitizer<br>. . .</p>
                  <form action="PasamanBarat">
                    <button type="submit" class="tombol">MORE</button>
                  </form>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 mb-4">
              <div class="card wow bounceInUp">
                <div class="card-body">
                  <h5 class="card-title">Padang Panjang</h5><br>
                    <p class="card-text">Masker N95 <br>Gloves<br>Googles<br>. . .</p>
                  <form action="PadangPanjang">
                    <button type="submit" class="tombol">MORE</button>
                  </form>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 mb-4">
              <div class="card wow bounceInUp">
                <div class="card-body">
                  <h5 class="card-title">Padang Pariaman</h5><br>
                    <p class="card-text">Masker N95 <br>Hansanitizer<br>Googles<br>. . .</p>
                  <form action="PadangPariaman">
                    <button type="submit" class="tombol">MORE</button>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div>
            <div class="col-lg-4 col-md-4 col-sm-4 mb-4">
              <div class="card wow bounceInUp">
                <div class="card-body">
                  <h5 class="card-title">Pasaman</h5><br>
                    <p class="card-text">Masker N95 <br>Gloves<br>Hansanitizer<br>Googles <br>. . .</p>
                  <form action="Pasaman">
                    <button type="submit" class="tombol">MORE</button>
                  </form>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 mb-4">
              <div class="card wow bounceInUp">
                <div class="card-body">
                  <h5 class="card-title">Kota Solok</h5><br>
                    <p class="card-text">Masker N95 <br>Gloves<br>Hansanitizer<br>Googles <br>. . .</p>
                  <form action="KotaSolok">
                    <button type="submit" class="tombol">MORE</button>
                  </form>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 mb-4">
              <div class="card wow bounceInUp">
                <div class="card-body">
                  <h5 class="card-title">Pesisir Selatan</h5><br>
                    <p class="card-text">Masker N95 <br>Gloves<br>Hansanitizer<br>Googles <br>. . .</p>
                  <form action="PesisirSelatan">
                    <button type="submit" class="tombol">MORE</button>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div>
            <div class="col-lg-4 col-md-4 col-sm-4 mb-4">
              <div class="card wow bounceInUp">
                <div class="card-body">
                  <h5 class="card-title">Sijunjung</h5><br>
                    <p class="card-text">Masker N95 <br>Gloves<br>Hansanitizer<br>Googles <br>. . .</p>
                  <form action="Sijunjung">
                    <button type="submit" class="tombol">MORE</button>
                  </form>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 mb-4">
              <div class="card wow bounceInUp">
                <div class="card-body">
                  <h5 class="card-title">Solok</h5><br>
                    <p class="card-text">Masker N95 <br>Gloves<br>Hansanitizer<br>Googles <br>. . .</p>
                  <form action="Solok">
                    <button type="submit" class="tombol">MORE</button>
                  </form>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 mb-4">
              <div class="card wow bounceInUp">
                <div class="card-body">
                  <h5 class="card-title">Solok Selatan</h5><br>
                    <p class="card-text">Masker N95 <br>Gloves<br>Hansanitizer<br>Googles <br>. . .</p>
                  <form action="SolokSelatan">
                    <button type="submit" class="tombol">MORE</button>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div>
            <div class="col-lg-4 col-md-4 col-sm-4 mb-4">
              <div class="card wow bounceInUp">
                <div class="card-body">
                  <h5 class="card-title">Tanah Datar</h5><br>
                    <p class="card-text">Masker N95 <br>Gloves<br>Hansanitizer<br>Googles <br>. . .</p>
                  <form action="TanahDatar">
                    <button type="submit" class="tombol">MORE</button>
                  </form>
                </div>
              </div>
            </div>
          </div>

          </div>
      </div>
    </section>
 
    <section id="regis" class="clearfix">
      <div class="container">
        <div class="row justify-content-center mt-100">
          <img src="<?php echo e(url('backend/asset/img/pict/donation.png')); ?>" class="col-md-8 img-fluid">
           <header class="section-header">
            <h3 style="padding-top: 6%; font-weight: bold; color: #000;">Ayo Donasi Sekarang!</h3>  
          <form action="/pasien">
            <!-- <button type="submit" class="tombol donaturbtn">MORE</button>
          </form> -->
          </header>
        </div>
      </div>
    </section><!-- #Regis -->

  </main>
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.guesttemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RS\RS-Sumbar\resources\views/index.blade.php ENDPATH**/ ?>