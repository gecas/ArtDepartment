@extends('admin')

@section('content')
<div class="col-md-8 col-md-offset-3" style="padding-top:70px;">
				  <h3 class="text-left">Redaguoti our heroes sritį</h3>
        		<div class="application-form-wrap">
            @include('errors.list')
        		<div class="border-top-left" style="z-index:-1;"></div>
            <br/>
            <div class="col-md-10">
                <form role="form" method="POST" action="/dashboard/our-heroes/{!! $heroes->id !!}/redaguoti" class="application-form" id="applyNowForm">
                {{ csrf_field() }}
                  
                  <div class="form-group">
                  	<label>ALLAN STARSKI tekstas</label>
                  	<textarea class="form-control" name="starski" rows="10">{!! $heroes->starski !!}</textarea>
                  </div>

                  <div class="form-group">
                    <label>FLEUR WHITLOCK tekstas</label>
                    <textarea class="form-control" name="fleur" rows="10">{!! $heroes->fleur !!}</textarea>
                  </div>

                  <div class="form-group">
                    <label>GRENVILLE HORNER tekstas</label>
                    <textarea class="form-control" name="grenville" rows="10">{!! $heroes->grenville !!}</textarea>
                  </div>

                  <div class="form-group">
                    <label>JETTE LEHMANN tekstas</label>
                    <textarea class="form-control" name="jette" rows="10">{!! $heroes->jette !!}</textarea>
                  </div>

                  <div class="form-group">
                    <label>ANDERS ENGELBRECHT tekstas</label>
                    <textarea class="form-control" name="anders" rows="10">{!! $heroes->anders !!}</textarea>
                  </div>

                  <div class="form-group">
                    <label>LÁSZLÓ RAJK tekstas</label>
                    <textarea class="form-control" name="rajk" rows="10">{!! $heroes->rajk !!}</textarea>
                  </div>

                  <div class="form-group">
                    <label>DAVID McHENRY tekstas</label>
                    <textarea class="form-control" name="mchenry" rows="10">{!! $heroes->mchenry !!}</textarea>
                  </div>

                  <button type="submit" class="btn apply-now apply-now-submit">Pakeisti</button>

                </div>

                </form>
                
                </div>
</div>


@endsection