@extends('layouts.app')

@section('content')

<style type="text/css">
                body{
    font-family: 'Roboto', sans-serif;
}
        
		img{
           
            position: absolute;
margin-top: -24%;
             transition: all 1.5s ease-out;
        }
p.caption{
    letter-spacing: 0.15em;
}
        .well{
            background: #fff;
            box-shadow: 0 0 0 0;
            border: 0px;
        }
        .jumbotron{
            background: #fff;
        }
        
        .base-padding{
            padding: 3% 0;
        }
        .well.pricing-table{
/*            padding: 3%;*/
            background: #fff;
            transition:all 0.4s ease-in;
        }
          .well.pricing-table:hover{
                box-shadow:-22px 17px 6px rgba(178, 171, 171, 0.39);
                  transition:all 1s ease-in;
                
              }
        
        .pricing-feature-list{
            padding: 10%;
            background: #444;
            color: #eee;
        }
       .pricing-feature-list .list-group-item {
position: relative;
display: block;
padding: 13px 15px;
margin-bottom: -1px;
background-color: #444;
/* border: 1px solid #6B6B6B; */
font-size: 15px;
           border: 1px solid #444;
           color: #eee;
/* font-weight: 700; */

}
        .pricing-table .pricing-table-holder{
/*            background: #f9f9f9;*/
            background: url('https://photos-1.dropbox.com/t/2/AACCPJ9m57rbGWc_MCafZdl_PJ_Obe5RT5h6vCC2AgVd_A/12/21457980/jpeg/32x32/3/_/1/2/cyan-pentagonal-background.jpg/CLzYnQogASACIAMoAQ/R7WUFO9GypFsA2Vky1-Q8oSfizbkYKau5N9LHpAUtq0?size=1280x960') center center ;
            background-size: cover;
            padding: 6%;
        }
.pricing-table .pricing-table-holder h3,.pricing-table .pricing-table-holder p{
    color: #555;
}
        .btn-info{
            color: #fff;
background-color: #E57575;
border-color: #F95353;
/* border-radius: 0; */
padding: 3%;
transition: all 0.6s ease-in;
        }
        .custom-button-group{
            
background: #f9f9f9;
padding: 0%;
        }
        .btn-royal-blue{
            color: #FFF;
background-color: #23A4F2;
border-color: #23A4F2;
                        transition: all 0.4s ease-in;
        }
        .btn-royal-blue:hover{
            color: #eee;
            transition: all 0.5s ease-in;
        }
    </style>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
