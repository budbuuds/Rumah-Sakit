@extends('layouts.guesttemplate')


@section('title','News Aksitageh')

@section('container')
    <div id="news" class="container">
        <!-- <div class="row">  -->
        <div class="d-flex justify-content-start col-lg-12">
            <h1 class="par">Gerakan Aksitageh bertukar pikiran dengan Tim Aplikasi Fightcovid19.id </h1>
        </div> 
        <div class="d-flex justify-content-center col-lg-12">
            <p class="tulisan">
            Usaha bangsa Indonesia dalam menghilangkan Covid-19 terus mendapatkan dukungan dari berbagai kalangan. 
            Salah satunya adalah dengan kehadiran dari Tim Rumah Awan yang memperkenalkan aplikasi Fightcovid19.id. 
            Tim ini terdiri dari lima anak muda yang kreatif dan tidak bisa berdiam diri melihat bangsanya babak belur 
            dikarenakan Covid-19.
            </p>
        </div>
        <div class="image d-flex justify-content-center col-lg-12">
            <p class="tulisan">
            Mendapatkan kabar dari tulisan viral Dahlan Iskan, Aksitageh pun bergerak untuk coba dapat berdiskusi langsung 
            dengan Tim Rumah Awan. Berkat bantuan dari Wakil Bupati Belitung, Isyak Meirobie, akhirnya Tim Rumah Awan bersedia 
            untuk memaparkan aplikasi yang mereka kembangkan tersebut.
            </p>
        </div>
        <div class="image d-flex justify-content-center col-lg-12">
            <p class="tulisan">
                Diskusi secara online dilaksanakan mulai pukul 13.00 WIB, tanggal 22 April 2020. Diskusi diikuti oleh berbagai elemen masyarakat dan 
                pemerintahan seperti 
                Walikota Payakumbuh yang langsung dihadiri oleh Bapak Riza Falepi, perwakilan Pemprov Jawa Tengah, Diskominfo Kota Semarang, 
                Perwakilan masyarakat Balikpapan, Kepala Badan Keuangan Daerah Kabupaten Agam, Hendri G, Prof. Reni Mayerni dari Lemhanas, Dr. Eng. Muhammad 
                Ilhamdi Rusydi dari Unand, dan relawan-relawan dari Aksitageh. Diskusi ini langsung dimoderatori oleh Yv Tri Saputra dari relawan 
                Aksitageh dengan pembicara yang adalah Ahmad Alghozi, Agung Pratomo serta Wakil Bupati Belitung Bapak Isyak Meirobie.
            </p>
        </div>
        <div class="image d-flex justify-content-center col-lg-12 col-md-12">
            <img src="{{ url('backend/asset/img/pict/imgberita2.jpeg') }}">
        </div>
        <div class="image d-flex justify-content-center col-lg-12">
            <p class="tulisan">
            Paparan Agung Pratomo menyampaikan bahwa aplikasi fightcovid.19 ini memiliki beberapa fungsi salah satunya adalah posisi orang yang 
            sedang menggunakan aplikasi ini dapat terdeteksi. Penjelasan singkat dari Agung tersebut langsung menarik perhatian peserta diskusi 
            yang ingin tau lebih jauh tentang aplikasi tersebut. Agung menambahkan “Dengan kemampuan tersebut, kita dapat mengetahui posisi 
            orang-orang yang sedang dalam status isolasi.
            </p>
        </div>
        <div class="image d-flex justify-content-center col-lg-12">
            <p class="tulisan">
            Alghozi menjelaskan bahwa aplikasi tersebut diaktifkan ketika tamu-tamu baru masuk ke kota Belitung.  Ini dimaksud untuk mengurangi 
            penularan Covid-19 dari luar kota Belitung. Penumpang pesawat akan diarahkan untuk mengunduh aplikasi dan mengaktifkannya dengan memasukkan 
            beberapa data. Melalui layar yang dibagikan pada peserta, Alghozi memperlihatkan posisi-posisi dari pengguna pada sebuah peta yang bergerak. 
            Pengguna akan diberikan tanda jika mereka bergerak di luar jarak yang diperbolehkan bagi orang yang sedang menjalani isolasi.
            </p>
        </div>
        <div class="image d-flex justify-content-center col-lg-12">
            <p class="tulisan">
            Masih terdapat beberapa kendala dalam penggunaan aplikasi ini di Belitung, seperti pulsa pengguna habis atau pendatang tidak memiliki ponsel 
            cerdas. Namun begitu, pemerintah kota Belitung telah bekerjasama dengan provider untuk memberikan pengguna aplikasi paket data sebagai 
            hadiah. Sehingga tidak ada lagi alasan bahwa pengguna tidak memiliki pulsa untuk mengaktifkan aplikasi tersebut. 
            </p>
        </div>
        <div class="image d-flex justify-content-center col-lg-12">
            <p class="tulisan">
            Untuk menambah kedisplinan warga dalam menjalankan isolasi, Pemerintah Kota Belitung juga memanfaatkan pita berwarna khusus bagi mereka. 
            Pita tersebut diletakkan di tangan dan hanya petugas yang dapat membuka kembali pita tersebut. Jika warga membuka pita sebelum masa isolasi 
            berakhir, maka warga akan mendapatkan perpanjangan masa isolasi. Warga masyarakat juga telah diberikan edukasi bahwa orang-orang yang menggunakan 
            pita bukan dihindari, tapi malah harus dibantu untuk mendapatkan kebutuhan mereka karena mereka sedangkan menjalankan masa isolasi. 
            Gabungan teknologi IT dan pita ini diklaim telah dapat membuat pergerakan penduduk menjadi lebih terpantau sehingga mengurangi kemungkinan 
            pencegahan Covid-19.
            </p>
        </div>
        <div class="image d-flex justify-content-center col-lg-12">
            <p class="tulisan">
            Berdasarkan diskusi dengan Tim Rumah Awan tersebut, Alghozali juga menyampaikan bahwa mereka siap bekerjasama 
            dengan relawan di Indonesia untuk sama-sama dapat mencegah penyebaran Covid. Aplikasi ini masih dapat dikembangkan dan 
            terbuka untuk mengerjakannya bersama-sama. Namun begitu, penggunaan aplikasi ini membutuhkan infrastruktur yang 
            memadai. Sehingga jika ingin digunakan pada cakupan area yang lebih luas maka diperlukan tambahan server. Selain 
            kecukupan peralatan, kecukupan SDM juga sangat dibutuhkan. Yang tidak kalah pentingnya lagi adalah komitmen dari 
            pemimpin untuk dapat mencegah penyebaran Covid-19.
            </p>
        </div>
    </div>

@endsection