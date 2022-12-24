@extends('welcome')
@section('content')
<div class="alert alert-info" role="alert">
    <h1>SNACK</h1>
</div>

<div class="row">
    <div class="col">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('nasgor.jpeg') }}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nasi Goreng Teri</h5>
              <p class="card-text">Nasi Goreng Teri ini adalah sebuah makanan khas dari nenek moyang kita yang memiliki cita rasa gurih dan nikmat</p>
              <a href="#" class="btn btn-primary">Pesan</a>
            </div>
          </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('ayamgeprek.jpg') }}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Ayam Geprek Asaljadi</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Pesan</a>
            </div>
          </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('nasiliwet.jpeg') }}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nasi liwet</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Pesan</a>
            </div>
          </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('mieayam.jpg') }}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Mie Ayam pangsit</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Pesan</a>
            </div>
          </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('seblakceker.jpg') }}">
            <div class="card-body">
              <h5 class="card-title">Seblak Ceker</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Pesan</a>
            </div>
          </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('ayamladahitam.jpg') }}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Ayam Lada Hitam</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Pesan</a>
            </div>
          </div>
    </div>
</div>
@endsection
