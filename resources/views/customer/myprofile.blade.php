@extends('layouts.app')

@section('content')	
<div class="container">
	<div class="col-sm-12">
		<table class="table">
		    <tbody>
		      <tr>
		        <td width="50%">
		        @if($profileimage->photo == null )
		        	<img src="https://static.turbosquid.com/Preview/2014/05/16__04_50_44/tguy3_render06.jpg2df93298-c5d1-47e0-a02a-4025eb03c98aOriginal.jpg" width="100%"></td>
	        	@else 
        			<img src="upload/profileimage/{{ $profileimage->photo }}" width="100%"></td>
    			@endif


		        <td>
		        	@if(isset($profile))
		        	 <table class="table table-striped">
					    <tbody>
					    	<tr>
					        	<td>Full name:-</td>
					        	<td>{{ $profile->first_name }} {{ $profile->middle_name }} {{ $profile->last_name }}</td>
					      	</tr>
  					      	<tr>
					        	<td>Gender </td>
					        	<td>{{ $profile->gender}} </td>
					      	</tr>
					      	<tr>
					        	<td> Phone Number</td>
					        	<td> {{ $profile->contact_number }}</td>
					      	</tr>
					      	<tr>
					        	<td>email</td>
					        	<td>{{ $profile->email }}</td>
					      	</tr>
					      	<tr>
					        	<td>Address</td>
					        	<td>{{ $profile->address }}</td>
					      	</tr>
					      	<tr>
					        	<td>marital status</td>
					        	<td>{{ $profile->marital_status }}</td>
					      	</tr>
					      	<tr>
					        	<td>PAN number</td>
					        	<td>{{ $profile->pan_number  }}</td>
					      	</tr>
					      	<tr>
					        	<td>Citizenship</td>
					        	<td>{{ $profile->citizenship }}</td>
					      	</tr>
					      	<tr>
					        	<td>Token points</td>
					        	<td> 120</td>
					      	</tr>
					      	
					    </tbody>
					  </table>
					@endif
					  <table class="table table-striped">
					  		<tr>
						      	<td>
						      		<button type="button" class="btn btn-info btn-lg" onclick="window.location='/myprofile/update'">Update Details</button>

					      		</td>
					      		<td>
						      		<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">chagne Pic</button>

					      		</td>
				      		</tr>
			      		</table>
				  	
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
				      	<form action="myprofile/uploadimage" method="post" enctype="multipart/form-data">

				      		<input type="hidden" name="_token" value="{{ csrf_token() }}">
				      		<input type="file" name="profileimage">
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
