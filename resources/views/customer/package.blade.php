@extends('layouts.app')

@section('content')
    
<div class="container">
        <div class="col-xs-6 col-md-12">
        
            <form action="payment" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="payment_for" value="package">
            <input type="hidden" name="ads" value="{{ $ads->ads_id }}">
            <span class="label label-danger">Please do not enter any cofidensial data</span>
            <div class="panel panel-default credit-card-box">
                <div class="panel-heading display-table" >
                    <div class="row display-tr text-center" >
                        <h3 class="panel-title display-td" >Package Details</h3>
                    </div>                    
                </div>
                <div class="panel-heading display-table" >
                    <div class="row display-tr text-center" >
                        <h3 class="panel-title display-td" >Product Name :- {{ $ads->product_name or ''}}</h3>
                    </div>                    
                </div>
                <div class="panel-body">
                        <div class="form-group">
                            <div class="radio">
                                <div class="radio">
                                    <label><input type="radio" name="package" value="free" selected>FREE Package</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="package" value="silver">SILVER Package</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="package" value="gold">GOLD Package</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="package" value="platinum">PLATINUM Package</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="package" value="diamond">DIAMOND Package</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="package" value="royal">ROYAL Package</label>
                                </div>
                                
                            </div>
                        </div> 
                        <button type="submit" class="btn btn-lg btn-info" >Submit</button>                     
                </div>
            </div>
        </form>   
    </div>
</div>         
            
                 
@stop