@extends('layouts.app')

@section('content')	
<div class="container">
	<div class="col-sm-12">
		<table class="table">
		    <tbody>
		      <tr>
		        <td width="50%"><img src="https://static.turbosquid.com/Preview/2014/05/16__04_50_44/tguy3_render06.jpg2df93298-c5d1-47e0-a02a-4025eb03c98aOriginal.jpg" width="100%"></td>
		        <td>
		        	 <table class="table table-striped">
					    <tbody>
					    	<tr>
					        	<td>Full name:-</td>
					        	<td>Sachin Gupta</td>
					      	</tr>
  					      	<tr>
					        	<td>Gender </td>
					        	<td>Male </td>
					      	</tr>
					      	<tr>
					        	<td> Phone Number</td>
					        	<td> 9538614612</td>
					      	</tr>
					      	<tr>
					        	<td>email</td>
					        	<td>gsachin1809@gmail.com</td>
					      	</tr>
					      	<tr>
						      	<td>
						      		<button type="button" class="btn btn-info btn-lg" onclick="window.location='/customer/myprofile/update'">Update Details</button>

					      		</td>
				      		</tr>

					    </tbody>
					  </table>
		        </td>
		      </tr>
		    </tbody>
		  </table>
	</div>
</div>
@stop
