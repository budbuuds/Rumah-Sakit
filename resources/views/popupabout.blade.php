@extends('layouts.guesttemplate')


@section('title','Aksitageh')

@section('container')
<div id="about">
    <div class="container">
      <div class="col-lg-6 col-md-12 col-sm-6">
        <h1 class="judul">Tentang Aksitageh</h1>
      </div>
        <div class="col-lg-7 col-md-7 col-sm-7 aksixunand">
            <img src="{{ url('backend/asset/img/pict/aksivsunand.png') }}" alt="">
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5">
            <p class="penjelasan">Merupakan sebuah platform digital yang menyatukan dan memanggil relawan untuk ikut ambil bagian dalam gerakan social Sumbar Lawan Covid-19. Aksitageh diinisiasi rekan-rekan dari IA UKM-ITB dan Neo Telemetri UNAND untuk bersatu dan menjalankan aksi sosial. Selain membuka kesempatan untuk menjadi relawan, Aksitageh juga memberikan informasi serta penggalangan dana dan penyaluran bantuan.</p>
        </div>
    </div>
</div>

@endsection