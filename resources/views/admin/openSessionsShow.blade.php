@extends('admin')

@section('content')
<div class="col-md-8 col-md-offset-2" style="margin-bottom:2%;padding-top:70px;">
		<a href="/dashboard/open_sessions" class="btn apply-now back">Grįžti</a>
        	<h3>Išsami informacija (Open Sessions)</h3>
        	<span class="glyphicon glyphicon-print print" title="Spausdinti" onclick="printPage()"></span>

        		<div class="application-form-wrap">
        		<div class="border-top-left" style="z-index:-1;"></div>
            <br/>
            <div class="col-md-6" style="word-break:break-word;">
            

                  <div class="form-group" style="">
                      <label>Vardas :</label>
                      <p><em>{!! $openSessionsShow->name !!}</em></p>
                  </div>

                  <div class="form-group">
                     <label>Pavardė :</label>
                      <p><em>{!! $openSessionsShow->surname !!}</em></p>
                  </div>

                  <div class="form-group">
                      <label>El.paštas :</label>
                      <p><a href="mailto:{!! $openSessionsShow->email !!}" target="_top">{!! $openSessionsShow->email !!}</a></p>
                  </div>

                  <div class="form-group">
                      <label>Film school/company :</label>
                      <p><em>{!! $openSessionsShow->company !!}</em></p>
                  </div>

                  <div class="form-group">
                      <label>Adresas :</label>
                      <p><em>{!! $openSessionsShow->address !!}</em></p>
                  </div>

                  <div class="form-group">
                      <label>Miestas :</label>
                      <p><em>{!! $openSessionsShow->city !!}</em></p>
                  </div>

                  <div class="form-group">
                      <label>Telefonas :</label>
                      <p><em>{!! $openSessionsShow->phone !!}</em></p>
                  </div>

                  <div class="form-group">
                      <label>Why is it important for you to participate in this training session? :</label>
                      <p><em>{!! $openSessionsShow->training !!}</em></p>
                  </div>

                  </div>
                  
                
                </div>
                </div>
@endsection