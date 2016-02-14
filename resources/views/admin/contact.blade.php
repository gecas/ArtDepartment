@extends('admin')

@section('content')
<div class="col-md-8 col-md-offset-3" style="padding-top:70px;">
				  <h3 class="text-left">Redaguoti contact us sritį</h3>
        		<div class="application-form-wrap">
            @include('errors.list')
        		<div class="border-top-left" style="z-index:-1;"></div>
            <br/>
            <div class="col-md-10">
                <form role="form" method="POST" action="/dashboard/contact_us/{!! $contact->id !!}/redaguoti" class="application-form" id="applyNowForm">
                {{ csrf_field() }}

                  <div class="form-group">
                  	<label>Contact tekstas</label>
                  	<textarea class="form-control" name="contacts" rows="10" >{!! $contact->contacts !!}</textarea>
                  </div>

                  <button type="submit" class="btn apply-now apply-now-submit">Pakeisti</button>

                </div>

                </form>
                
                </div>
</div>


@endsection