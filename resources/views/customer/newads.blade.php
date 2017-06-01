@extends('layouts.app')

@section('content')
<div class="container">
    <form class="form-horizontal" action="/createads/payment" method="post" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="payment_for" value="registration">
    <input type="hidden" name="payment_amount" value="500">
      <fieldset>

      <div class="form-group">
        <label class="col-md-4 control-label" for="about_me">About Me</label>
        <div class="col-md-4">                     
          <textarea class="form-control" id="about_me" name="about_me" placeholder="A short Description About the user"></textarea>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label" for="vission">Vision </label>
        <div class="col-md-4">                     
          <textarea class="form-control" id="vission" name="vission" placeholder="Please let us know your vission "></textarea>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label" for="mission">Mission</label>
        <div class="col-md-4">                     
          <textarea class="form-control" id="mission" name="mission" placeholder="please let us know your mission "></textarea>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label" for="contact_person">Contact Person Name</label>  
        <div class="col-md-6">
        <input id="contact_person" name="contact_person" type="text" placeholder="Contact Person Name" class="form-control input-md" >
          
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="contact_number">Contact Number</label>  
        <div class="col-md-6">
        <input id="contact_number" name="contact_number" type="text" placeholder="Contact Person number" class="form-control input-md" >
          
        </div>
      </div>
      <table class="table table-bordered" id="adsproduct"> 
        <tr>
          <td>
            <div class="form-group">
                <label class="col-md-4 control-label" for="Product_name">Product Name</label>  
                <div class="col-md-6">
                <input id="product_name" name="product_name" type="text" placeholder="Product Name" class="form-control input-md" >
                  
                </div>
              </div>

              <!-- Textarea -->
              <div class="form-group">
                <label class="col-md-4 control-label" for="description">Description</label>
                <div class="col-md-4">                     
                  <textarea class="form-control" id="description" name="description" placeholder="Description" ></textarea>
                </div>
              </div>

              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-4 control-label" for="price">Price</label>  
                <div class="col-md-6">
                <input id="price" name="price" type="number" placeholder="Price" class="form-control input-md" >
                  
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-4 control-label" for="discount">Discount Offered</label>  
                <div class="col-md-6">
                <input id="discount" name="discount" type="number" placeholder="Discount in percentage  " class="form-control input-md" >
                  
                </div>
              </div>

              <!-- Text input-->
              
              <div class="form-group">
                <label class="col-md-4 control-label" for="categories">Categories</label>  
                <div class="col-md-6">
                <input id="categories" name="categories" type="text" placeholder="select the type of Categories" class="form-control input-md" >
                  
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-4 control-label" for="adsimage">Image</label>  
                <div class="col-md-6">
                <input id="adsimage" name="adsimage" type="file" placeholder="Mail Id " class="form-control input-md" >
                  
                </div>
              </div>
          </td>
          </tr>

      </table>
      <div class="form-group">
        <label class="col-md-4 control-label" for="Mail Id ">Terms and condition </label>  
        <div class="col-md-6">
        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Read term and condition </button>
          
        </div>
      </div>

      <label class="col-md-4 control-label" for="Mail Id "></label>  
        <div class="col-md-6">
          
          <button class="btn btn-success" type="Submit" id="submitbutton">Submit </button>  
          <p id="submitbuttonmessage"></p>
        </div>
      </fieldset>
      

      </form>
      <div class="form-group">
        
        <div class="col-md-6">
        <button class="btn btn-success" id="addads">Add More Ads </button>      
        </div>
      </div>
      <script>
        $(document).ready(function(){
            $("#addads").click(function(){
                $('#adsproduct tr:last').after('<tr><td>this is sample to add</td></tr>');
            });
        });
        </script>

      <!-- modal for terms and condition -->
      <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>  
          <strong>WEBSITE ADVERTISING TERMS AND CONDITIONS</strong>

          <p>This Website Advertising Terms and Conditions Agreement (the “Agreement”) governs the advertising on and use of the Goads.co,  by advertisers (“Advertiser”)(such advertising and use, “Advertising Services”). Advertising on Goads.co   Sites constitutes Advertiser’s and Advertiser’s agency’s acceptance of this Agreement. References in this Agreement to “you” and “your” refer to Advertiser and its agency, if any. We reserve the right to amend this Agreement at any time by posting an updated version/or any other mode of communication. Advertiser should therefore periodically visit this page to review the then-current Agreement. Advertising on any of the Sites after our posting of amendments to this Agreement will constitute Advertiser’s acceptance of this Agreement, as modified. Advertiser agrees to be bound by the Website Terms and Conditions located at http://www.goads.co/website-terms-and-conditions/ and the privacy policy located at http://www.goads.co/privacy-policy/, which are also made part of this Agreement and are hereby incorporated by reference. If  any time, Advertiser want to discontinue the advertisement, he/she shall inform the company through Email, Written Letter etc.,</p>
          
          <strong>DISPLAY</strong>
          <p>
          All advertisement is subject to our prior approval. We have the right in our sole and absolute discretion to reject or cancel any advertisements at any time for any reason. In the event we cancel an advertisement not in connection with a breach of this Agreement by Advertiser then Advertiser shall be responsible for advertising fees through such cancellation. Goads is not responsible for errors or omissions in any advertising materials provided by Advertiser or its agency. Unless otherwise agreed by  Goads and Advertiser in writing, Goads  shall have the right to insert the advertising in various areas of the Sites in  Goads’s sole discretion.
          </p>
          <strong>GENERAL REQUIREMENTS</strong>
          <p>
          <dl>
          <dt>          
           1. All advertisements placed on the Sites are governed by the following conditions:
           </dt>

          <dd> Advertisements must not be false, misleading, fraudulent or deceptive.</dd>
          <dd> Advertisements must clearly represent the company, product or brand that is being advertised.
          <dd> Advertisements must not include unsubstantiated claims, including but not limited to prices, discounts or product availability.
          </dd><dd> Advertisements must comply with all applicable laws and required or recommended industry codes, guidelines, licenses and approvals.
          </dd><dd> Advertisements must include all applicable, required or recommended disclaimers, notices and warnings.
          </dd><dd> Advertisements cannot include any content that infringes upon the rights of any third party, including copyright, trademark, privacy, publicity or other personal or proprietary right.
          </dd><dd> Advertisements may make limited references to the Sites in its title, body or image but cannot imply any endorsement of the product, service or advertisement destination by the Sites or Goads.
          </dd><dd> Advertisements cannot use the Sites or Goads logos, icons or any of our other trademarks.
          </dd><dd> Advertisements cannot require viewers to click on the advertisement to submit personally identifiable information (such as name, date of birth, phone numbers, physical addresses or email addresses) on the landing page or in the advertisement, except to enable an ecommerce transaction and where the advertisement and landing page clearly indicate that a product is being sold.
          </dd><dd> Any targeting of advertisements based on a user attribute such as age, gender, location or other user attribute, must be directly relevant to the offer and cannot be done by a method inconsistent with our privacy policy.
          </dd><dd> Advertisements cannot offer incentives to viewers for clicking on the advertisement, for submitting personally identifiable information (such as name, date of birth, phone number, physical addresses or email addresses) or for performing any other tasks.
          </dd><dd> Advertisements which receive a significant amount of negative user feedback or are otherwise deemed in violation of our community guidelines or other applicable policies will not be permitted.
          </dd>
          <p>
          2. Advertisement text must be grammatically correct, use correct spelling and punctuation, contain proper sentence structure, include grammatically correct spacing and be written in complete sentences. Advertisements cannot include excessive repetition (such as “buy, buy, buy”), excessive capitalization (such as “FREE”), repeated and unnecessary punctuation or symbols (such as “Buy now!!!”) or incorrect capitalization (such as capitalizing The First Letter Of Every Word in a sentence). The use of all symbols, numbers or letters must adhere to their true meaning and exclamation points cannot be used in the title of any advertisement.
          </p>
          <p>
          3. Unless authorized by us, your advertisements may not display user data — such as users’ names or profile photos — whether that data was obtained from us or otherwise. You may not use user data you receive from us or collect through running an advertisement, including information you derive from your targeting criteria, for any purpose outside of the Sites without user consent. You may not give data you receive from us to any third party, including advertising networks.
          
          </p>
          <p>
          4. You cannot create or manage multiple Site accounts for advertising purposes unless given permission by us to do so. You cannot programmatically automate the creation of accounts or advertisements unless given permission by us to do so.
          </p>
          <p>
          <dt>
          5. Advertisements containing prices, discounts and free offers advertisements cannot be deceptive or fraudulent about any offer made. If an advertisement includes a price, discount or ‘free’ offer the following conditions apply:
          
          <dd> The destination URL for the advertisement must link to a page that clearly and accurately offers the exact deal the advertisement has displayed;
          </dd>
          <dd> The advertisement must clearly state what action or set of actions is required to qualify for the offer.
          

          6. Advertisements for subscription services are any service or any site that induces a user to sign up for recurring billing of a product or service, including but not limited to sites that promote the downloading of ringtones, games or other entertainment (“Subscription Services”). The advertisement of Subscription Services must comply with the following conditions:
          
          <dd> The advertisement must clearly state what action or set of actions is required to qualify for the offer. If the user must subscribe to a service, the service and offer requirements must both be stated in the advertisement.
          
          </dd>
          <dd> The recurring subscription must be consistent with what is promoted in the advertisement copy.

          </dd>
          <dd> At a minimum, the promoted website must clearly and accurately display the price and billing interval (such as per week or once per month) on the landing page as well as on any page that prompts a user for personally identifiable information (such as name, date of birth, phone number, physical addresses or email addresses) or billing information (including, but not limited to, mobile phone number or credit card number).
          
          </dd><dd> If users sign up for the service by transmitting a code by text message, the price and billing interval must be clearly and prominently displayed beside the code.
          
          </dd><dd> If the service is a subscription, the website must provide a prominent opt-in checkbox or other clear mechanism indicating that the user knowingly accepts the price and subscription service. This should be on the first page where the user enters personal data, and the user should not be able to proceed without opting in.
          
          </dd><dd> All of the foregoing items should be located in a prominent place on your webpage, as determined by us in our sole discretion, and should be easy to find, read and understand.
          </dd>
          7. When you place an advertisement on the Sites, you can choose a landing page (destination URL) that the user will be directed to when they click on the copy or image content. All landing pages must abide by the following conditions:
          
          <dd> The content on the landing page must directly relate to the copy and image content of the advertisement. Any products or services promoted in the advertisement must be directly available on the landing page.
          
          </dd><dd> Where an advertisements contains a URL or domain in the copy the landing page must be the same URL or domain.
          
          </dd><dd> Landing pages cannot generate a pop-up (including “pop-overs” and “pop-unders”) when a user enters or leaves the page.
          
          </dd><dd> Landing pages cannot use “fake” close behavior (ie. when a user cddcks the ‘close’ icon on the page, the page should close down and no other behavior should result).

          </dd><dd> Landing pages cannot emulate features of any of the Sites or otherwise be designed to appear as original Site content.

          </dd><dd> Landing pages cannot utilize “mouse trapping” whereby the advertiser does not allow users to use their browser “back button” and traps them on their site and/or present any other unexpected behavior (for example, navigation to another advertisement or page).
  
          </dd><dd> Landing pages cannot contain or link directly or indirectly to a site that contains spyware/malware downloads, whether initiated automatically or manually by the user, or other auto-initiated downloads.

          </dd><dd> Landing pages cannot collect, or facilitate the collection of, demographic and usage information from a user’s computer without the user’s express consent.

          </dd><dd> Landing pages cannot collect or request Site usernames or passwords.

          </dd><dd> Landing pages cannot proxy Site usernames or passwords for the purpose of automating logins to the Sites;

          </dd><dd> Landing pages cannot contain, facilitate or promote any software that results in an unexpected user experience, including but not limited to software which: (i) “sneaks” onto a user’s system and performs activities hidden to the user, (ii) may alter, harm, disable or replace any hardware or software installed on user’s computer without express permission from the user, (iii) is bundled as a hidden component of other software whether free or for a fee, (iv) automatically downloads without the our express prior approval, (v) presents any download dialogue boxes without a user’s express action, or (vi) may violate or infringe upon the intellectual property rights of any third party, including copyright, trademark, patent or any other proprietary right.

          8. Prohibited content advertisements cannot contain, facilitate, promote or reference any of the following:

          <dd> Offensive, profane, vulgar, obscene or inappropriate language;
          </dd><dd> Obscene, defamatory, libelous, slanderous and/or unlawful content;
          </dd><dd> Insulting, harassing or threatening content;
          </dd><dd> Dating sites, services or related content;
          </dd><dd> Gambling, including without limitation, any online casino, sports books, bingo or poker;
          </dd><dd> Scams, illegal activity or chain letters;
          </dd><dd> ‘Spam’ or other advertising or marketing content that violates applicable laws, regulations or industry standards
          </dd><dd> Contests and sweepstakes unless given permission by the us to do so;
          </dd><dd> Get-rich-quick and other money-making opportunities that offer compensation for little or no investment, including “work from home” opportunities positioned as alternatives to part-time or full-time employment or promises of monetary gain with no strings attached;
          </dd><dd> Adult content, including nudity, sexual terms and/or images of people in positions or activities that are excessively suggestive or sexual or provocative images;
          </dd><dd> Adult friend finders or dating sites with a sexual emphasis;
          </dd><dd> Adult toys, videos or other adult products;
          </dd><dd> Uncertified pharmaceutical products;
          </dd><dd> Spy cams or surveillance equipment;
          </dd><dd> Web-based non-accredited colleges that offer degrees;
          </dd><dd> Inflammatory religious content;
          </dd><dd> Politically religious agendas and/or any known associations with hate, criminal and/or terrorist activities;
          </dd><dd> Content that exploits political agendas or uses “hot button” issues for commercial use regardless of whether the advertiser has a political agenda;
          </dd><dd> Hate speech, whether directed at an individual or a group and whether based upon the race, sex, creed, national origin, religious affiliation, marital status, sexual orientation, gender identity or language of such individual or group;
          </dd><dd> Content that advocates against any organization, person or group of people, with the exception of candidates running for public office;
          </dd><dd> Content that depicts a health condition in a derogatory or inflammatory way or misrepresents a health condition in any way.
          <p>
          9. We may refuse advertisements at any time for any reason, including without limitation, that we deem a business model or practice unacceptable, that they promote competing products or services, that they negatively affect our relationship with our users or the businesses or events featured on the Sites or that they are contrary to our advertising business philosophy.
          </p>

          <strong>OWNERSHIP</strong>
            <p>
            The entire content and materials contained within the Sites (the “Content”), including, but not limited to, audio, video, images, text, user interface, scores, logos, the selection and arrangement of the Sites and other intellectual property (the “Content”) are owned by or licensed to AVOIR & ACCOOVC GROUPS (“GOADS” or “We” or “we” or “our”) to the fullest extent under the copyright laws of the INDIA and other countries. Images of people or places displayed on the Sites are either the property of, or used with permission by, GOADS. You may not reproduce, republish, transmit, upload, distribute, copy or publicly display any of the Content without our prior written consent. We neither warrant nor represent that your use of materials displayed on the Sites will not infringe rights of third parties not owned by or affiliated with GOADS. may redesign the Sites in our sole discretion at any time.</p>
            <p>
            All other trademarks, logos and service marks (those of  GOADS and third parties, collectively, the “Trademarks”) appearing on the Sites are Trademarks of their respective owners, whether or not appearing in large print or with a trademark symbol. Nothing contained on the Sites or this Agreement should be construed as granting you any license or right to use any Trademark displayed on the Sites without the written permission of its respective owner. Your use of the Trademarks displayed on the Sites, or any other content on the Sites, except as provided in this Agreement, is strictly prohibited.</p>

            <strong>COMPLIANCE WITH LAWS/REGULATIONS</strong>
            <p>
            All advertisements are accepted and made available on the Sites upon your warranty that you are authorized to make available on the Sites the entire contents and subject matter of the advertisement and that such advertisement will not violate any law or infringe upon any right of any party. You are required to comply with all applicable laws and regulations in connection with your use of the Sites and your advertising on the Sites (including without limitation, laws relating to user privacy and the gathering, storage and usage of personally identifiable information collected from end users of the advertisements) and such further limitations as may be set forth in any written or on-screen notice from us. By using the any of the Sites or advertising on any of the Sites, you represent and warrant that you will not use the Sites for any purpose that is either unlawful or prohibited by this Agreement. If Advertiser or its agency becomes aware of a suspected or actual breach of security or unauthorized access affecting personally identifiable information, Advertiser or its agency will notify  GOADS as soon as possible and take all action necessary and required to address the breach.</p>

            <strong>  DISCLAIMER OF WARRANTIES</strong>

            <p>TO THE FULLEST EXTENT PERMITTED BY LAW GOADS  CLAIMS ALL WARRANTIES, EXPRESS AND IMPLIED, ASSOCIATED WITH ADVERTISING AND RELATED SERVICES PROVIDED ON THE SITES, ADVERTISER’S USE OF OR PARTICIPATION IN THE ADVERTISEMENT SERVICES, AND OTHER SUBJECT MATTER OF THIS AGREEMENT, INCLUDING, WITHOUT LIMITATION: (A) EXPRESS OR IMPLIED WARRANTIES; (B) WARRANTIES ARISING FROM A COURSE OF PERFORMANCE OR DEALING OR TRADE USAGE; (C) WARRANTIES OF UNINTERRUPTED OPERATION WITHOUT ERROR; (D) IMPLIED WARRANTIES OF MERCHANTABILITY, NON-INFRINGEMENT, OR FITNESS FOR A PARTICULAR PURPOSE WITH RESPECT TO THE SERVICES; AND (E) EXPRESS OR IMPLIED WARRANTIES RELATING TO THE SECURITY, RELIABILITY, TIMELINESS, AVAILABILITY AND/OR PERFORMANCE OF THE ADVERTISING SERVICES. ADVERTISING SERVICES ARE PROVIDED ON AN “AS IS” AND “AS AVAILABLE” BASIS WITH NO WARRANTIES WHATSOEVER. WITHOUT LIMITING THE FOREGOING, GOADS DOES NOT GUARANTEE ANY GIVEN LEVEL OF CIRCULATION, DISTRIBUTION, REACH OR READERSHIP FOR ANY ADVERTISEMENT.</p>

            <strong>LIMITATION OF LIABILITY</strong>
            <p>
            IN NO EVENT SHALL GOADS  BE LIABLE FOR ANY ACT OR OMISSION, OR ANY EVENT DIRECTLY OR INDIRECTLY RESULTING FROM ANY ACT OR OMISSION OF ADVERTISER OR ANY THIRD PARTIES (IF ANY). IN NO EVENT SHALL GOADS BE LIABLE UNDER THIS AGREEMENT FOR ANY CONSEQUENTIAL, SPECIAL, INDIRECT, EXEMPLARY, OR PUNITIVE DAMAGES WHETHER IN CONTRACT, TORT OR ANY OTHER LEGAL THEORY, EVEN IF GOADS  HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES AND NOTWITHSTANDING ANY FAILURE OF ESSENTIAL PURPOSE OF ANY LIMITED REMEDY. AGGREGATE LIABILITY TO ADVERTISER AND ITS AGENCY UNDER THIS AGREEMENT FOR ANY CLAIM IS LIMITED TO THE LESSER OF (A) THE AMOUNT PAID TO GOADS  BY ADVERTISER FOR THE AD GIVING RISE TO THE CLAIM AND (B) Rs.500 EACH PARTY ACKNOWLEDGES THAT THE OTHER PARTY HAS ENTERED INTO THIS AGREEMENT RELYING ON THE LIMITATIONS OF LIABILITY STATED HEREIN AND THAT THOSE LIMITATIONS ARE AN ESSENTIAL BASIS OF THE BARGAIN BETWEEN THE PARTIES.</p>


            <strog>CONFIDENTIALITY</strog>
            <p>
              The financial and other terms of the Advertising Services provided hereunder are confidential and shall not be disclosed by Advertiser or its agency to any third party.
            </p>

            <strong>SEVERABILITY AND INTEGRATION</strong>
            <p>
            This Agreement constitutes the entire agreement between you and us and governs your use of the Advertising Services, superseding any prior or contemporaneous communications and proposals (whether oral, written or electronic) between you and us. If any portion of this Agreement is held invalid or unenforceable, that portion shall be construed in a manner consistent with applicable law to reflect, as nearly as possible, the original intention of the parties, and the remaining portions shall remain in full force and effect. This agreement may be modified only by our posting on the Sites changes to this Agreement, or by a subsequent writing signed by us.</p>

            <strong>NO WAIVER</strong>
            <p>
              Our failure to enforce any provision(s) of this Agreement or to respond to a breach by you or other parties shall not in any way waive our right to enforce subsequently any terms or conditions of this Agreement or to act with respect to similar breaches.</p>
            <strong>MISCELLANEOUS</strong>
            <o>
              You agree that no joint venture, partnership, employment, or agency relationship exists between you and us as a result of this Agreement or your use of the Advertising Services. Nothing contained in this Agreement is in derogation of our right to comply with governmental, court and law enforcement requests or requirements relating to your use of the Advertising Services or information provided to or gathered by us with respect to such use. A printed version of this Agreement and of any notice given in electronic form shall be admissible in judicial or administrative proceedings based upon or relating to this Agreement to the same extent and subject to the same conditions as other business documents and records originally generated and maintained in printed form. Advertiser and agency may not resell, assign or transfer any of Advertiser’s rights hereunder.</o>
              <stong>TERMINATION</stong>
              <p>
                We reserve the right, in our sole discretion, to terminate this Agreement and your access to all or part of the Sites and/or Advertising Services, with or without notice and with or without cause. The provisions of this Agreement will survive the termination of your access to the Sites and Advertising Services.
          </p>
          <p>
          <input type="radio" name="conditions" onchange="enablesubmit()"><label>I Accepted</label>
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
    <!-- end of modal -->
</div>
      <!-- Password input-->
      <script type="text/javascript">
      window.onload = disablesubmit;
        function disablesubmit()
        {
          document.getElementById("submitbutton").disabled = false;
          document.getElementById("submitbuttonmessage").style.color = "red";
          document.getElementById("submitbuttonmessage").innerHTML = "You have to read and accept the team and conditions";

        }
        function enablesubmit()
        {
          document.getElementById("submitbutton").disabled = false;
          document.getElementById("submitbuttonmessage").style.color = "Green";
          document.getElementById("submitbuttonmessage").innerHTML = "Thanks you ";
        }
      </script>
@stop