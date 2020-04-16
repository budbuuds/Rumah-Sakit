@extends('layouts.guesttemplate')


@section('title','Aksitageh')

@section('container')
    <div id="news" class="container">
        <div class="row">
            <div class="image ">
                <img src="{{ url('backend/asset/img/pict/datars.jpg') }}">
            </div>
        </div><br>
        <h1 class="card-title mt-4"></h1>
        <p class="mt-4 float-center"></p> 
    </div>

@endsection