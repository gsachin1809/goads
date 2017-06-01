@extends('layouts.app')

@section('content')	
<div class="container">
	<div class="col-sm-12">
		<table class="table">
		    <tbody>
		      <tr>
		        <td width="50%">
		        @if($adsdetails->image == null )
		        	<img src="/upload/ads/home.jpg" width="100%"></td>
	        	@else 
        			<img src="/upload/ads/{{ $adsdetails->image }}" width="100%"></td>
    			@endif


		        <td>
		        	@if(isset($adsdetails))
		        	 <table class="table table-striped">
					    <tbody>
					    	<tr>
					        	<td>Name:-</td>
					        	<td>{{ $adsdetails->product_name }}</td>
					      	</tr>
  					      	<tr>
					        	<td>Description </td>
					        	<td>{{ $adsdetails->product_desc }} </td>
					      	</tr>
					      	<tr>
					        	<td>Price</td>
					        	<td> {{ $adsdetails->product_price }}</td>
					      	</tr>
					      	<tr>
					        	<td>discount</td>
					        	<td>{{ $adsdetails->product_discount }}</td>
					      	</tr>
					      	<tr>
					        	<td>Category</td>
					        	<td>{{ $adsdetails->product_category }}</td>
					      	</tr>
					      	<tr>
					        	<td>User Mission</td>
					        	<td>{{ $adsdetails->mission }}</td>
					      	</tr>
					      	<tr>
					        	<td>User Vission</td>
					        	<td>{{ $adsdetails->vission  }}</td>
					      	</tr>
					      	<tr>
					        	<td>About User</td>
					        	<td>{{ $adsdetails->about_me }}</td>
					      	</tr>
					      	<tr>
					        	<td>Contact person Name</td>
					        	<td>{{ $adsdetails->contact_name }}</td>
					      	</tr>
					      	
					    </tbody>
					  </table>
					@endif
				  	
		        </td>
		      </tr>
		    </tbody>
		  </table>
	  	<div id="myModal" class="modal fade" role="dialog">
			<div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			        <h4 class="modal-title">Modal Header</h4>
			      </div>
			      <div class="modal-body">
			      	<div class="row">
				      	<form action="myadsdetails/uploadimage" method="post" enctype="multipart/form-data">

				      		<input type="hidden" name="_token" value="{{ csrf_token() }}">
				      		<input type="file" name="adsdetailsimage">
				      		<button type="submit"> upload</button>
			      		</form>
		        	</div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			      </div>
			    </div>
			</div>
		</div>
	</div>
</div>
@stop
