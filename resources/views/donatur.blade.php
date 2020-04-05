@extends('layouts.guesttemplate')


@section('title','Aksitageh')

@section('container')
<section id="intro">
    <div class="container">
        <h1>Rumah Sakit</h1>
        <div class="table table-responsive">
        <table id="datatables-example" class="table table-striped table-bordered">
            <thead class="thead-light">
              <tr>
                <th>Tanggal</th>
                <th>Nama Rumah Sakit</th>
                <th>Nama Donatur</th>
                <th>Tunai</th>
                <th>Masker N95</th>
                <th>Masker Surgical</th>
                <th>Sarung Tangan (gloves)</th>
                <th>Coverall Jumpsuit (hazmat)</th>
                <th>Faceshield</th>
                <th>Kacamata Goggles</th>
                <th>Boot and Shoe Cover</th>
                <th>Handsanitizer</th>
                <th>Desinfektan</th>
                <th>Multivitamin</th>
                <th>Kantong Jenazah</th>
                <th>Skorlet</th>
              </tr>
            </thead>
            @foreach($data_donatur as $donatur)
                      <tbody>
                        <tr>
                          <td> {{$donatur -> created_at}} </td>
                          <td> {{$donatur -> rs -> nama_rs}} </td>
                          <td> {{$donatur -> nama_donatur}} </td>
                          <td> {{$donatur -> tunai}} </td>
                          <td> {{$donatur -> masker_n95}}</td>
                          <td> {{$donatur -> masker_surgical}}</td>
                          <td> {{$donatur -> sarung_tangan}}</td>
                          <td> {{$donatur -> coverall_jumpsuit}}</td>
                          <td> {{$donatur -> faceshield}}</td>
                          <td> {{$donatur -> kacamata_goggles}}</td>
                          <td> {{$donatur -> boot_and_shoe_cover}}</td>
                          <td> {{$donatur -> handsanitizer}}</td>
                          <td> {{$donatur -> desinfektan}}</td>
                          <td> {{$donatur -> multivitamin}}</td>
                          <td> {{$donatur -> kantong_jenazah}}</td>
                          <td> {{$donatur -> Skorlet}}</td>
                        </tr>
                      </tbody>
                      @endforeach
        </table>
        </div>
    </div>
</section>

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