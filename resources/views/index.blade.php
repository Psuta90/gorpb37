@extends('layout.template')

@section('title', 'Golden Stick Futsal')

@section('active-home', 'active')

@section('content-header')	

    <!-- <div class="banner">
        <div class="banner-top">
            <h2>GOR PB73</h2>
        </div>
        <div class="now">
            <a class="morebtn" href="{{ route('booking') }}">Pesan Sekarang</a>
            <div class="clearfix"> </div>
        </div>
    </div> -->

    <!-- Background image -->
  <div id="intro-example" class="p-5 text-center bg-image"
    style="background-image: url('https://images.tokopedia.net/blog-tokopedia-com/uploads/2021/01/Ukuran-Lapangan-Bulu-Tangkis.jpg');">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white">
          <h1 class="mb-3">GOR PB73</h1>
          <a class="btn btn-outline-warning btn-lg m-2" href="{{ route('booking') }}"
            role="button" rel="nofollow" target="_blank">Pesan Sekarang</a>
        </div>
      </div>
  </div>
  <!-- Background image -->

@endsection

@section('content')
    <!-- <div class="sap_tabs">
        <div class="container">

            <div style="margin-bottom: 10px; display: flex; justify-content: center; align-items:center;">

                <img src="{{ asset('lapangan/LP0001_60ed1288437e3.jpg') }}" class="img-responsive" style="width: 500px; height:300px;" alt="" />
                
            </div>
            <p style="text-align: center; text-transform: uppercase; font-size: 20px; font-weight: 600;">Lapangan 1</p>
            <p style="text-align: center; font-size: 18px; margin-bottom: 20px">( VYNIL )</p>
            
            <div style="margin-bottom: 10px; display: flex; justify-content: center; align-items:center;">
                
                <img src="{{ asset('lapangan/LP0002_60e82e9e883d5.jpg') }}" class="img-responsive" style="width: 500px; height:300px;" alt="" />
                
            </div>
            <p style="text-align: center; text-transform: uppercase; font-size: 20px; font-weight: 600;">Lapangan 2</p>
            <p style="text-align: center; font-size: 18px; margin-bottom: 20px">( VYNIL )</p>
            
            <div style="margin-bottom: 10px; display: flex; justify-content: center; align-items:center;">
                
                <img src="{{ asset('lapangan/LP0003_60ece768eb88b.jpg') }}" class="img-responsive" style="width: 500px; height:300px;" alt="" />
                
            </div>
            <p style="text-align: center; text-transform: uppercase; font-size: 20px; font-weight: 600;">Lapangan 3</p>
            <p style="text-align: center; font-size: 18px; margin-bottom: 20px">( VYNIL )</p>

        </div>
    </div> -->
    <div class="container mt-5">
        <div class="row">
            <div class="col">
            <div class="card text-center h1">
                <div class="card-header">
                    Lapangan 1
                </div>
                <div class="card-body">
                    <img src="https://asset.kompas.com/crops/NdFZR4De7xPg7K04QSzPWRCrKLg=/10x0:915x603/750x500/data/photo/2021/11/12/618e70119b754.jpeg" class="card-img-top mb-5" alt="...">
                    <a href="{{ route('booking') }}" class="btn btn-warning">Pesan Sekarang</a>
                </div>
            </div>
            </div>
        </div>
    </div>

@endsection