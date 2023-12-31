@extends('pamer.main')
@section('title', $title)
@section('stylesheets')
    <link rel="stylesheet" href="{{asset('css/about.css')}}">
@endsection
@section('content')
    <h1>{{ $about }}</h1>
<!-- konten1 start -->
<div class="content-container">
    <div class="circle1"></div>
    <div class="circle2"></div>
    <div class="circle3"></div>
    <div class="img1-container">
        <img src="img/Group47.png" alt="" class="img1 mt-5">
        <div class="text-over-img1">
            <p name="#aboutus">ABOUT US</p>
        </div>
        <img src="img/Group 52.png" alt="Gambar Contoh" class="img2">
    </div>
    <div class="text-container ">
        <p>Kue pancong yang merupakan produk utama kami adalah kue khas Betawi (Jakarta). 
            Namun dengan ciri khas dan penyesuaian resep Pancong Pocong ingin menjangkau berbagai kalangan di seluruh Indonesia. 
            Pancong Pocong menghadirkan berbagai varian menu yang modern dan menyesuaikan permintaan pasar. 
            Selain berfokus pada inovasi rasa kami tak melupakan pondasi utama dunia kuliner. 
            Dengan menjamin citarasa yang berkualitas juga konsisten melalui bahan baku yang terpilih dan berkualitas tinggi,
            namun kami tetap menawarkan harga terjangkau bagi semua kalangan.</p>
        <a href="/aboutus" class="button">Selengkapnya <i class="bi bi-arrow-right-circle"></i></a>
    </div>
</div>
<!-- kontent1 end -->

<!-- kontent2 start -->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffd700" fill-opacity="0.35" d="M0,96L48,101.3C96,107,192,117,288,133.3C384,149,480,171,576,176C672,181,768,171,864,160C960,149,1056,139,1152,138.7C1248,139,1344,149,1392,154.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
<div class="kategori">
        <div class="kiri">
            <h1>Muntakhobil Fuad</h1>
            <h5>"Rasa Tradisi, Sentuhan Modern, dan Kualitas Terbaik"</h5>
            <p>Kami meyakini bahwa kelezatan sejati pancong lumer terletak pada penghormatan terhadap tradisi kuliner Indonesia. Dalam setiap hidangan, kami berkomitmen untuk mempertahankan keaslian rasa dan teknik tradisional pembuatan pancong lumer.
                Dengan tetap menghargai keaslian, kami percaya bahwa inovasi adalah kunci untuk tetap relevan. Kami berusaha untuk menciptakan variasi pancong lumer yang mengejutkan tanpa kehilangan esensi dan kekayaan cita rasa tradisional.
                Dan kami meyakini bahwa kualitas bahan baku adalah fondasi dari setiap hidangan yang lezat. Oleh karena itu, kami berkomitmen untuk selalu menggunakan bahan-bahan berkualitas tinggi, termasuk mendukung petani lokal untuk memastikan keberlanjutan dan keberagaman produk.
        </div>
        <div class="kanan">
            <img src="/img/profil.jpg" alt="">
        </div>
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffd700" fill-opacity="0.35" d="M0,96L48,101.3C96,107,192,117,288,133.3C384,149,480,171,576,176C672,181,768,171,864,160C960,149,1056,139,1152,138.7C1248,139,1344,149,1392,154.7L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
<!-- kontent2 end -->

{{-- kontent3 start --}}
<div class="bungkar">
    <div class="card" style="width: 15rem; height: 20rem;">
        <img src="/img/nina.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="1" style="font-weight: 600; border-top: 2px solid black; border-bottom:2px solid black; font-style:italic; margin-bottom:2rem;">Nina Sintiah</p>
            <p>ninasintiah11@gmail.com</p>
            <p>Politeknik Negeri Indramayu</p>
            <p style="margin-bottom: 3rem;">Teknik Informatika</p>
            <p class="card-text">FlavourOfPamer Development</p>
        </div>
    </div>
    <div class="card" style="width: 15rem; height: 20rem;">
        <img src="/img/luthfi.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="1" style="font-weight: 600; border-top: 2px solid black; border-bottom:2px solid black; font-style:italic; margin-bottom:2rem; font-size:.8rem;">Luthfi Mawarid Putra Alamsyah</p>
            <p>lutfhiemawarid@gmail.com</p>
            <p>Politeknik Negeri Indramayu</p>
            <p style="margin-bottom: 3rem;">Teknik Informatika</p>
            <p class="card-text">FlavourOfPamer Development</p>
        </div>
    </div>
    <div class="card" style="width: 15rem; height: 20rem;">
        <img src="/img/andin2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <p style="font-weight: 600; border-top: 2px solid black; border-bottom:2px solid black; font-style:italic; margin-bottom:2rem;">Andini Aprillian</p>
            <p>andinia92@gmail.com</p>
            <p>Politeknik Negeri Indramayu</p>
            <p style="margin-bottom: 3rem;">Teknik Informatika</p>
            <p class="card-text">FlavourOfPamer Development</p>
        </div>
    </div>
</div>
{{-- kontent3 end --}}


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
@endsection