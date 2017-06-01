@extends('layouts.app')

@section('content')	
<div class="container">
	<div class="container">
	  <h2>My Ads</h2>
		<div class="row">
			@foreach ($ads as $myads)
			    <div class="col-md-4">
			      <div class="thumbnail">
			        <a href="/ads/view/{{ $myads->ads_id }}">
			          <img src="/upload/ads/{{ $myads->image }}" alt="{{$myads->product_name }}" style="width:300px;height: 200px">
			          <div class="caption">
			          
			            <p><strong>Name </strong>:- {{$myads->product_name }} <strong> Price</strong>  :- {{$myads->product_price }}</p>
			            <p>{{$myads->product_desc }}</p>
			          </div>
			        </a>
			      </div>
			    </div>
		    @endforeach
		</div>
	</div>
</div>
@stop
