@extends('layouts.app')

@section('content')
<div class="container">
	<form action="/createads/registration" method="post">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="form-group">
			<div >
		    	<h2><label for="email">Type Of Ads</label>
			</div>
		    <div class="row col-sm-12">
		    	<h3><input type="radio" name="typeofads" value="individual">Individual Ads</h3>
		    	<div>
		    		<label><li>As per government rules and regulation Pan Card/ID Card/Adhar Card/Any Other Government Identity is mandatory  in order to register with us.</li></label>
	    		</div>
	    	</div>
	    	<div class="row col-sm-12">
		    	<h3><input type="radio" name="typeofads" value="company">Corporate/ Company Ads</h3>
		    	<div><label><li>As Per Government rules and regulation ROC / Incorporation Certificate/ Firm Registeration/ Partnership Deed is mandatory to register Ads with us.</li></label></div>
	    	</div>
	    	<br>
	    	<div class="col-sm-12">
		    <button class="btn btn-success" > Next</button>
		    </div>
	  	</div>
  	</form>
</div>
@stop
