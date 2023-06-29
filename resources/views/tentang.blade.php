@extends('layout.template')

@section('title', 'Golden Stick Futsal')

@section('header5', 'header5')

@section('active-tentang', 'active')

@section('content')
    <div class="back">
        <h2>Tentang</h2>
    </div>
    <div class="sap_tabs">
        <div class="container">

            <div style="display: flex; justify-content: center; align-items:center;">

                <img src="{{ asset('assets2/images/image1.jpeg') }}" class="img-responsive" style="width: 400px; height:300px;" alt="" />
                <img src="{{ asset('assets2/images/image2.jpeg') }}" class="img-responsive" style="width: 400px; height:300px;" alt="" />
                <img src="{{ asset('assets2/images/image3.jpeg') }}" class="img-responsive" style="width: 400px; height:300px;" alt="" />
                
            </div>

        </div>
    </div>
    <!---->
	<!---->
	<div class="container" style="margin-bottom: 30px;">
		<div class="contact">
            
			<div class=" contact-top-in">
				<h3>View On Map</h3>
				<div class="map">
					<iframe
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.297875417476!2d106.83711171413891!3d-6.355473563943208!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec3f300d8c8b%3A0xbf02114bf37f62af!2sSerba%20ada!5e0!3m2!1sid!2sid!4v1624005887357!5m2!1sid!2sid"
						frameborder="0" style="border:0" allowfullscreen></iframe>

				</div>

				<p><i class="far fa-map"></i> Jl. Komjen.Pol.M.Jasin No.26, 
					Tugu, Kec. Cimanggis, Kota Depok, Jawa Barat 16451 </p>

			</div>
		</div>
	</div>

@endsection