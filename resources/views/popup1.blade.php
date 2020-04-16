@extends('layouts.guesttemplate')


@section('title','Aksitageh')

@section('container')
<section id="intro">
    <div class="container">
        <h1>Kebutuhan Fasilitas Kesehatan</h1>
        <div>
        <table id="datatables-example" class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Kota/Kab</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Masker N95</th>
                    <th scope="col">Masker Surgical</th>
                    <th scope="col">Sarung Tangan (gloves)</th>
                    <th scope="col">Coverall Jumpsuit (hazmat)</th>
                    <th scope="col">Faceshield</th>
                    <th scope="col">Kacamata Goggles</th>
                    <th scope="col">Boot and Shoe Cover</th>
                    <th scope="col">Handsanitizer</th>
                    <th scope="col">Desinfektan</th>
                    <th scope="col">Multivitamin</th>
                    <th scope="col">Kantong Jenazah</th>
                    <th scope="col">Skorlet</th>
                </tr>
            </thead>
            <tbody style="overflow: scroll">
            @foreach($data_rs_1 as $rs)
                        <tr>
                          <td> {{$rs -> daerah -> kota}} </td>
                          <td> {{$rs -> nama_rs}} </td>
                          <td> {{$rs -> alamat}} </td>
                          <!-- <td> {{$rs -> cp}}</td> -->
                          <td> {{$rs -> r_masker_n95}} </td>                          
                          <td> {{$rs -> r_masker_surgical}} </td>                          
                          <td> {{$rs -> r_sarung_tangan}} </td>                         
                          <td> {{$rs -> r_coverall_jumpsuit}} </td>                          
                          <td> {{$rs -> r_faceshield}} </td>                         
                          <td> {{$rs -> r_kacamata_goggles}} </td>                         
                          <td> {{$rs -> r_boot_and_shoe_cover}} </td>                        
                          <td> {{$rs -> r_handsanitizer}} </td>                        
                          <td> {{$rs -> r_desinfektan}} </td>                         
                          <td> {{$rs -> r_multivitamin}} </td>                       
                          <td> {{$rs -> r_kantong_jenazah}} </td>                        
                          <td> {{$rs -> r_Skorlet}} </td>                     
                        </tr>
                        @endforeach  
            </tbody>
        </table>
        </div>
    </div>
</section>
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