<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body> 

<div class="container">

	<div class="well">
		<div class="row">

			<div class="col-sm-2 dropdown">
			    <div class="btn btn-default dropdown-toggle" id="menu1" data-toggle="dropdown">Catogries
			    <span class="caret"></span></div>
			    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
			      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Electronic</a></li>
			      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Cloths</a></li>
			      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Jobs</a></li>
			      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Computers</a></li>
			      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Mobiles</a></li>
			      
			    </ul>
		  	</div>
		  	<div class="row col-lg-4">
				
			</div>
			<div class="row col-lg-4">
				<samp class="pull-right">Home | Contact Us | FAQ | Traffic | </samp>
			</div>
			<div class="row col-lg-2">
				<div class="row dropdown pull-right">
			    <div class="btn btn-default dropdown-toggle" id="menu1" data-toggle="dropdown">My Account
			    <span class="caret"></span></div>
			    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
			      <li role="presentation"><a role="menuitem" tabindex="-1" href="myprofile">Profile</a></li>
			      <li role="presentation"><a role="menuitem" tabindex="-1" href="chat">Chat</a></li>
			      <li role="presentation"><a role="menuitem" tabindex="-1" href="wallet">wallet</a></li>
			      <li role="presentation"><a role="menuitem" tabindex="-1" href="myads">My ads</a></li>
			      <li role="presentation"><a role="menuitem" tabindex="-1" href="createads">Create ads</a></li>
			      <li role="presentation"><a role="menuitem" tabindex="-1" href="/">logout</a></li>
			    </ul>
		  	</div>
			</div>
			
			
		</div> 	
		
	</div>
	@yield('customerpages')
</div>

</body>
</html>

