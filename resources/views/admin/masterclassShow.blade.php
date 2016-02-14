@extends('admin')

@section('content')
<div class="col-md-8 col-md-offset-2" style="margin-bottom:2%;padding-top:70px;">
		<a href="/dashboard/masterclass" class="btn apply-now back">Grįžti</a>
        	<h3>Išsami informacija (masterclass)</h3>
        	<span class="glyphicon glyphicon-print print" title="Spausdinti" onclick="printPage()"></span>

        		<div class="application-form-wrap">
        		<div class="border-top-left" style="z-index:-1;"></div>
            <br/>
            <div class="col-md-6" style="word-break:break-word;">
            
               
               <div class="form-group">
                    <label>Nuotrauka :</label>
                    <div><img src="/{!! $masterclassShow->picture_path.$masterclassShow->picture_name !!}"  height="300px" style="max-width:100%"></div>
                  </div>

                  <div class="form-group" style="">
                      <label>Vardas :</label>
                      <p><em>{!! $masterclassShow->name !!}</em></p>
                  </div>

                  <div class="form-group">
                     <label>Pavardė :</label>
                      <p><em>{!! $masterclassShow->surname !!}</em></p>
                  </div>

                  <div class="form-group">
                      <label>El.paštas :</label>
                      <p><a href="mailto:{!! $masterclassShow->email !!}" target="_top">{!! $masterclassShow->email !!}</a></p>
                  </div>

                  <div class="form-group">
                      <label>Film school/company :</label>
                      <p><em>{!! $masterclassShow->company !!}</em></p>
                  </div>

                  <div class="form-group">
                      <label>Adresas :</label>
                      <p><em>{!! $masterclassShow->address !!}</em></p>
                  </div>

                  <div class="form-group">
                      <label>Miestas :</label>
                      <p><em>{!! $masterclassShow->city !!}</em></p>
                  </div>

                  <div class="form-group">
                      <label>Šalis :</label>
                      <p><em>{!! $masterclassShow->country->title !!}</em></p>
                  </div>

                  <div class="form-group">
                      <label>Telefonas :</label>
                      <p><em>{!! $masterclassShow->phone !!}</em></p>
                  </div>

                  <div class="form-group">
                      <label>Gimimo data :</label>
                      <p><em>{!! $masterclassShow->birth_date !!}</em></p>
                  </div>

                  </div>
                  
                  <div class="col-md-6">

                  <div class="form-group">
                  	<label>* How would you describe yourself in 30 seconds making-of? 
                  	(up to 450 characters)</label>
                    <p><em>{!! $masterclassShow->description !!}</em></p>
                  </div>
                  

                  <div class="form-group">
                  	<label>* What do you find the most challenging in the work 
					of the art department? (up to 450 characters)</label>
                 	<p><em>{!! $masterclassShow->challenge !!}</em></p>
                  </div>

                  <div class="form-group">
                  	<label>* Name a few most important character features a good production designer must possess. (up to 450 characters)</label>
                  	<p><em>{!! $masterclassShow->features !!}</em></p>
                  </div>

                  <div class="form-group">
                  	<label>* Who are three of your heroes of the art department? Give us at also the reason why do they inspire you. (up to 450 characters)</label>
                  	<p><em>{!! $masterclassShow->heroes !!}</em></p>
                  </div>

                  
                  <div class="form-group">
                  	<label>* What is a movie, which gave a birth to the first thought of working in this industry? (up to 450 characters)</label>
                  	<p><em>{!! $masterclassShow->thought !!}</em></p>
                  </div>

                  <div class="form-group">
                  	<label>* What topics you would like to discuss in Art Department Masterclass?  (up to 450 characters)</label>
                  	<p><em>{!! $masterclassShow->topics !!}</em></p>
                  </div>

                  <div class="form-group">
                  	<label>CV</label>
                  	<p>
                  	<a href="/{!! $masterclassShow->cv_path.$masterclassShow->cv_name !!}" download>Atsisiųsti
                  	</a>
                  	</p>
                  </div>


                  <div class="form-group">
                  	<label>Portfolio</label>
                  	<p>
                  	<a href="/{!! $masterclassShow->portfolio_path.$masterclassShow->portfolio_name !!}" download>Atsisiųsti
                  	</a>
                  	</p>
                  </div>

				@if (($masterclassShow->portfolio_link) != '')
                  <div class="form-group">
                     <label>Portfolio nuoroda</label>
                  	<p>
                  	<a href="{!! $masterclassShow->portfolio_link !!}" target="_blank">Portfolio nuoroda
                  	</a>
                  	</p>
                  </div>
				@endif

                </div>
                
                </div>
                </div>
@endsection