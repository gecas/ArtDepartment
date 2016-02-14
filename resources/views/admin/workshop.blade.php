@extends('admin')

@section('content')
<div class="col-md-8 col-md-offset-3" style="padding-top:70px;">
				<h3 class="text-left">Redaguoti workshop sritį</h3>
        		<div class="application-form-wrap">
            @include('errors.list')
        		<div class="border-top-left" style="z-index:-1;"></div>
            <br/>
            <div class="col-md-10">
                <form role="form" method="POST" action="/dashboard/workshops/{!! $workshop->id !!}/redaguoti" class="application-form" id="applyNowForm">
                {{ csrf_field() }}

                  <div class="form-group">
                  	<label>Workshops 15/16 tekstas</label>
                  	<textarea class="form-control" name="workshops" rows="10">{!! $workshop->workshops !!}</textarea>
                  </div>

                  <button type="submit" class="btn apply-now apply-now-submit">Pakeisti</button>

                </div>

                </form>
                
                </div>
</div>


@endsection