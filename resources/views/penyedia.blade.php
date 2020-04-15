@extends('layouts.guesttemplate')


@section('title','Aksitageh')

@section('container')
<section id="intro">
    <div class="container">
        <h1>Kebutuhan Fasilitas Kesehatan</h1>
        <div class="table table-fixed">
        <table class="table table-fixed table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>Nama Penyedia</th>
                    <th>Alamat</th>
                    <th>Kontak</th>
                    <th>Barang</th>
                    <th>Harga</th>
                    <th>Satuan</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody style="overflow: scroll">
            @foreach($data_penyedia as $penyedia)
                        <tr>
                          <td> {{$penyedia -> nama_penyedia}} </td>
                          <td> {{$penyedia -> alamat_penyedia}} </td>
                          <td> {{$penyedia -> kontak}} </td>
                          <td> {{$penyedia -> barang}} </td>
                          <td> {{$penyedia -> harga}} </td>
                          <td> {{$penyedia -> satuan}} </td>
                          <td> {{$penyedia -> status}} </td>                   
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