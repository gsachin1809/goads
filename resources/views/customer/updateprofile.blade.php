@extends('layouts.app')

@section('content')

	<div class="container">
	    <h1 class="well">Registration Form </h1>
			<div class="col-lg-12 well">
			<div class="row">
				<form action="/customer/myprofile/update" method="post">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>First Name</label>
								<input type="text" placeholder="Enter First Name Here.." class="form-control" value="{{ $profile->first_name }}">
							</div>
							<div class="col-sm-4 form-group">
								<label>Middle Name</label>
								<input type="text" placeholder="Enter Middle Name Here.." class="form-control" value="{{ $profile->middle_name }}">
							</div>
							<div class="col-sm-4 form-group">
								<label>Last Name</label>
								<input type="text" placeholder="Enter Last Name Here.." class="form-control" value="{{ $profile->last_name }}">
							</div>
						</div>					
						<div class="col-sm-12 form-group">
							<label>Address</label>
							<textarea placeholder="Enter Address Here.." rows="3" class="form-control" value="{{ $profile->address }}"></textarea>
						</div>	
						
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>Gender</label>
								<input type="text" placeholder="Enter City Name Here.." class="form-control">
							</div>	
							<div class="col-sm-4 form-group">
								<label>Marital Status</label>
								<input type="text" placeholder="Enter State Name Here.." class="form-control">
							</div>	
							<div class="col-sm-4 form-group">
								<label>Citizenship</label>
								<input type="text" placeholder="Enter Zip Code Here.." class="form-control" value="{{ $profile->citizenship }}">
							</div>		
						</div>
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>PAN number</label>
								<input type="text" placeholder="Enter City Name Here.." class="form-control" value="{{ $profile->pan_number }}">
							</div>	
							<div class="col-sm-4 form-group">
								<label>Occuption Type</label>
								<input type="text" placeholder="Enter State Name Here.." class="form-control" value="{{ $profile->type_of_occuption }}">
							</div>	
							<div class="col-sm-4 form-group">
								<label>Contact Number</label>
								<input type="text" placeholder="Enter Zip Code Here.." class="form-control">
							</div>		
						</div>
						<div class="row">
							<div class="col-sm-12 form-group">
								<label>Email</label>
								<input type="text" placeholder="Enter Designation Here.." class="form-control" value="{{ $profile->email }}">
							</div>		
							
						</div>						
					<button type="submit" class="btn btn-lg btn-info">Submit</button>					
					</div>
				</form> 
			</div>
		</div>
	</div>

@stop