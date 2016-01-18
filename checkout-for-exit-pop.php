<?php
if($_SERVER["HTTPS"] != "on" && $_SERVER["HTTP_HOST"]!='localhost:8888')
{
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    exit();
}

include('lib/limelight.php');
if (!empty($_POST)) {
    //create new prospect
    $ll = new LimelightOrder();
    $response = $ll->new_prospect($_POST);
    if ($response['status']!=1) {
        $_POST['em'] = $response['message'];
        $query = http_build_query($_POST);
        header("Location: https://" . $_SERVER["HTTP_HOST"] . str_replace("checkout.php","",$_SERVER["REQUEST_URI"])."?".$query);
    } else {
        $p_id = $response['prospect_id'];
    }
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="//cdn.optimizely.com/js/385000493.js"></script>
	<title>Garcinia Cambogia Plus</title>
	<link rel="stylesheet" href="css/screen.css" />
	<link rel="stylesheet" href="css/checkout.css" />
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41146135-1', 'buygarciniaplus.com');
  ga('send', 'pageview');

</script>

<script type="application/javascript">

var AlertBox = "\nLIMITED TIME SPECIAL OFFER!\n\nFor a Limited Time - Get 50% OFF SHIPPING NOW! We will pay 50% of the shipping cost so you can see what this miracle formula can do for you!\n\nClick *Cancel* or *Stay* below to activate coupon.\n\n";

window.onload = function(){
	isExit = true;
	var popupimage = new Image();
	popupimage.src = "images/discountshipping.jpg";
}

function ExitPop(isExit) {
	if(isExit != false && dontWarn == false) {
		isExit = false;
		isPop = true;
		document.getElementById('popup').style.display='block';	
		return AlertBox;
	}
}

var dontWarn = false;

window.onbeforeunload = function(){
		return ExitPop(isExit);
}

function popAction(){
	document.getElementById('popup').style.display='none';	
	document.getElementById('discountHolder').style.display='block';
	$('#logo, #logo_plaque, #middle_header, #sixty_hca, #claim_arrow, #rush_leaves, #rush_container, #garcinia_left, #garcinia_right').addClass('offsetAbsolute');
	dontWarn = true;
}

</script>

</head>
<body>

<script>//Kount Pixel technology hooked into LimeLight (DONT REMOVE)
   var isSafari = (/Safari/.test(navigator.userAgent));
   var firstTimeSession = 0;
   function SubmitSessionFormWebKit()
   {
      if (firstTimeSession == 0)
      {
         firstTimeSession = 1;
         ll("#sessionform").submit();
         setTimeout(FirePixel(),2000);
      }
   }

   function FirePixel()
   {
      var unix = Math.floor(+new Date()/1000);

      $sess = ll('<input type="hidden" />');
      $sess
         .attr("name", "sessionId")
         .val(unix)
         .appendTo("#opt_in_form");

      ll("body").append('<iframe width=1 height=1 frameborder=0 scrolling=no src="https://www.thetrajangroup.com/pixel.php?t=htm&campaign_id=186&sessionId='+ unix +'"><img width=1 height=1 src="https://www.thetrajangroup.com/pixel.php?t=gif&campaign_id=186&sessionId='+ unix +'"/></iframe>');
   }
   

   ll(document).ready(function() {
      
      if ( isSafari )
      {
         ll("body").append('<iframe id="sessionframe" name="sessionframe" onload="SubmitSessionFormWebKit()" src="https://www.thetrajangroup.com/blank.php" style="display:none;"></iframe><form id="sessionform" enctype="application/x-www-form-urlencoded" action="https://www.thetrajangroup.com/start_session.php" target="sessionframe" action="post"></form>');
      }
      else
      {
         FirePixel();
      }
	  </script>

<div id="discountHolder">
    <div id="discountSection">SPECIAL DISCOUNT ACTIVATED! - SAVE OVER 50% OFF SHIPPING & HANDLING ON ALL ORDERS PLACED TODAY! ONLY $4.95! PER TRIAL</div>
    <div id="discountOffset"></div>
</div>

<?php
   function safeRequest($strGet) {
      $strGet = preg_replace("/[^\-a-zA-Z0-9\_]*/m","",$strGet);
      //$strGet = preg_replace("/[^a-zA-Z0-9(\040)\(\)']*/m","",$strGet); //<--to allow space \040
      $strGet = str_ireplace("javascript","",$strGet);
      $strGet = str_ireplace("encode","",$strGet);
      $strGet = str_ireplace("decode","",$strGet);
      return trim($strGet);
   }
?>

	<!-- Preloaded Images -->
	<img src="images/rush_button_active.png" alt="" class="hidden" />
    
    <div id="greenBGtop"></div>

	<!-- Background Garcinias -->
	<div id="garcinias">
		<img src="images/garcinia_left.png" alt="" id="garcinia_left" />
		<img src="images/garcinia_right.png" alt="" id="garcinia_right" />
	</div>

	<div id="container">
		<div id="header">
			<img src="images/checkout_header.png" alt="Header" id="checkout_header" />
		</div>

		<div id="checkout_content">
		
		<div id="supplyWarning">
        	<strong>WARNING:</strong> <p>Due to recently being featured on TV, we can no longer guarantee supply.  As of <? print(Date("l F d, Y")); ?>, we <br> currently have product IN STOCK and will ship within 24 hours of purchase.</p>
       </div>
	   
			<div id="product_section">
				<!--<div id="product_header"></div>
				<img src="images/trial_product.png" alt="Garcinia Plus Trial" id="trial_product" />
				<img src="images/trial_hr.png" alt="" id="trial_hr" />
				<p id="promo_p"></p><br /><br /><br /><br />
				
				<img src="images/trial_totals.png" alt="Order total: $4.95" id="trial_totals" />-->
				<div id="lose10pounds">TRIAL PACKAGE: Lose up to 10lbs and 1-2 inches of fat per month!</div>
				<div id="arrival">Your shipment is estimated to arrive by <span>
				<?php
				$date = date("F d, Y", strtotime("+2 days"));
				echo $date;
				?></span>.
				</div>
			</div>

			
			<div id="checkout_order_section">
			
			<img src="images/final_step.png" alt="Final Step: Payment Information" id="final_step" />
			
			<form name='opt_in_form2' id='opt_in_form2' action='thanks.php' method='post'>
				
			<input type="hidden" name="prospect_id" value="<?php echo isset($p_id) ? $p_id:$_GET['prospect_id']; ?>">
			<?php foreach ($_POST as $key=>$value) { ?>
				<?php echo '<input type="hidden" name="'.$key.'" value="'.$value.'">'; ?>
			<?php } ?>
		
			<?php if (isset($_GET['em'])) {
				echo '<h2 class="error">Error: '.$_GET['em'].'</h2>';
			} ?>
			
				<p id="checkout_order_accept">We Accept Credit and Debit Cards</p>
				<p id="checkout_order_is_billing">Is your billing address the same as your shipping address?</p>
                

            <div id="shipquest" class="question1" style=" width:40%; margin-left:auto; margin-right:auto; display: block;color: #ffffff;font-size: 1em;text-shadow: 0 0 10px #000000;">
                      <input id="radioOne" onclick="document.getElementById('checkout_order_section').style.height = '666px'; toggleBillingAddress(this);" type="radio" name="same_info" value="yes" checked>Yes
                      <input id="radioTwo" onclick=" document.getElementById('checkout_order_section').style.height = '840px';  toggleBillingAddress(this);" type="radio" name="same_info" value="no" >No
                 </div> 
                        
                  
              <div id="billingDiv" style="display:none;">

              
                      <table cellpadding="2px" cellspacing="2px" style="width: 290px; margin-left: 15px; font-size: 15px;">
                        <tr>
                          <td width="125px" align="right"><label for="billing_street_address">First Name:</label></td>
                          <td><input type="text" id="billing_fname" name="billing_fname" value=""/></td>
                        </tr>
                        <tr>
                          <td width="115px" align="right"><label for="billing_street_address">Last Name:</label></td>
                          <td><input type="text" id="billing_lname" name="billing_lname" value=""/></td>
                        </tr>
                        <tr>
                          <td width="115px" align="right"><label for="billing_street_address">Billing Address:</label></td>
                          <td><input type="text" id="billing_street_address" name="billing_street_address" value=""/></td>
                        </tr>
                        <tr>
                          <td width="115px" align="right"><label for="billing_street_address2">Billing Address 2:</label></td>
                          <td><input type="text" id="billing_street_address2" name="billing_street_address2" value=""/></td>
                        </tr>
                        <tr>
                          <td align="right"><label for="billing_city">Billing City:</label></td>
                          <td><input type="text" id="billing_city" name="billing_city" value=""/></td>
                        </tr>
                        <tr>
                          <td align="right"><label for="billing_postcode">Billing Zip:</label></td>
                          <td><input type="text" id="billing_postcode" name="billing_postcode" value=""/></td>
                        </tr>                        <tr>
                          <td align="right"><label for="billing_state" id="billing_state_region">Billing State:</label></td>
                          <td>
						  
		 <input type="hidden" name="billing_country" value="US">
		 
                            <span id="billing_state_cus1"></span>
                              
<div class="select-outer" style="width:184px;" onclick="">
   <div class="select-inner" style="">
      <select border="0" style="width:160px;"  class="" id="billing_state" style="" name="billing_state"  size="1">
<option value="" onclick="" >Select State</option>
<option value="AL" onclick="" >Alabama (AL)</option>
<option value="AK" onclick="" >Alaska (AK)</option>
<option value="AS" onclick="" >American Samoa (AS)</option>
<option value="AZ" onclick="" >Arizona (AZ)</option>
<option value="AR" onclick="" >Arkansas (AR)</option>
<option value="CA" onclick="" >California (CA)</option>
<option value="CO" onclick="" >Colorado (CO)</option>
<option value="CT" onclick="" >Connecticut (CT)</option>
<option value="DE" onclick="" >Delaware (DE)</option>
<option value="DC" onclick="" >District of Columbia (DC)</option>
<option value="FM" onclick="" >Federated States of Micronesia (FM)</option>
<option value="FL" onclick="" >Florida (FL)</option>
<option value="GA" onclick="" >Georgia (GA)</option>
<option value="GU" onclick="" >Guam (GU)</option>
<option value="HI" onclick="" >Hawaii (HI)</option>
<option value="ID" onclick="" >Idaho (ID)</option>
<option value="IL" onclick="" >Illinois (IL)</option>
<option value="IN" onclick="" >Indiana (IN)</option>
<option value="IA" onclick="" >Iowa (IA)</option>
<option value="KS" onclick="" >Kansas (KS)</option>
<option value="KY" onclick="" >Kentucky (KY)</option>
<option value="LA" onclick="" >Louisiana (LA)</option>
<option value="ME" onclick="" >Maine (ME)</option>
<option value="MD" onclick="" >Maryland (MD)</option>
<option value="MA" onclick="" >Massachusetts (MA)</option>
<option value="MI" onclick="" >Michigan (MI)</option>
<option value="MN" onclick="" >Minnesota (MN)</option>
<option value="MS" onclick="" >Mississippi (MS)</option>
<option value="MO" onclick="" >Missouri (MO)</option>
<option value="MT" onclick="" >Montana (MT)</option>
<option value="NE" onclick="" >Nebraska (NE)</option>
<option value="NV" onclick="" >Nevada (NV)</option>
<option value="NH" onclick="" >New Hampshire (NH)</option>
<option value="NJ" onclick="" >New Jersey (NJ)</option>
<option value="NM" onclick="" >New Mexico (NM)</option>
<option value="NY" onclick="" >New York (NY)</option>
<option value="NC" onclick="" >North Carolina (NC)</option>
<option value="ND" onclick="" >North Dakota (ND)</option>
<option value="MP" onclick="" >Northern Mariana Islands (MP)</option>
<option value="OH" onclick="" >Ohio (OH)</option>
<option value="OK" onclick="" >Oklahoma (OK)</option>
<option value="OR" onclick="" >Oregon (OR)</option>
<option value="PA" onclick="" >Pennsylvania (PA)</option>
<option value="PR" onclick="" >Puerto Rico (PR)</option>
<option value="MH" onclick="" >Republic of Marshall Islands (MH)</option>
<option value="RI" onclick="" >Rhode Island (RI)</option>
<option value="SC" onclick="" >South Carolina (SC)</option>
<option value="SD" onclick="" >South Dakota (SD)</option>
<option value="TN" onclick="" >Tennessee (TN)</option>
<option value="TX" onclick="" >Texas (TX)</option>
<option value="UT" onclick="" >Utah (UT)</option>
<option value="VT" onclick="" >Vermont (VT)</option>
<option value="VI" onclick="" >Virgin Islands of the U.S. (VI)</option>
<option value="VA" onclick="" >Virginia (VA)</option>
<option value="WA" onclick="" >Washington (WA)</option>
<option value="WV" onclick="" >West Virginia (WV)</option>
<option value="WI" onclick="" >Wisconsin (WI)</option>
<option value="WY" onclick="" >Wyoming (WY)</option></select>
   </div>
</div>

                          
                          </td>
                        </tr>
                      </table>
                   </div>
                 <!--   end pop out form -->
                    
                    
                    
                    
					<img src="images/checkout_cards.png" alt="We accept Visa, MasterCard, and Discover" id="checkout_cards" />
					<p style="font-size: 0.8em; font-weight: bold; margin-top: 15px;">Pay with Credit or Debt Card:</p>
					
					<div id="inputContainer">
					<!--<label>Product Price: &#36;0.00</label><br /> -->
                    
                  
                    
					<!--<label for="shipping_type">Shipping Type: <select name="shipping" id="shipping" onchange="SetShippingValue()"><option title="4.95" value="1">Shipping</option></select></label><br />
					<!--<label>Shipping Price: &#36;4.95</label><br />
					<label>Total Amount: &#36;4.95</label><br />-->
					<label for="payment_type">Payment Type:</label>
					
					<select tabindex="1" id="cc_type" name="cc_type" ><option value="">Select Payment Method</option><option value = "visa" >Visa</option><option value = "master" >Master Card</option><option value = "discover" >Discover</option></select><br />
					
					<label for="card_number">Card Number:</label>
					
					<input type="hidden" id="thm_session_id" name="thm_session_id" value=""/>

                  <input tabindex="2" type="text" maxlength="16" onkeydown="return onlyNumbers(event,'cc')" id="cc_number" name="cc_number" autocomplete="off"/><br />        
                  <label for="expiration_date">Exp. Date:</label> 
				  
				    <select tabindex="4" name="fields_expyear" id="fields_expyear" class="input1">
                        <?php for($n=(int)date('y');$n<(int)date('y')+10;$n++) { ?>
                            <option value="<?php echo $n; ?>"><?php echo "20".$n; ?></option>
                        <?php } ?>
                        <!--<option  value='13'>2013</option><option  value='14'>2014</option><option  value='15'>2015</option><option  value='16'>2016</option><option  value='17'>2017</option><option  value='18'>2018</option><option  value='19'>2019</option><option  value='20'>2020</option><option  value='21'>2021</option><option  value='22'>2022</option><option  value='23'>2023</option><option  value='24'>2024</option><option  value='25'>2025</option>-->
                    </select>
                    
                  <select tabindex="3" name="fields_expmonth" id="fields_expmonth" selected  value="">Month</option>
<option  value="01">(01) January</option>
<option  value="02">(02) February</option>
<option  value="03">(03) March</option>
<option  value="04">(04) April</option>
<option  value="05">(05) May</option>
<option  value="06">(06) June</option>
<option  value="07">(07) July</option>
<option  value="08">(08) August</option>
<option  value="09">(09) September</option>
<option  value="10">(10) October</option>
<option  value="11">(11) November</option>
<option  value="12">(12) December</option>

                 </select>
                    
<input type="hidden" id="cc_expires" name="cc_expires" /> 
                     
               
					 <label id="secCodeLabel" for='cc_cvv'>Security Code:</label>
					 <a id="whatIsThis" href="javascript:NewWindow=window.open('images/cvv2-location1.png','myWindow','width=300,height=260,left=10,top=100,toolbar=No,location=No,scrollbars=Yes,status=Yes,resizable=Yes,fullscreen=No'); NewWindow.focus(); void(0);">What is This?</a>
					 <input tabindex="5" autocomplete="off" type="tel" id="cc_cvv" class="codeInput" name="cc_cvv" />
   					 
					                  
					 </div> <!--inputContainer END-->
					
					
                   <input type='submit' class="rush_my_order" value='' style="margin-top: 15px;">
                    
                    
				</form>
                <img src="images/brands.jpg" alt="Secured by VeriSign, McAfee, ScanAlert, and a 128-Bit SSL" id="checkout_security_badges" />
			</div>

			<div id="trial_left_text">
				<img src="images/trial_claim_arrow.png" alt="Claim your bottle of 100% all-natural garcinia cambogia extract capsules today!" id="trial_claim_arrow" />
				<img src="images/trustGuardLogos.png" width="507" height="70" alt="Trial Guard Logos" id="trialGuardLogos"/>
				
				<div id="terms">
            By submitting,   I have read and approve the Terms and Conditions and agree to be billed $4.95 S&amp;H for my 30 day supply of Garcinia Plus.  I agree to be enrolled in your membership program. If I call 1-877-900-2879 to cancel my membership within 15 days, I will not be billed anything more. Otherwise, you will ship 30-day supplies of the product beginning 45 days from the start of my trial and every 30 days after that, billing my credit/debit card $89.92 for each shipment until I call to cancel. The stated price is inclusive of all applicable state and local sales and use taxes. By submitting, I consent to having read and agreed to the <a href="../terms.html" >Terms and Conditions</a>.

            </div>
			
				
			</div>
		</div>
        <!-- Footer -->
		<div id="footer">
			<div id="footer_icons">
           	<img class="social" src="images/Facebook.png"/>
           	<img class="social" src="images/Twitter.png"/>
           	<img class="social" src="images/Youtube.png"/>
           	<img class="social" src="images/google_plus.png"/>
           	<img src="images/FDA_GMP.png"/>
           	<img src="images/shipping_icons.png"/>
           	<img src="images/credit_cards.png"/>
           	<img src="images/comodo.png"/>
           </div>
			<p>All Content Copyright &copy; 2014 Garcinia Plus - All Rights Reserved</p>
			<p><a class="legal-link" href="../terms.html">Terms and Conditions</a>&nbsp; |  &nbsp;<a class="legal-link" href="../privacy.html">Privacy Policy</a>&nbsp; | &nbsp;<a class="legal-link" href="../contact.html">Contact Us</a>&nbsp; | &nbsp;<a href="tel:8779002879">877-900-2879</a></p>
			<p id="disclaimer">This product is not for use by or sale to persons under the age of 18. This product should be used only as directed on the label. It should not be used if you are pregnant or nursing. Consult with a physician before use if you have a serious medical condition or use prescription medications. A doctor's advice should be sought before using this and any supplemental dietary product. All trademarks and copyrights are the property of their respective owners and are not affiliated with nor do they endorse Garcinia Plus. These statements have not been evaluated by the FDA. This product is not intended to diagnose, treat, cure, or prevent any disease. Individual weight loss results will vary.  Individual weight loss results will vary. By using this site you agree to follow the Privacy Policy and all Terms &amp; Conditions printed on this site. Void Where Prohibited By Law.</p>
		</div>

	</div>

	</div>

<div id="popup">
	<div id="popupMain" onclick="popAction();">
		<img src="images/discountshipping.jpg" />
		<div id="expires">
			EXPIRES: <? print(Date("m/d/Y")); ?>            
		</div>
	</div>
</div>
<script>

$('.rush_my_order').click(function() {
	dontWarn = true;
});

function toggleBillingAddress(radioButtonObj) {
	var billingDiv = document.getElementById('billingDiv');
	if (radioButtonObj.value == "no") {
		billingDiv.style.display = 'inline';
	} else {
		billingDiv.style.display = 'none';
	}
}

</script>
<script src="footer-nav.js"></script>
<script type="text/javascript" src="//tags.mediaforge.com/js/2055/?cart=5&prodID=gpc"></script>
</body>
</html>