@extends('pamer.main1')
@section('title', $title)
@section('stylesheets')
    <link rel="stylesheet" href="{{asset('css/history.css')}}">
@endsection
@section('content')
    <h1>{{ $history }}</h1>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"> 
    <div class="history shadow rounded" style="background-color: rgb(255, 239, 120)">
      <div class="row rounded" style="background-color: rgb(255, 228, 91);">
          <div class="col-md-2 p-3">
              <img src="/img/menu.png" alt="" width="100%" height="110px">
          </div>
          <div class="col-md mt-3">
              <p><b>Coklat keju </b></p>
              <p>Jumlah : 2</p>
              <p>Dipesan oleh : <b>Luthfi Mawarid</b></p>
          </div>
          <div class="price col-md-3 mt-3">
              <p>Harga :<b>20.000 x 2</b></p>
              <p>Total :<b> 40.000</b></p>
              <p><b><i>Pesanan selesai dibuat</i></b></p>
          </div>
      </div>
      <div class="row rounded mt-5" style="background-color: rgb(255, 228, 91);">
          <div class="col-md-2 p-3">
              <img src="/img/menu.png" alt="" width="100%" height="110px">
          </div>
          <div class="col-md mt-3">
              <p><b>Coklat Redvelvet </b></p>
              <p>Jumlah : 1</p>
              <p>Dipesan oleh : <b>Nina Sintiah</b></p>
          </div>
          <div class="price col-md-3 mt-3">
              <p>Harga : <b>12.000 x 1</b></p>
              <p>Total : <b>12.000</b></p>
              <p><b><i>Pesanan selesai dibuat</i></b></p>
          </div>
      </div>
      <div class="row rounded mt-5" style="background-color: rgb(255, 228, 91);">
          <div class="col-md-2 p-3">
              <img src="/img/menu.png" alt="" width="100%" height="110px">
          </div>
          <div class="col-md mt-3">
              <p><b>Tiramisu Cruncy</b></p>
              <p>Jumlah : 2</p>
              <p>Dipesan oleh : Andini Aprilian</p>
          </div>
          <div class="price col-md-3 mt-3">
              <p>Harga : <b>9.000 x 2</b></p>
              <p>Total : <b>18.000</b></p>
              <p><b><i>Pesanan selesai dibuat</i></b></p>
          </div>
      </div>
    </div>
      
<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

@endsection