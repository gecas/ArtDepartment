@extends('admin')

@section('content')
<div class="col-md-8 col-md-offset-3" style="padding-top:70px;">
				  <h3 class="text-left">Redaguoti open sessions sritį</h3>
        		<div class="application-form-wrap">
            @include('errors.list')
        		<div class="border-top-left" style="z-index:-1;"></div>
            <br/>
            <div class="col-md-10">
                <form role="form" method="POST" action="/dashboard/apply/openSessions/{!! $openSessions->id !!}/redaguoti" class="application-form" id="applyNowForm">
                {{ csrf_field() }}

                  <div class="form-group">
                  	<label>Open sessions tekstas</label>
                  	<textarea class="form-control" name="openSessionsText" rows="10">{!! $openSessions->openSessionsText !!}</textarea>
                  </div>

                  <button type="submit" class="btn apply-now apply-now-submit">Pakeisti</button>

                </div>

                </form>
                
                </div>
</div>


@endsection