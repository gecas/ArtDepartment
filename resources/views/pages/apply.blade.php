@extends('layout')

@section('content')
<div class="col-md-6 col-md-offset-3" style="margin-top:4%;">
	 <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#masterclass" aria-controls="masterclass" role="tab" data-toggle="tab">Masterclass</a></li>
    <!-- <li role="presentation"><a href="#open" aria-controls="open" role="tab" data-toggle="tab">Open sessions</a></li> -->
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="masterclass">
    	@include('partials.masterclass')
    </div><!-- 
    <div role="tabpanel" class="tab-pane" id="private">...</div> -->
    <div role="tabpanel" class="tab-pane" id="open">
    	@include('partials.open_sessions')
    </div>
  </div>

</div>
@endsection