<div class="jumbotron">
        <div class="container text-center">
             <h1 class="page-header">PRICING PLANS</h1>
	    <p class="lead">choose from our simple and clear plans</p>
        </div>
	   
	</div>
	
	<div class="container ">
	    <div class="row">
		<table class="table">
		<tbody>

		      <tr>

		        <td>
          <div class="col-md-12 well pricing-table" style="background-color:#C0C0C0">
		  
              <div class="pricing-table-holder">
                  <center>
                      <img src="http://www.placehold.it/100X100" class="img-responsive img-circle" alt="">
                      <h3><b>FREE PACKAGE</b></h3>
                      <p class="caption">
                          Get Started with Goads Free
                      </p>
                  </center>
              </div>
              <div class="pricing-feature-list">
                  <ul class="list-group">
                      <li class="list-group-item">4 X 4 Inches Box</li>
                      <li class="list-group-item">100 Clicks Per Month</li>
                      <li class="list-group-item">500 Promotional Mails Per Month</li>
                      <li class="list-group-item">For 5 5 to 10 Seconds Brand Promotionl Ads in our other sites like Shopping, Friends, Chat etc.</li>
                      <hr>
                       <li class="list-group-item">Charges of 5% is applicable on all your sales that were happened through our website..</li>
                      <li class="list-group-item">Free Package is valid for 3 Months. There after a monthly charge of 6 GBP applicable.</li>
                      
                    </ul>
              </div>
              
              <div class="price-table-button-holder">
                                <button class="btn btn-info btn-block">
                      GET NOW
                  </button>
              </div>
          </div>
		  </td>
		  <td>
          <div class="col-md-12 well pricing-table" style="background-color:#C0C0C0">
              <div class="pricing-table-holder">
                  <center>
                      <img src="http://www.placehold.it/100X100" class="img-responsive img-circle" alt="">
                      <h3><b>SILVER PACKAGE</b></h3>
                      <p class="caption">
                         Get Started With Goads Silver
                      </p>
                  </center>
              </div>
              <div class="pricing-feature-list">
                  <ul class="list-group">
                      <li class="list-group-item">4 X 4 Inches Ad Box</li>
                      <li class="list-group-item">12 GBP per Month</li>
                      <li class="list-group-item">For Year package 120 GBP</li>
                      <li class="list-group-item">2000 Clicks Per Month</li>
                      <li class="list-group-item">10000 Promotional Mails Per Month</li>
                      <hr>
                       <li class="list-group-item">5 to 10 Seconds Brand Promotionl Ads in our other sites like Meet, Chats etc.</li>
                      <li class="list-group-item">Charges of 5% is applicable on all your sales that were happened through our website.</li>
                      <li class="list-group-item">If you have your own website, every month we are providing (promotion ) 100 clicks additional.</li>
              </div>
              <div class="price-table-button-holder">
                                <button class="btn btn-info btn-block">
                      GET NOW
                  </button>
              </div>
          </div>
		   </td>
		  <td>
          <div class="col-md-12 well pricing-table" style="background-color:#C0C0C0">
              <div class="pricing-table-holder">
                  <center>
                      <img src="http://www.placehold.it/100X100" class="img-responsive img-circle" alt="">
                      <h3><b>GOLD PACKAGE</b></h3>
                      <p class="caption">
                         Get Started With Goads Gold
                      </p>
                  </center>
                  
              </div>
              <div class="pricing-feature-list">
                  <ul class="list-group">
                      <li class="list-group-item">4 X 4 Inches Ad Box</li>
                      <li class="list-group-item">24 GBP Per Month</li>
                      <li class="list-group-item">240 GBP Per Year</li>
                      <li class="list-group-item">5000 Clicks Per Month</li>
                      <li class="list-group-item">20000 Promotional Mails Per Month</li>
                      <hr>
                      <li class="list-group-item"> 2 times 5 to 10 Seconds Brand Promotionl Ads in our other sites like Meet, Chat etc. </li>
                      <li class="list-group-item">Charges of 5% is applicable on all your sales that were happened through our website.</li>
                      <li class="list-group-item">If you have your own website, every month we are providing (promotion) 200 clicks additional.</li>
                     
                    </ul>
              </div>
              
              <div class="price-table-button-holder">
                                <button class="btn btn-info btn-block">
                      GET NOW
                  </button>
              </div>
          </div>
		  </tr>
		  <tr>
		   </td>
		  <td>
	        <div class="col-md-12 well pricing-table" style="background-color:#C0C0C0">
	            <div class="pricing-table-holder">
	                <center>
	                    <img src="http://www.placehold.it/100X100" class="img-responsive img-circle" alt="">
	                    <h3><b>PLATINUM PACKAGE</b></h3>
	                    <p class="caption">
	                        Get Started with Goads Platinum
	                    </p>
	                </center>
	            </div>
	            <div class="pricing-feature-list">
	                <ul class="list-group">
                      <li class="list-group-item">4 X 4 Inches Ad Box</li>
                      <li class="list-group-item">36 GBP Per Month</li>
                      <li class="list-group-item">For year package 360 GBP</li>
                      <li class="list-group-item">3500 clicks per Month</li>
                      <li class="list-group-item">35000 Promotional Mails Per Month</li>
                     
                      <hr>
                      <li class="list-group-item"> 2 times 5 to 10 Seconds Brand Promotionl Ads in our other sites like Meet, Chat etc. </li>
                      <li class="list-group-item">Charges of 5% is applicable on all your sales that were happened through our website.</li>
                      <li class="list-group-item">If you have your own website, every month we are providing (promotion) 200 clicks additional.</li>
                     </ul>
	            </div>
	            
	            <div class="price-table-button-holder">
	            	                <button class="btn btn-info btn-block">
	                    GET NOW
	                </button>
	            </div>
	        </div>
			 </td>
			<td>
          <div class="col-md-12 well pricing-table" style="background-color:#C0C0C0 ">
	              <div class="wrp" style="box-shadow:-22px 17px 6px rgba(178, 171, 171, 0.39)">
	            <div class="pricing-table-holder">
	                <center>
	                    <img src="http://www.placehold.it/100X100" class="img-responsive img-circle" alt="">
	                    <h3><b>DIAMOND PACKAGE</b></h3>
	                    <p class="caption">
	                       Get Started with Goads Diamond
	                    </p>
	                </center>
	                

                  
	            </div>
	            
	            <div class="custom-button-group" style="">
	         </div>
	            <div class="pricing-feature-list">
	                <ul class="list-group">
                      <li class="list-group-item">4 X 4 Inches Ad Box</li>
                      <li class="list-group-item">60 GBP Per Month</li>
                      <li class="list-group-item">For year package 600 GBP</li>
                      <li class="list-group-item">10,000 clicks per Month</li>
                      <li class="list-group-item">1,00,000 Promotional Mails Per Month</li>
                     
                      <hr>
                      <li class="list-group-item"> 25 times 5 to 10 Seconds Brand Promotionl Ads in our other sites like Meet, Chat etc. </li>
                      <li class="list-group-item">Charges of 5% is applicable on all your sales that were happened through our website.</li>
                      <li class="list-group-item">If you have your own website, every month we are providing (promotion) 200 clicks additional.</li>
                      <li class="list-group-item">Home Page scrolling ads.</li>
                      
                    </ul>
	            </div>
	            
	            <div class="price-table-button-holder">
	            	                <button class="btn btn-info btn-block">
	                    GET NOW
	                </button>
	            </div> 
	            </div>
	        </div> </td>
			<td>
          <div class="col-md-12 well pricing-table" style="background-color:#C0C0C0">
	            <div class="pricing-table-holder">
	                <center>
	                    <img src="http://www.placehold.it/100X100" class="img-responsive img-circle" alt="">
	                    <h3><b>ROYAL PACKAGE</b></h3>
	                    <p class="caption">
	                        Get Started with Goads Royal
	                </center>
	                

                  
	            </div>
	            
	            <div class="custom-button-group" >
	        
             

	            </div>
	            
	            <div class="pricing-feature-list">
	                <ul class="list-group">
                      <li class="list-group-item">4 X 4 Inches Ad Box</li>
                      <li class="list-group-item">120 GBP Per Month</li>
                      <li class="list-group-item">For year package 1200 GBP</li>
                      <li class="list-group-item">5,00,000 clicks per Month</li>
                      <li class="list-group-item">10,00,000 Promotional Mails Per Month</li>
                     
                      <hr>
                      <li class="list-group-item"> 100 times 5 to 10 Seconds Brand Promotionl Ads in our other sites like Meet, Chat etc. </li>
                      <li class="list-group-item">Charges of 5% is applicable on all your sales that were happened through our website.</li>
                      <li class="list-group-item">If you have your own website, every month we are providing (promotion) 200 clicks additional.</li>
                      <li class="list-group-item">Home Page scrolling ads.</li>
                      <li class="list-group-item">10 Time Banners Ads</li>
                    </ul>
	            </div>
	            
	            <div class="price-table-button-holder">
	            	                <button class="btn btn-info btn-block">
	                    GET NOW
	                </button>
	            </div>
	        </div>
			 </td>
			  
</tbody>

  		</table>
	    </div>
	</div>
@stop