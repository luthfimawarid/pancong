@extends('pamer.main1')
{{-- @section('title', $title) --}}
@section('stylesheets')
    <link rel="stylesheet" href="{{asset('css/deskripsi.css')}}">
@endsection
@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"> 
    <div class="deskripsi">
      @foreach ($selectItem as $pcg)
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    {{-- <img src="{{ asset('img/' . $pcg->foto) }}" alt="Group 52"> --}}
                    <img src="{{ asset('/img/' . $item->foto) }}" alt="" width="100%" height="110px">

                </div>
                <div class="col text-start">
                  <div class="nama">
                    <p>{{$pcg->nama}}</p>
                    <p>{{$pcg->harga}}</p>
                  </div>
                  <h4>{{$pcg->deskripsi}}</h4>
                    <form action="{{ route('checkout',$pcg->id_menu)}}" method="POST" enctype="multipart/form-data">
                      @csrf
                    <input type="number" min="1" name="kuantitas" value="1">
                    <select name="option" id="">
                      <option value="matang">Matang</option>
                      <option value="setengah matang">Setengah Matang</option>
                    </select>
                    <button type="submit" class="btn btn-primary">CheckOut</button>
                  </form>
                    {{-- <button class="outline-btn">Matang</button>
                    <button class="outline-btn">Setengah Matang</button> --}}
                </div>
            </div>
        </div>
      @endforeach
    </div>
    <div class="bungkus4">
      <a href="/pancongs" class="back">Kembali</a>
    </div>

@endsection

