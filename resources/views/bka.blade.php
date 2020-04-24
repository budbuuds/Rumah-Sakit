@extends('layouts.guesttemplate')


@section('title','News Aksitageh')

@section('container')
    <div id="news" class="container">
        <!-- <div class="row">  -->
        <div class="d-flex justify-content-start col-lg-12">
            <h1 class="par">18 KABUPATEN/KOTA SUDAH TERDATA AKSITAGEH</h1>
        </div> 
        <div class="d-flex justify-content-center col-lg-12">
            <p class="tulisan">Aksitageh telah melaksanakan pendataan selama 15 hari sejak tanggal 5 April 2020
                 terkait kebutuhan faskes terhadap Alat Pelindung Diri untuk satu bulan ke depan.
                 Saat ini Aksitageh telah medapatkan data 18 kabupaten/kota di Sumatera Barat.   
                 Fasilitas yang terdata saat ini diantaranya adalah 46 Rumah Sakit dari total  59 
                 rumah sakit di  Sumatera Barat dan 167 puskemas dari total 276 puskemas di Sumatera Barat 
                 (Lihat Gambar 1) sedangkan jumlah faskes berdasarkan jenisnya setiap kabupaten/kota yang 
                 telah terdata saat ini terdapat pada Tabel 1. Berdasarkan data yang didapatkan sudah 77% 
                 kebutuhan rumah sakit dan 60% kebutuhan puskesmas telah terpetakan melalui Aksitageh. 
                 Kami terus berusaha bekerjasama dengan fasilitas kesehatan untuk mendapatkan data kebutuhan mereka. 
                 Karena data tersebut telah banyak membantu relawan dalam menetapkan barang yang harus disediakan dan 
                 kemana bantuan hendak disalurkan.Aksitageh telah melaksanakan pendataan selama 15 hari sejak tanggal 
                 5 April 2020 terkait kebutuhan faskes terhadap Alat Pelindung Diri untuk satu bulan ke depan. 
                 Saat ini Aksitageh telah medapatkan data 18 kabupaten/kota di Sumatera Barat.   
                 Fasilitas yang terdata saat ini diantaranya adalah 46 Rumah Sakit dari total  59 
                 rumah sakit di  Sumatera Barat dan 167 puskemas dari total 276 puskemas di Sumatera Barat 
                 (Lihat Gambar 1) sedangkan jumlah faskes berdasarkan jenisnya setiap kabupaten/kota yang telah terdata 
                 saat ini terdapat pada Tabel 1. Berdasarkan data yang didapatkan sudah 77% kebutuhan rumah sakit 
                 dan 60% kebutuhan puskesmas telah terpetakan melalui Aksitageh. Kami terus berusaha bekerjasama dengan 
                 fasilitas kesehatan untuk mendapatkan data kebutuhan mereka. Karena data tersebut telah banyak membantu 
                 relawan dalam menetapkan barang yang harus disediakan dan kemana bantuan hendak disalurkan.</p>
            </div>
            <div class="image d-flex justify-content-center col-lg-12">
                <img src="{{ url('backend/asset/img/pict/jumfaskes.png') }}">
            </div>
            <div class="d-flex justify-content-center col-lg-12">
                <span class="keterangan">Gambar 1 Jumlah Faskes di Sumatera Barat</span>
            </div><br><br><br>
            <div class="d-flex justify-content-center col-lg-12">
                <div class="font-weight-bold font-italic">Tabel 1 Jumlah faskes di 18 Kabupaten/Kota berdasrakan jenisnya</div>
            </div><br>
            <div class="table-wraper justify-content-center col-lg-12">
                <div class="tabel">
                    <table class="table table-striped">
                        <thead class="thead-light">
                            <tr>
                            <th scope="col" class="namaDaerah">No.</th>
                            <th scope="col" class="namaDaerah">Daerah</th>
                            <th scope="col">Rumah Sakit Rujukan Utama</th>
                            <th scope="col">Rumah Sakit Umum Daerah</th>
                            <th scope="col">Rumah Sakit Swasta</th>
                            <th scope="col">Rumah Sakit Swasta</th>
                            <th scope="col">Pustu/ Klinik</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row" class="namaDaerah" class="namaDaerah">1</th>
                            <td class="namaDaerah">AGAM</td>
                            <td>0</td>
                            <td>1</td>
                            <td>0</td>
                            <td>23</td>
                            <td>3</td>
                            </tr>
                            <tr>
                            <th scope="row" class="namaDaerah">2</th>
                            <td class="namaDaerah">LIMA PULUH KOTA</td>
                            <td>0</td>
                            <td>1</td>
                            <td>0</td>
                            <td>16</td>
                            <td>1</td>
                            </tr>
                            <tr>
                            <th scope="row" class="namaDaerah">3</th>
                            <td class="namaDaerah">PADANG PARIAMAN</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>7</td>
                            <td>0</td>
                            </tr>

                            <th scope="row" class="namaDaerah">4</th>
                            <td class="namaDaerah">PASAMAN</td>
                            <td>0</td>
                            <td>1</td>
                            <td>2</td>
                            <td>16</td>
                            <td>5</td>
                            </tr>

                            <th scope="row" class="namaDaerah">5</th>
                            <td class="namaDaerah">PASAMAN BARAT</td>
                            <td>0</td>
                            <td>0</td>
                            <td>1</td>
                            <td>2</td>
                            <td>0</td>
                            </tr>

                            <th scope="row" class="namaDaerah">6</th>
                            <td class="namaDaerah">PESISIR SELATAN</td>
                            <td>0</td>
                            <td>2</td>
                            <td>1</td>
                            <td>18</td>
                            <td>3</td>
                            </tr>

                            <th scope="row" class="namaDaerah">7</th>
                            <td class="namaDaerah">SIJUNJUNG</td>
                            <td>0</td>
                            <td>1</td>
                            <td>0</td>
                            <td>13</td>
                            <td>0</td>
                            </tr>

                            <th scope="row" class="namaDaerah">8</th>
                            <td class="namaDaerah">SOLOK</td>
                            <td>0</td>
                            <td>1</td>
                            <td>0</td>
                            <td>19</td>
                            <td>0</td>
                            </tr>

                            <th scope="row" class="namaDaerah">9</th>
                            <td class="namaDaerah">SOLOK SELATAN</td>
                            <td>0</td>
                            <td>1</td>
                            <td>0</td>
                            <td>19</td>
                            <td>0</td>
                            </tr>

                            <th scope="row" class="namaDaerah">10</th>
                            <td class="namaDaerah">TANAH DATAR</td>
                            <td>0</td>
                            <td>1</td>
                            <td>2</td>
                            <td>4</td>
                            <td>0</td>
                            </tr>

                            <th scope="row" class="namaDaerah">11</th>
                            <td class="namaDaerah">DHARMASRAYA</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>2</td>
                            <td>0</td>
                            </tr>

                            <th scope="row" class="namaDaerah">12</th>
                            <td class="namaDaerah">KOTA BUKITTINGGI</td>
                            <td>1</td>
                            <td>1</td>
                            <td>2</td>
                            <td>7</td>
                            <td>0</td>
                            </tr>

                            <th scope="row" class="namaDaerah">13</th>
                            <td class="namaDaerah">KOTA PADANG</td>
                            <td>1</td>
                            <td>4</td>
                            <td>8</td>
                            <td>20</td>
                            <td>0</td>
                            </tr>

                            <th scope="row" class="namaDaerah">14</th>
                            <td class="namaDaerah">KOTA PADANG PANJANG</td>
                            <td>0</td>
                            <td>0</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            </tr>

                            <th scope="row" class="namaDaerah">15</th>
                            <td class="namaDaerah">KOTA PARIAMAN</td>
                            <td>0</td>
                            <td>2</td>
                            <td>1</td>
                            <td>1</td>
                            <td>0</td>
                            </tr>

                            <th scope="row" class="namaDaerah">16</th>
                            <td class="namaDaerah">KOTA PAYAKUMBUH</td>
                            <td>0</td>
                            <td>1</td>
                            <td>3</td>
                            <td>5</td>
                            <td>4</td>
                            </tr>

                            <th scope="row" class="namaDaerah">17</th>
                            <td class="namaDaerah">KOTA SAWAHLUNTO</td>
                            <td>0</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            </tr>

                            <th scope="row" class="namaDaerah">18</th>
                            <td class="namaDaerah">KOTA SOLOK</td>
                            <td>0</td>
                            <td>1</td>
                            <td>2</td>
                            <td>4</td>
                            <td>2</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div><br><br>
            <div class="d-flex justify-content-center col-lg-12">
                <p class="tulisan">Berdasarkan data yang didapatkan sampai saat diketahui bahwa urutan kebutuhan berdasarkan jumlahnya terbanyak adalah 
                    multivitamin (177897 paket), sarun tangang (124813 pasang), baju Hazmat (36498 helai), Faceshield (15945 buah), 
                    Handsanitizer (14452 Liter), Desinfektan (14404 Liter), Masker bedah (11984 kotak), sepatu boot (10053  pasang), 
                    kacamata (9886 sepasang), masker N95 (6209 kotak) dan 13 kantong jenazah. Koordinator pengelolaan data ,Muhammad 
                    Ilhamdi Rusydi, menyampaikan bahwa kebutuhan fasilitas kesehatan di Sumatera Barat pada bulan April telah dapat 
                    diprediksi berdasarkan data yang telah diperoleh. Namun begitu, data-data ini masih harus diperbaharui pada bulan 
                    Mei. “Harapan kita terjadi penurunan kebutuhan yang menandakan kebutuhan APD telah terpenuhi dan adanya pemerataan 
                    penyaluran. Karena itulah salah satu tujuan dari Aksitageh”, disampaikan oleh Rian Novico sebagai ketua gerakan. .
                </p>
            </div><br><br><br>
        <div class="d-flex justify-content-center col-lg-12">
            <div class="font-weight-bold font-italic">Tabel 2 Jumlah faskes di 18 Kabupaten/Kota berdasrakan jenisnya</div>
        </div><br>
        <div class="table-wraper">
            <div class="tabel justify-content-center col-lg-10">
                <table class="table table-striped ">
                    <thead class="thead-light">
                        <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Daerah</th>
                        <th scope="col">Rumah Sakit Rujukan Utama</th>
                        <th scope="col">Rumah Sakit Umum Daerah</th>
                        <th scope="col">Rumah Sakit Swasta</th>
                        <th scope="col">Rumah Sakit Swasta</th>
                        <th scope="col">Pustu/ Klinik</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <tr>
                        <th scope="row">1</th>
                        <td>Masker N95 (Box)</td>		
                        <td>1820</td>		
                        <td>2608</td>
                        <td>931</td>
                        <td>769</td>
                        <td>81</td>
                        </tr>
                        
                        <tr>
                        <th scope="row">2</th>
                        <td>Masker Surgical (Box)</td>						
                        <td>900</td>						
                        <td>4754</td>
                        <td>2083</td>
                        <td>3261</td>
                        <td>986</td>
                        </tr>
                        
                        <tr>
                        <th scope="row">3</th>
                        <td>Sarung Tangan (Gloves)</td>			
                        <td>12800</td>			
                        <td>29600</td>
                        <td>22290</td>
                        <td>56276</td>
                        <td>3847</td>
                        </tr>

                        <tr>
                        <th scope="row">4</th>
                        <td>Hazmat (Pcs)</td>		
                        <td>7300</td>
                        <td>9628</td>
                        <td>5753</td>
                        <td>13025</td>
                        <td>792</td>
                        </tr>
                        
                        <tr>
                        <th scope="row">5</th>
                        <td>Faceshield (Pcs)</td>			
                        <td>510</td>				
                        <td>5670</td>
                        <td>1498</td>
                        <td>7852</td>
                        <td>415</td>
                        </tr>
                        
                        <tr>
                        <th scope="row">6</th>
                        <td>Kacamata (Psg)</td>			
                        <td>515</td>				
                        <td>2488</td>
                        <td>1418</td>
                        <td>5110</td>
                        <td>355</td>
                        </tr>
                        
                        <tr>
                        <th scope="row">7</th>
                        <td>Sepatu Boot (Psg)</td>		
                        <td>515</td>			
                        <td>3158</td>
                        <td>1184</td>
                        <td>4870</td>
                        <td>326</td>
                        </tr>
                        
                        <tr>
                        <th scope="row">8</th>
                        <td>Handsanitizer (Liter)</td>			
                        <td>1350</td>		
                        <td>5530</td>
                        <td>1537</td>
                        <td>4885</td>
                        <td>1150</td>
                        </tr>
                        
                        <tr>
                        <th scope="row">9</th>
                        <td>Desinfektan (Liter)</td>			
                        <td>1350</td>				
                        <td>5530</td>
                        <td>1537</td>
                        <td>4837</td>
                        <td>1150</td>
                        </tr>
                        
                        <tr>
                        <th scope="row">10</th>
                        <td>Multivitamin (Paket)</td>			
                        <td>4600</td>				
                        <td>31710</td>
                        <td>27040</td>
                        <td>112393</td>
                        <td>2154</td>
                        </tr>
                        
                        <tr>
                        <th scope="row">11</th>
                        <td>Kantong Jenazah (Pcs)</td>			
                        <td>10</td>			
                        <td>0</td>
                        <td>3</td>
                        <td>0</td>
                        <td>0</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div><br>
        <div class="d-flex justify-content-start col-lg-12">
        <p>
            1 Box N95 = 20 Pcs
        </p>
        </div>
        <div class="d-flex justify-content-start col-lg-12">
        <p>
            1 Box Masker Surgical = 50 Pcs
        </p> 
        </div><br>
    </div>

@endsection