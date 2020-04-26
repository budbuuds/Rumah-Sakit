@extends('layouts.guesttemplate')


@section('title','Aksitageh')

@section('container')
<section id="intro">
    <div class="container">
        <h1>Penyaluran</h1>
        <div>
        <table id="datatables-example" class="table table-bordered">
            <thead class="thead-light">
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