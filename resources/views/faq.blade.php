@extends('layouts.app')

@section('content')

    <div class="container">
	<div >
      <img src="/upload/images/faq.jpg" width="100%">
    </div>
<br>
    <div class="panel-group" id="faqAccordion"style="width:70%;float:left">
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question0">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Q: What is GoAds?</a>
              </h4>

            </div>
            <div id="question0" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>

                    <p>GoAds is a wonderful platform which help any individual to promote there product into the market, which directly going to affect the sale and the profit. This platform allow you to get a client. 
                        </p>
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question1">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Q: Is it specifically for any individual business man or an company ?</a>
              </h4>

            </div>
            <div id="question1" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>

                    <p>This website is helpful for both individual and the company which need to promote there products.</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question2">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Q: How should I pay?</a>
              </h4>

            </div>
            <div id="question2" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>

                    <p>This website is under development, soon we are going to update all the payment method with this GoAds.</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question3">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Q: How can I contact to the GoAds?</a>
              </h4>

            </div>
            <div id="question3" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>

                    <p>We had mention our contact details in the “contact-us “  tab, We are always happy to hear you.</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question4">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Q:Which package I should choose?</a>
              </h4>

            </div>
            <div id="question4" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>

                    <p>The package is totally depending on the requirement of the product promotion, and the owner of the product. </p>
                </div>
            </div>
        </div>
        
    </div>
    <!--/panel-group-->
   <div style="height:350px;width:25%;background-color: lightgrey;margin-top:1.5;float:right"></>
<center><h3 style="background-color: red">Scorll Ads</h3></center>
</div>
</div>

@endsection
