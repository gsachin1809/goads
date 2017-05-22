@extends('layouts.app')

@section('content')
    <form class="form-horizontal" action="/createads/payumoney" method="post">
      <fieldset>

      <div class="form-group">
        <label class="col-md-4 control-label" for="Address">About Me</label>
        <div class="col-md-4">                     
          <textarea class="form-control" id="Address" name="Address" placeholder="Description"></textarea>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label" for="Address">Vision </label>
        <div class="col-md-4">                     
          <textarea class="form-control" id="Address" name="Address" placeholder="Description"></textarea>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label" for="Address">Mission</label>
        <div class="col-md-4">                     
          <textarea class="form-control" id="Address" name="Address" placeholder="Description"></textarea>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label" for="User Id">Contact Person Name</label>  
        <div class="col-md-6">
        <input id="User Id" name="User Id" type="text" placeholder="Contact Person Name" class="form-control input-md" required="">
          
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="Mail Id ">Contact Number</label>  
        <div class="col-md-6">
        <input id="Mail Id " name="Contact number " type="text" placeholder="Contact Person number" class="form-control input-md" required="">
          
        </div>



      <div class="form-group">
        <label class="col-md-4 control-label" for="Company Name">Product Name</label>  
        <div class="col-md-6">
        <input id="Product Name" name="Product Name" type="text" placeholder="Product Name" class="form-control input-md" required="">
          
        </div>
      </div>

      <!-- Textarea -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="Address">Description</label>
        <div class="col-md-4">                     
          <textarea class="form-control" id="Address" name="Address" placeholder="Description"></textarea>
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="User Name">Price</label>  
        <div class="col-md-6">
        <input id="User Name" name="User Name" type="text" placeholder="Price" class="form-control input-md" required="">
          
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label" for="Mail Id ">Discount Offered</label>  
        <div class="col-md-6">
        <input id="Mail Id " name="Mail Id " type="text" placeholder="Discount in percentage  " class="form-control input-md" required="">
          
        </div>
      </div>

      <!-- Text input-->
      
      <div class="form-group">
        <label class="col-md-4 control-label" for="Mail Id ">Package</label>  
        <div class="col-md-6">
         <select class="form-control" id="sel1">
        <option>FREE PACKAGE</option>
        <option>SILVER PACKAGE</option>
        <option>GOLD PACKAGE</option>
        <option>PLATINUM PACKAGE</option>
        <option>DIAMOND PACKAGE</option>
        <option>ROYAL PACKAGE</option>
      </select>
          
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 control-label" for="Mail Id ">Categories</label>  
        <div class="col-md-6">
        <input id="Mail Id " name="Mail Id " type="text" placeholder="Mail Id " class="form-control input-md" required="">
          
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label" for="Mail Id ">Image</label>  
        <div class="col-md-6">
        <input id="Mail Id " name="Mail Id " type="file" placeholder="Mail Id " class="form-control input-md" required="">
          
        </div>
      </div>
      <label class="col-md-4 control-label" for="Mail Id "></label>  
        <div class="col-md-6">
        
          <button class="btn btn-success" >Submit </button>  
        </div>
      </div>
      
      <!-- Password input-->
      
@stop