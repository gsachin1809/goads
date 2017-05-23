@extends('layouts.app')

@section('content')
@if($typeofads != 'company')
	<div class="container">
	    <h1 class="well">Registration Form</h1>
			<div class="col-lg-12 well">
			<div class="row">
				<form action="newads" method="post">
				<input type="hidden" name="_token" value="{{ csrf_token() }}"> 
				<input type="hidden" name="typeofads" value="{{ $typeofads }}">
					<div class="col-sm-12">
					<div class="form-group">
						<label>Pan Card / ID Number</label>
						<input type="file" class="form-control">
						<input type="text" placeholder="Enter PAN Number Here.." class="form-control">
					</div>		
					<div class="form-group">
						<label>Adhar Card</label>
						<input type="file" placeholder="Enter Phone Number Here.." class="form-control">
						<input type="text" placeholder="Enter Adhar Number Here.." class="form-control">
					</div>		
					<div class="form-group">
						<label>DL Card</label>
						<input type="file" placeholder="Enter Phone Number Here.." class="form-control">
						<input type="text" placeholder="Enter DL  Number Here.." class="form-control">
					</div>		
					<div class="form-group">
						<label>Agreement</label>
						<p>
							By Filling this form I hereby declare that the details furnished are true and correct to the best of my knowledge and belief and I undertake to inform you any changes therein, immediately. In case any of the above information is found to be any false or untrue or misleading , iam aware that I may be liable for that.I I hereby declare that I am not making this application for the purpose of contravention of any Act, Rules, Regulations or any statute of legislation or any notifications/directions issued by any governmental or statutory authority from time to time.
						</p>
					</div>		
					
					<button type="submit" class="btn btn-lg btn-info">I agreed</button>					
					</div>
				</form> 
			</div>
		</div>
	</div>
@else 
	<div class="container">
    <h1 class="well">Registration Form</h1>
	<div class="col-lg-12 well">
	<div class="row">
				<form action="newads" method="post">
				<input type="hidden" name="_token" value="{{ csrf_token() }}"> 
				<input type="hidden" name="typeofads" value="{{ $typeofads }}">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Company /firm Name</label>
								<input type="text" placeholder="Enter First Name Here.." class="form-control">
							</div>
							<div class="col-sm-6 form-group">
								<label>Principal of business</label>
								<input type="text" placeholder="Enter Middle Name Here.." class="form-control">
							</div>
						</div>					
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>Pan No</label>
								<input type="text" placeholder="Enter City Name Here.." class="form-control">
							</div>	
							<div class="col-sm-4 form-group">
								<label>Tan No</label>
								<input type="text" placeholder="Enter State Name Here.." class="form-control">
							</div>	
							<div class="col-sm-4 form-group">
								<label>IEC number (Register Number )</label>
								<input type="text" placeholder="Enter Zip Code Here.." class="form-control">
							</div>		
						</div>
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>Telephone number</label>
								<input type="text" placeholder="Enter City Name Here.." class="form-control">
							</div>	
							<div class="col-sm-4 form-group">
								<label>Fax No</label>
								<input type="text" placeholder="Enter State Name Here.." class="form-control">
							</div>	
							<div class="col-sm-4 form-group">
								<label>Email</label>
								<input type="text" placeholder="Enter Zip Code Here.." class="form-control">
							</div>		
						</div>
						<div class="col-sm-12 form-group">
								<label>Authorized Signature Person Name</label>
								<input type="text" placeholder="Enter City Name Here.." class="form-control">
							</div>	
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>DOB</label>
								<input type="text" placeholder="Enter City Name Here.." class="form-control">
							</div>	
							<div class="col-sm-4 form-group">
								<label>Gender</label>
								<input type="text" placeholder="Enter State Name Here.." class="form-control">
							</div>	
							<div class="col-sm-4 form-group">
								<label>Mobile Number</label>
								<input type="text" placeholder="Enter Zip Code Here.." class="form-control">
							</div>		
						</div>
						
						<div class="col-sm-6 form-group">
							<label>Communication Address</label>
							<textarea placeholder="Enter Address Here.." rows="3" class="form-control"></textarea>
						</div>	
						<div class="col-sm-6 form-group">
							<label>perment Address</label>
							<textarea placeholder="Enter Address Here.." rows="3" class="form-control"></textarea>
						</div>	
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>Alter number</label>
								<input type="text" placeholder="Enter City Name Here.." class="form-control">
							</div>	
							<div class="col-sm-4 form-group">
								<label>Marital Status</label>
								<input type="text" placeholder="Enter State Name Here.." class="form-control">
							</div>	
							<div class="col-sm-4 form-group">
								<label>Citizenship</label>
								<input type="text" placeholder="Enter Zip Code Here.." class="form-control">
							</div>		
						</div>
						
						<div class="form-group">
							<label>Pan Card</label>
							<input type="file" placeholder="Enter Phone Number Here.." class="form-control">
							<input type="text" placeholder="Enter PAN Number Here.." class="form-control">
						</div>		
						<div class="form-group">
							<label>Recent Photo has to be uploaded</label>
							<input type="file" placeholder="Enter Phone Number Here.." class="form-control">
						</div>		
						<div class="form-group">
							<div class="radio">
								<label>Select Doc to upload</label>
								<div class="radio">
								  <label><input type="radio" name="optradio" selected>Certificate of incorporation</label>
								  <label><input type="radio" name="optradio">MOA</label>
								  <label><input type="radio" name="optradio">AOA</label>
								  <label><input type="radio" name="optradio">Partnership Deed</label>
								</div>
								
								
								
								

								<input type="file" placeholder="Enter Phone Number Here.." class="form-control">
								</div>
						</div>		
							
						<div class="form-group">
							<label>Agreement</label>
							<p>
								By Filling this form I hereby declare that the details furnished are true and correct to the best of my knowledge and belief and I undertake to inform you any changes therein, immediately. In case any of the above information is found to be any false or untrue or misleading , iam aware that I may be liable for that.I I hereby declare that I am not making this application for the purpose of contravention of any Act, Rules, Regulations or any statute of legislation or any notifications/directions issued by any governmental or statutory authority from time to time.
							</p>
						</div>		
					
						<button type="submit" class="btn btn-lg btn-info" >I agreed</button>					
					</div>
				</form> 
				</div>
	</div>
	</div>
@endif



@stop