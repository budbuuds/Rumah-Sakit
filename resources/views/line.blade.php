@extends('layouts.guesttemplate')


@section('title','Aksitageh')

@section('container')  
	<div id="korban">
		<div class="container">
			<div id="pasien">

			</div>
			<br> 
		</div> 
	</div>


    <script>
		window.onload = function () {

		var chart = new CanvasJS.Chart("pasien", {
			theme:"light2",
			animationEnabled: true,
			title:{
				text: "Data Pasien Sumatera Barat"
			},
			axisY :{
				includeZero: false,
				title: "Jumlah",
				suffix: " Orang"
			},
			toolTip: {
				shared: "true"
			},
			legend:{
				cursor:"pointer",
				itemclick : toggleDataSeries
			},
			data: [
				{
				type: "spline", 
				showInLegend: true,
				visible: false,
				yValueFormatString: "## orang",
				name: "ODP",
				dataPoints: [
					@foreach($data_pasien_odp as $pasien_odp)		
					{ x: new Date({{$pasien_odp -> tanggal}}) , y: {{$pasien_odp -> jumlah}} },
					@endforeach
				]
			},

			{
				type: "spline", 
				showInLegend: true,
				visible: false,
				yValueFormatString: "## orang",
				name: "PDP",
				dataPoints: [
					@foreach($data_pasien_pdp as $pasien_pdp)		
					{ x: new Date({{$pasien_pdp -> tanggal}}) , y: {{$pasien_pdp -> jumlah}} },
					@endforeach
				]
			},
			{
				type: "spline",
				visible: true,
				showInLegend: true,
				yValueFormatString: "## orang",
				name: "Positif",
				dataPoints: [
					@foreach($data_pasien_positif as $pasien_positif)		
					{ x: new Date({{$pasien_positif -> tanggal}}) , y: {{$pasien_positif -> jumlah}} },
					@endforeach
				]
			},
			{
				type: "spline",
				visible: true,
				showInLegend: true,
				yValueFormatString: "## orang",
				name: "Meninggal",
				dataPoints: [
					@foreach($data_pasien_meninggal as $pasien_meninggal)		
					{ x: new Date({{$pasien_meninggal -> tanggal}}) , y: {{$pasien_meninggal -> jumlah}} },
					@endforeach
				]
			},
			{
				type: "spline", 
				showInLegend: true,
				yValueFormatString: "## orang",
				name: "Sembuh",
				dataPoints: [
					@foreach($data_pasien_sembuh as $pasien_sembuh)		
					{ x: new Date({{$pasien_sembuh -> tanggal}}) , y: {{$pasien_sembuh -> jumlah}} },
					@endforeach
				]
			},
			]
		});
		chart.render();

		function toggleDataSeries(e) {
			if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible ){
				e.dataSeries.visible = false;
			} else {
				e.dataSeries.visible = true;
			}
			chart.render();
		}

		}
	</script>  
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script> 

@endsection