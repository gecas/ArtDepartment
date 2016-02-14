@extends('layout')
@section('content')

	<div class="col-md-6 col-md-offset-3" id="heroes-wrap" style="margin-bottom:20%;">
		<h1 class="text-left">OUR HEROES</h1>

		<h3 class="text-center">REYKJAVIK, 2016</h3>
		<h5 class="text-center">More information coming soon</h5>

		<div class="container heroes">
			<h3 class="text-center">LÁSZLÓ RAJK - Production Designer / Architect</h3>
			<div class="heroes-image" style="width:300px;height:300px;margin:0 auto;position:relative;">
			<div class="border-top-left"></div>
			<div style="background-image:url('/images/rajk.jpg');margin:0 auto;width:300;height:300px;max-width:100%;max-height:100%;background-size:cover;" title="László Rajk"></div>
			</div>
			<div class="triangle-down heroes-detail-button" data-info-id="6" style="margin-bottom:4%;"></div>

			<div class="heroes-info" data-info-block="6">
			<section>
				{!! $heroes->rajk !!}
		 	</section>
		 	</div>

		</div>

		<div class="container heroes">
			<h3 class="text-center">DAVID McHENRY - Production Designer / Draughtsman </h3>
			<div class="heroes-image" style="width:300px;height:300px;margin:0 auto;position:relative;">
			<div class="border-top-right"></div>
			<div style="background-image:url('/images/mchenry.jpg');margin:0 auto;width:300;height:300px;max-width:100%;max-height:100%;background-size:cover;" title="David McHenry"></div>
			</div>
			<div class="triangle-down heroes-detail-button" data-info-id="7" style="margin-bottom:4%;"></div>

			<div class="heroes-info" data-info-block="7">
			<section>
				{!! $heroes->mchenry !!}
		 	</section>
		 	</div>

		</div>		

		<h3 class="text-center">VILNIUS, 2015</h3>

		<div class="container heroes">
			<h3 class="text-center">ALLAN STARSKI - Production Designer</h3>
			<div class="heroes-image" style="width:300px;height:300px;margin:0 auto;position:relative;">
			<div class="border-top-left"></div>
			<div style="background-image:url('/images/starski.jpg');margin:0 auto;width:300;height:300px;max-width:100%;max-height:100%;background-size:cover;" title="ALLAN STARSKI - Production Designer"></div>
			</div>
			<div class="triangle-down heroes-detail-button" data-info-id="1" style="margin-bottom:4%;"></div>

			<div class="heroes-info" data-info-block="1">
			<section>
				{!! $heroes->starski !!}
		 	</section>
		 	</div>

		</div>


		<div class="container heroes">
			<h3 class="text-center">FLEUR WHITLOCK - Art Director / Production Designer</h3>
			<div class="heroes-image" style="width:300px;height:300px;margin:0 auto;position:relative;">
			<div class="border-top-right"></div>
			<div style="background-image:url('/images/fleur.jpg');margin:0 auto;width:300;height:300px;max-width:100%;max-height:100%;background-size:cover;background-position:center right;" title="FLEUR WHITLOCK - Art Director / Production"></div>
			</div>
			<div class="triangle-down heroes-detail-button" data-info-id="2" style="margin-bottom:4%;"></div>

			<div class="heroes-info" data-info-block="2">
			<section>
				{!! $heroes->fleur !!}				
		 	</section>
		 	</div>
		</div>


		<div class="container heroes">
			<h3 class="text-center">GRENVILLE HORNER- Production Designer</h3>
			<div class="heroes-image" style="width:300px;height:300px;margin:0 auto;position:relative;">
			<div class="border-top-left"></div>
			<div style="background-image:url('/images/grenville.jpg');margin:0 auto;width:300;height:300px;max-width:100%;max-height:100%;background-size:cover;background-position:center center;" title="GRENVILLE HORNER- Production Designer"></div>
			</div>
			<div class="triangle-down heroes-detail-button" data-info-id="3" style="margin-bottom:4%;"></div>

			<div class="heroes-info" data-info-block="3">
			<section>
				{!! $heroes->grenville !!}
		 	</section>
		 	</div>
		</div>


		<div class="container heroes">
			<h3 class="text-center">JETTE LEHMANN - Production Designer</h3>
			<div class="heroes-image" style="width:300px;height:300px;margin:0 auto;position:relative;">
			<div class="border-top-right"></div>
			<div style="background-image:url('/images/jette.jpg');margin:0 auto;width:300;height:300px;max-width:100%;max-height:100%;background-size:cover;background-position:center center;" title="JETTE LEHMANN - Production Designer"></div>
			</div>
			<div class="triangle-down heroes-detail-button" data-info-id="4" style="margin-bottom:4%;"></div>

			<div class="heroes-info" data-info-block="4">
			<section>
				{!! $heroes->jette !!}
		 	</section>
		 	</div>
		</div>

		<div class="container heroes">
			<h3 class="text-center">ANDERS ENGELBRECHT - Construction Coordinator & Production Designer</h3>
			<div class="heroes-image" style="width:300px;height:300px;margin:0 auto;position:relative;">
			<div class="border-top-left"></div>
			<div style="background-image:url('/images/anders.jpg');margin:0 auto;width:300;height:300px;max-width:100%;max-height:100%;background-size:cover;background-position:center top;" title="ANDERS ENGELBRECHT - Construction Coordinator & Production Designer"></div>
			</div>
			<div class="triangle-down heroes-detail-button" data-info-id="5" style="margin-bottom:4%;"></div>

			<div class="heroes-info" data-info-block="5">
			<section>
				{!! $heroes->anders !!}
		 	</section>
		 	</div>
		</div>

	</div>
@endsection