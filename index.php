<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width">
  <title>title</title>

  <!-- CSS -->
    <link href="fonts/bebas/stylesheet.css" rel="stylesheet" media="screen">
    <link href="fonts/proximanova/stylesheet.css" rel="stylesheet" media="screen">
    <link href="css/style.css" rel="stylesheet" media="screen">
  <!-- END OF CSS -->
</head>
<body class="start_page">   
  <div class="wrapper">
    <div class="inner">
      <!-- head -->
      <div class="head">
        <div class="header clearfix">
          <div class="logo">
            <a href="/"><img src="img/logo.jpg" alt=""></a>
          </div>
          <div class="header_icons">
            <div class="header_icon_box"><img src="img/header_icon1.png" alt=""></div>
            <div class="header_icon_box"><img src="img/header_icon2.png" alt=""></div>
            <div class="header_icon_box"><img src="img/header_icon3.png" alt=""></div>
          </div>
        </div>
        <div class="head_body clearfix">
          <div class="girl">
            <img src="img/girl.png" alt="">
          </div>
          <div class="head_left">
            <div class="head_title">dual action</div>
            <div class="head_subtitle">fat blocker and fat burner!</div>
            <div class="head_list">
              <ul>
                <li>
                  <div class="head_list_title">Burns Fat Quickly</div>
                  <div class="head_list_text">start losing fat today without crazy diets</div>
                </li>
                <li>
                  <div class="head_list_title">Suppresses Appetite</div>
                  <div class="head_list_text">all natural & safe proven ingredients</div>
                </li>
                <li>
                  <div class="head_list_title">Blocks Fat Formation</div>
                  <div class="head_list_text">maximize fat loss effects every day</div>
                </li>
              </ul>
              <div class="bottles">
                <img src="img/bottles.png" alt="">
              </div>
            </div>
            <div class="bottle_today">
              <div class="bottle_today_title">claim your bottle today!</div>
              <div class="bottle_today_text">100% Natural Pure Garcinia Cambogia</div>
              <div class="bottle_stamp">
                <img src="img/hca.png" alt="">
              </div>
            </div>
            <div class="head_left_footer clearfix">
              <div class="head_text_left"><b><span>Advanced</span> fat burning</b> for proven dramatic results</div>
              <div class="head_text_right"><span>Hurry!</span> only while  supplies last! supplies are very limited</div>
            </div>
          </div>
          <div class="head_form">
            <div class="form_head">
              <div class="form_title">Tell us where to send</div>
              <div class="form_subtitle"><b>your</b> bottle today!</div>
            </div>
            <div class="form_body">
              
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
              <script type='text/javascript' src='https://www.thetrajangroup.com/admin/js/includes/jquery-1.11.1.js'></script>
              <script type='text/javascript' src='https://www.thetrajangroup.com/admin/js/includes/jquery-migrate-1.2.1.js'></script>
              <script type='text/javascript'>
                /*
                 * clients can use this jQuery instance ll(), but do not remove
                 */
                var ll = jQuery.noConflict();
                var currencySymbol = '$';
                var c_left = '$';
                var c_right = '';
              </script>
              <script type='text/javascript' src='https://www.thetrajangroup.com/admin/js/nocache.php?f=webForms.js'></script>
              <script type="text/javascript">
                /*
                 * Below limelight_message array is meant to allow you to translate javascript based messages to whatever language your webform is intended for.  webForms.js is out of your control
                 */
                var limelight_messages=new Array();
                //Error messages
                limelight_messages["invalid_military"]            = 'All military states must have a city of either "APO", "FPO", or "DPO".  Please adjust your city.';    //caller inline - form_validator()
                limelight_messages["invalid_email"]               = "Invalid E-mail Address";              //caller webForms.js - isValidEmail()
                limelight_messages["invalid_promo"]               = "Please enter a valid promo code.";    //caller webForms.js - CheckProductCode()
                limelight_messages["invalid_routing_number"]      = "Please Enter Your Routing Number";    //caller inline - form_validator()
                limelight_messages["invalid_account_number"]      = "Please Enter Your Account Number";    //caller inline - form_validator()
                limelight_messages["invalid_eft_bank_number"]     = "Please Enter Your Bank Number";       //caller inline - form_validator()
                limelight_messages["invalid_eft_account_number"]  = "Please Enter Your Account Number";    //caller inline - form_validator()
                limelight_messages["invalid_no_fields_entered"]   = "Please Fill in all fields";           //caller inline - form_validator()
                limelight_messages["invalid_credit_card"]         = "Invalid credit card number";          //caller inline - form_validator()
                limelight_messages["invalid_boleto"]              = "Invalid CNPJ or CPF ID";              //caller inline - form_validator()
                limelight_messages["invalid_terms"]               = "Please Agree with the Terms";         //caller inline - form_validator()
                limelight_messages["invalid_billing_fname"]       = "Please enter your Billing First Name";//caller inline - form_validator()
                limelight_messages["invalid_billing_lname"]       = "Please enter your Billing Last Name"; //caller inline - form_validator()
                limelight_messages["invalid_billing_city"]        = "Please enter your Billing City";      //caller inline - form_validator()
                limelight_messages["invalid_billing_address"]     = "Please enter your Billing Address";   //caller inline - form_validator()
                limelight_messages["invalid_billing_zip"]         = "Please enter your Billing Zip";       //caller inline - form_validator()
                limelight_messages["invalid_billing_country"]     = "Please chooose your Billing Country"; //caller inline - form_validator()
                limelight_messages["invalid_state"]               = "Please specify the state";            //caller inline - form_validator()
                limelight_messages["invalid_ssn"]                 = "Please specify the Last 4 SSN#";      //caller inline - form_validator()
                limelight_messages["invalid_attributes"]          = "Please make a selection for all options on the chosen product";    //caller inline - form_validator()
                limelight_messages["invalid_attributes_upsell"]   = "Please make a selection for all options on the chosen product(s)"; //caller inline - form_validator()

                //Text messages
                limelight_messages["txt_issue_id"]    = "Issue Id:";                           //caller webForms.js - payment_change() for solo/switch/maestro
                limelight_messages["txt_cvv"]         = "Security Code:";                      //caller webForms.js - payment_change() for other card types when solo/switch/maestro are used
                limelight_messages["txt_credit_card"] = "Credit Card Number:";                 //caller webForms.js - payment_change() when toggling between boleto and credit card numbers the same data element is used and label changed
                limelight_messages["txt_boleto"]      = "CNPJ or CPF ID:";                     //caller webForms.js - payment_change() when toggling between boleto and credit card numbers the same data element is used and label changed
                limelight_messages["txt_account_no"]  = "Account Number:";                     //caller webForms.js - payment_change() when toggling between checking and EFT payments the same data element is used and label changed
                limelight_messages["txt_routing_no"]  = "Routing Number:";                     //caller webForms.js - payment_change() when toggling between checking and EFT payments the same data element is used and label changed
                limelight_messages["txt_eft_bank_no"] = "Bank Number:";                        //caller webForms.js - payment_change() when toggling between checking and EFT payments the same data element is used and label changed
                limelight_messages["txt_eft_act_no"]  = "Account Number:";                     //caller webForms.js - payment_change() when toggling between checking and EFT payments the same data element is used and label changed
                limelight_messages["txt_secret_ssn"]  = "Last 4 SSN#:";

                //State Labels

                limelight_messages["txt_state_label_state"]      = "State";                     //caller webForms.js - ChangeStateLabel()
                limelight_messages["txt_state_label_province"]      = "Province";                     //caller webForms.js - ChangeStateLabel()
                limelight_messages["txt_state_label_county"]      = "County";                     //caller webForms.js - ChangeStateLabel()
                limelight_messages["txt_state_label_island"]      = "Island";                     //caller webForms.js - ChangeStateLabel()
                limelight_messages["txt_state_label_parish"]      = "Parish";                     //caller webForms.js - ChangeStateLabel()
                limelight_messages["txt_state_label_region"]      = "Region";                     //caller webForms.js - ChangeStateLabel()
                limelight_messages["txt_state_label_district"]      = "District";                     //caller webForms.js - ChangeStateLabel()
                limelight_messages["txt_state_label_governorate"]      = "Governorate";                     //caller webForms.js - ChangeStateLabel()
                limelight_messages["txt_state_label_division"]      = "Division";                     //caller webForms.js - ChangeStateLabel()
                limelight_messages["txt_state_label_department"]      = "Department";                     //caller webForms.js - ChangeStateLabel()
                limelight_messages["txt_state_label_municipality"]      = "Municipality";                     //caller webForms.js - ChangeStateLabel()
                limelight_messages["txt_state_label_prefecture"]      = "Prefecture";                     //caller webForms.js - ChangeStateLabel()
                limelight_messages["txt_state_label_commune"]      = "Commune";                     //caller webForms.js - ChangeStateLabel()
                limelight_messages["txt_state_label_quarter"]      = "Quarter";                     //caller webForms.js - ChangeStateLabel()
                limelight_messages["txt_state_label_canton"]      = "Canton";                     //caller webForms.js - ChangeStateLabel()
                limelight_messages["txt_state_label_emirate"]      = "Emirate";                     //caller webForms.js - ChangeStateLabel()
                limelight_messages["txt_state_label_city"]      = "City";                     //caller webForms.js - ChangeStateLabel()

                limelight_messages["txt_state_select_state"]      = "Select State";                     //caller webForms.js - ChangeCountry() first selection in select box label
                limelight_messages["txt_state_select_province"]      = "Select Province";                     //caller webForms.js - ChangeCountry() first selection in select box label
                limelight_messages["txt_state_select_county"]      = "Select County";                     //caller webForms.js - ChangeCountry() first selection in select box label
                limelight_messages["txt_state_select_island"]      = "Select Island";                     //caller webForms.js - ChangeCountry() first selection in select box label
                limelight_messages["txt_state_select_parish"]      = "Select Parish";                     //caller webForms.js - ChangeCountry() first selection in select box label
                limelight_messages["txt_state_select_region"]      = "Select Region";                     //caller webForms.js - ChangeCountry() first selection in select box label
                limelight_messages["txt_state_select_district"]      = "Select District";                     //caller webForms.js - ChangeCountry() first selection in select box label
                limelight_messages["txt_state_select_governorate"]      = "Select Governorate";                     //caller webForms.js - ChangeCountry() first selection in select box label
                limelight_messages["txt_state_select_division"]      = "Select Division";                     //caller webForms.js - ChangeCountry() first selection in select box label
                limelight_messages["txt_state_select_department"]      = "Select Department";                     //caller webForms.js - ChangeCountry() first selection in select box label
                limelight_messages["txt_state_select_municipality"]      = "Select Municipality";                     //caller webForms.js - ChangeCountry() first selection in select box label
                limelight_messages["txt_state_select_prefecture"]      = "Select Prefecture";                     //caller webForms.js - ChangeCountry() first selection in select box label
                limelight_messages["txt_state_select_commune"]      = "Select Commune";                     //caller webForms.js - ChangeCountry() first selection in select box label
                limelight_messages["txt_state_select_quarter"]      = "Select Quarter";                     //caller webForms.js - ChangeCountry() first selection in select box label
                limelight_messages["txt_state_select_canton"]      = "Select Canton";                     //caller webForms.js - ChangeCountry() first selection in select box label
                limelight_messages["txt_state_select_emirate"]      = "Select Emirate";                     //caller webForms.js - ChangeCountry() first selection in select box label
                limelight_messages["txt_state_select_city"]      = "Select City";                     //caller webForms.js - ChangeCountry() first selection in select box label

                var required_fields=new Array();
                var required_fields_label=new Array();

                required_fields[0]='fields_fname';
                required_fields_label[0]='First Name';
                required_fields[1]='fields_lname';
                required_fields_label[1]='Last Name';
                required_fields[2]='fields_address1';
                required_fields_label[2]='Street Address';
                required_fields[3]='fields_city';
                required_fields_label[3]='City';
                required_fields[4]='fields_zip';
                required_fields_label[4]='Zip Code';
                required_fields[5]='fields_state';
                required_fields_label[5]='State';
                required_fields[6]='fields_phone';
                required_fields_label[6]='Phone';
                required_fields[7]='fields_email';
                required_fields_label[7]='Email';

                /*
                 * AlertHandler allows you to either use a standard alert to show errors or customize to some kind of HTML version of your own
                 */

                function AlertHandler(message)
                {
                   alert(message);
                }

                /*
                 * ConfirmHandler allows you to either use a standard winbdow.confirm to show errors or customize to some kind of HTML version of your own. Must return boolean
                 */
                function ConfirmHandler(message)
                {
                   return window.confirm(message);
                }

                function form_validator()
                {
                   if (document.getElementById('hasFormSubmitted').value != '')
                   {
                      var prevPost = new Date(document.getElementById('hasFormSubmitted').value);
                      prevPost.setSeconds(prevPost.getSeconds() + 3);
                      var currentTime = new Date();
                      if (prevPost < currentTime)
                      {
                         // -- blank out the formsubmitted because user went back and forth and hidden values still cached
                         document.getElementById('hasFormSubmitted').value = '';
                      }
                   }

                   var ccReq = false;
                   var empty_fields=new Array();
                   var empty_field_num=new Array();
                   var empty_count=0;
                   var str='field indicated Cant be empty:';

                   for (i=0;i<required_fields.length;i++)
                   {
                      var field_ref=document.getElementById(required_fields[i]);

                      if (required_fields[i] == 'cc_number')
                      {
                         ccReq = true;
                      }

                      var alt_pay_providers = ['paypal','amazon','icepay','gocoin','bitcoin_pg','sepa','eft_germany','offline','boleto','giro','checking'];
                      var is_cc_field = (required_fields[i] == 'cc_number' || required_fields[i] == 'cc_expires' || required_fields[i] == 'cc_cvv');

                      if (is_cc_field && (alt_pay_providers.indexOf(document.getElementById('cc_type').value) > -1))
                      {
                         ccReq = false;
                         continue;
                      }

                      if (required_fields[i] == 'fields_state2')
                      {
                         var funcName = 'SetCountryValue2';
                         if (typeof funcName == 'string' && eval('typeof ' + funcName) == 'function')
                         {
                            eval(funcName+'()');
                         }
                      }

                      if (required_fields[i] == 'fields_state2' || required_fields[i] == 'fields_state') {
                         if (validateMilitary(required_fields[i],'fields_city') == false)
                         {
                            AlertHandler(GetTranslation('invalid_military'));
                            return;
                         }
                      }


                      //catch all spaces, this is invalid
                      var tempStr = field_ref.value.ltrim();

                      if ((tempStr =='') || (tempStr == ' '))
                      {
                         var label = required_fields_label[i];
                         if (label == 'State')
                         {
                            label = ll('#fields_state_region').text().replace(':', '');
                         }
                         empty_fields[empty_count] = label;
                         empty_field_num[empty_count]=i;
                         empty_count++;
                      }
                      if((field_ref.length==0)||(field_ref.value==null) || (field_ref.value==''))
                      {
                         empty_fields[empty_count]=required_fields_label[i];
                         empty_field_num[empty_count]=i;
                         empty_count++;
                      }
                   }

                   if (document.getElementById('cc_type'))
                   {
                      if (document.getElementById('cc_type').value == 'checking' || document.getElementById('cc_type').value == 'eft_germany')
                      {
                         // -- checking account / eft validation
                         var routing_key = 'invalid_routing_number',
                             account_key = 'invalid_account_number',
                             ssn_key     = 'invalid_ssn',
                             need_ssn    = '';

                         if (document.getElementById('cc_type').value == 'eft_germany')
                         {
                            var routing_key = 'invalid_eft_bank_number',
                                account_key = 'invalid_eft_account_number';
                         }

                         field_ref = document.getElementById('routing_number');
                         if((field_ref.length==0)||(field_ref.value==null) || (field_ref.value==''))
                         {
                            AlertHandler(GetTranslation(routing_key));
                            field_ref.focus();
                            return;
                         }
                         field_ref = document.getElementById('account_number');
                         if((field_ref.length==0)||(field_ref.value==null) || (field_ref.value==''))
                         {
                            AlertHandler(GetTranslation(account_key));
                            field_ref.focus();
                            return;
                         }
                         if(need_ssn==1)
                         {
                            field_ref = document.getElementById('secret_ssn');
                            if((field_ref.length==0)||(field_ref.value==null) || (field_ref.value==''))
                            {
                               AlertHandler(GetTranslation(ssn_key));
                               field_ref.focus();
                               return;
                            }
                         }
                      }
                   }

                   for(x in empty_fields)
                   {
                      str=str+'<br/>'+empty_fields[x];
                      if(empty_fields[x] != undefined )
                      {
                         AlertHandler('Please Enter Your ' + empty_fields[x] + '');
                         document.getElementById(required_fields[empty_field_num[x]]).focus();
                      }
                      else
                      {
                         AlertHandler(GetTranslation('invalid_no_fields_entered'));
                      }
                      return;
                   }

                   if ( document.getElementById('cc_number')!=undefined && (ccReq || document.getElementById('cc_type').value == 'boleto'))
                   {
                      if (document.getElementById('cc_type').value == 'boleto' && document.getElementById('cc_number').value.length < 11)
                      {
                         AlertHandler(GetTranslation('invalid_boleto'));
                         return;
                      }
                      else if (document.getElementById('cc_type').value != 'boleto' && document.getElementById('cc_number').value.length<13)
                      {
                         AlertHandler(GetTranslation('invalid_credit_card'));
                         return;
                      }
                   }
                   var tm_check = document.getElementById('terms');
                   if(tm_check && tm_check.checked==false)
                   {
                      AlertHandler(GetTranslation('invalid_terms'));
                      return;
                   }
                   if (document.getElementById('radioTwo')!=undefined)
                   {
                      var radio2Obj = document.getElementById('radioTwo');
                      if (radio2Obj.checked)
                      {
                         field_ref = document.getElementById('billing_street_address');
                         if((field_ref.length==0)||(field_ref.value==null) || (field_ref.value=='') || (field_ref.value.ltrim() == '') )
                         {
                            AlertHandler(GetTranslation('invalid_billing_address'));
                            return;
                         }
                         field_ref = document.getElementById('billing_fname');
                         if((field_ref.length==0)||(field_ref.value==null) || (field_ref.value=='') || (field_ref.value.ltrim() == '') )
                         {
                            AlertHandler(GetTranslation("invalid_billing_fname"));
                            return;
                         }
                         field_ref = document.getElementById('billing_lname');
                         if((field_ref.length==0)||(field_ref.value==null) || (field_ref.value=='') || (field_ref.value.ltrim() == '') )
                         {
                            AlertHandler(GetTranslation("invalid_billing_lname"));
                            return;
                         }
                         field_ref = document.getElementById('billing_city');
                         if((field_ref.length==0)||(field_ref.value==null) || (field_ref.value=='') || (field_ref.value.ltrim() == ''))
                         {
                            AlertHandler(GetTranslation('invalid_billing_city'));
                            return;
                         }
                         var state_select_is_visible = (ll('#billing_state').is(':visible') == true);
                         field_ref = document.getElementById('billing_state');
                         if (state_select_is_visible)
                         {
                            if((field_ref.length==0)||(field_ref.value==null) || (field_ref.value=='') || (field_ref.value.ltrim() == ''))
                            {
                               var label = ll('#billing_state_region').text().replace(':', '');
                               AlertHandler("Please enter your " + label);
                               return;
                            }

                            if (validateMilitary('billing_state','billing_city') == false)
                            {
                               AlertHandler(GetTranslation('invalid_military'));
                               return;
                            }
                         }
                         var region_is_visible = (ll('#billing_state2').is(':visible') == true);
                         field_ref = document.getElementById('billing_state2');
                         if (region_is_visible)
                         {
                            if((field_ref.length==0)||(field_ref.value==null) || (field_ref.value=='') || (field_ref.value.ltrim() == ''))
                            {
                               var label = ll('#billing_state_region').text().replace(':', '');
                               AlertHandler("Please enter your " + label);
                               return;
                            }
                            else
                            {
                               //store the international region value
                               ll(new Option(ll('#billing_state2').val(), ll('#billing_state2').val())).appendTo('#billing_state').attr('selected', 'selected');
                            }
                         }

                         field_ref = document.getElementById('billing_postcode');
                         if((field_ref.length==0)||(field_ref.value==null) || (field_ref.value=='') || (field_ref.value.ltrim() == ''))
                         {
                            AlertHandler(GetTranslation('invalid_billing_zip'));
                            return;
                         }
                         if (document.getElementById('billing_country')!=undefined)
                         {
                            field_ref = document.getElementById('billing_country');
                            if((field_ref.length==0)||(field_ref.value==null) || (field_ref.value=='') || (field_ref.value.ltrim() == ''))
                            {
                               AlertHandler(GetTranslation('invalid_billing_country'));
                               return;
                            }
                         }

                      }
                   }
                   if(empty_count!=0)
                   {
                      var diverr=document.getElementById('err');
                      diverr.innerHTML='';
                      diverr.innerHTML=str;
                   }
                   else
                   {
                      // Validate product attributes, if applicable
                      if (typeof(prod_var_required) != 'undefined' && prod_var_required.length)
                      {
                         // Main product
                         var prod_id = ll('#custom_product').val();

                         if (inArray(prod_id, prod_var_required) && (! ll('#product_variant_0_' + prod_id).length || ll('#product_variant_0_' + prod_id).val() == ''))
                         {
                            AlertHandler(GetTranslation('invalid_attributes'));
                            return false;
                         }

                         // Upsells
                         upsell_valid = true;

                         ll.each(ll('.upsell_price_x'), function()
                         {
                            var prod_id = ll(this).attr('id').replace(/[^0-9]/g, '');

                            if (inArray(prod_id, prod_var_required) && ll('#upsell_' + prod_id).length && ll('#upsell_' + prod_id).is(':checked') && (! ll('#product_variant_0_' + prod_id).length || ll('#product_variant_0_' + prod_id).val() == ''))
                            {
                               upsell_valid = false;
                               return false;
                            }
                         });

                         if (! upsell_valid)
                         {
                            AlertHandler(GetTranslation('invalid_attributes_upsell'));
                            return false;
                         }
                      }

                      if (ll('#fields_email').is(':visible') == true)
                      {
                         var emailCheck = isValidEmail(document.forms['opt_in_form'].fields_email.value);
                      }
                      else
                      {
                         var emailCheck = true;
                      }

                      data_verification_provider_id = ll("input[name='data_verification_provider_id']").val()

                      if (emailCheck)
                      {
                         valid_submit = true;

                         if (data_verification_provider_id > 0)
                         {
                            valid_submit = data_validation_provider(data_verification_provider_id);
                         }

                         var alt_pay_providers_interactive = ['paypal','amazon','icepay','gocoin','bitcoin_pg'];
                         if (valid_submit)
                         {
                            if (document.getElementById['state_cus2']!=undefined)
                            {
                               if ((document.getElementById['state_cus2'].style.display == 'inline') && (document.forms['opt_in_form'].fields_state2.value.length<2))
                               {
                                  AlertHandler(GetTranslation('invalid_state'));
                                  return;
                               }
                               else
                               {
                                  if (document.getElementById('hasFormSubmitted').value == '')
                                  {
                                     if (alt_pay_providers_interactive.indexOf(ll('#cc_type').val()) > -1 && ! (ll('#is_braintree_with_paypal').length && (ll('#is_braintree_with_paypal').val() == '1')))
                                     {
                                        alt_pay_pop_up();
                                     }
                                     else
                                     {
                                        SubmitForm();
                                     }
                                  }
                               }
                            }
                            else
                            {
                               if (document.getElementById('hasFormSubmitted').value == '')
                               {
                                  if (alt_pay_providers_interactive.indexOf(ll('#cc_type').val()) > -1 && ! (ll('#is_braintree_with_paypal').length && (ll('#is_braintree_with_paypal').val() == '1')))
                                  {
                                     alt_pay_pop_up();
                                  }
                                  else
                                  {
                                     SubmitForm();
                                  }
                               }
                            }
                         }
                      }
                   }
                }

                function SubmitForm()
                {
                   var d=new Date();
                   document.getElementById('hasFormSubmitted').value = d.toUTCString();
                   document.charset = 'ISO-8859-1';
                   document.opt_in_form.submit();
                }


                //Kount Pixel technology hooked into LimeLight (DONT REMOVE)
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

                   ll("body").append('<iframe width=1 height=1 frameborder=0 scrolling=no src="https://www.thetrajangroup.com/pixel.php?t=htm&campaign_id=237&sessionId='+ unix +'"><img width=1 height=1 src="https://www.thetrajangroup.com/pixel.php?t=gif&campaign_id=237&sessionId='+ unix +'"/></iframe>');
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


                   campaignId = 237;

                   

                   ll('#validate_button').click(function()
                   {
                      ValidatePromoCode();
                   });

                   hidState = ll('#fields_state_hid');
                   if (hidState.length && hidState.val().length > 0)
                   {
                      var list = {
                         obj       : '#country',
                         targetObj : '#state_cus1',
                         sel       : hidState.val(),
                         id        : false,
                         spinner   : false,
                         focus     : false
                      };
                      ChangeCountry(list);
                   }

                   hidBillingState = ll('#billing_state_hid');
                   if (hidBillingState.length && hidBillingState.val().length > 0)
                   {
                      var list = {
                         obj       : '#billing_country',
                         targetObj : '#billing_state_cus1',
                         sel       : hidBillingState.val(),
                         id        : 'billing_state',
                         spinner   : false,
                         focus     : false
                      };
                      ChangeCountry(list);
                   }

                   // Re-check billing fields
                   if (ll('input[name="billingSameAsShipping"]:checked').val() == 'no')
                   {
                      ll('#radioTwo').click();
                   }
                });
              </script>

              <form accept-charset='ISO-8859-1' enctype='application/x-www-form-urlencoded;charset=ISO-8859-1' name='opt_in_form' id='opt_in_form' action='https://www.thetrajangroup.com/index.php?main_page=two_step_form_processor' method='post'>
                <table cellpadding=2px cellspacing=2px>
                  <input type='hidden' name='limelight_charset' id='limelight_charset' value='ISO-8859-1'/>
                  <input type='hidden' name = 'product_name' id='product_name' value= "Garcinia Plus: 15-Day Trial Membership" />
                  <tbody id='fields_fname_tr'>
                    <tr>
                      <td align="right"><label for="fields_fname">First Name:</label></td>
                      <td align="left"><input  type='text' id='fields_fname' name='fields_fname' /></td>
                    </tr>
                  </tbody>
                  <tbody id='fields_lname_tr'>
                    <tr>
                      <td align="right"><label for="fields_lname">Last Name:</label></td>
                      <td align="left"><input  type='text' id='fields_lname' name='fields_lname' /></td>
                    </tr>
                  </tbody>
                  <tbody id='fields_address1_tr'>
                    <tr>
                      <td align="right"><label for="fields_address1">Street Address:</label></td>
                      <td align="left"><input  type='text' id='fields_address1' name='fields_address1' /></td>
                    </tr>
                  </tbody>
                  <tbody id='fields_address2_tr'>
                    <tr>
                      <td align="right"><label for="fields_address2">Street Address 2:</label></td>
                      <td align="left"><input  type='text' id='fields_address2' name='fields_address2' /></td>
                    </tr>
                  </tbody>
                  <tbody id='fields_city_tr'>
                    <tr>
                      <td align="right"><label for="fields_city">City:</label></td>
                      <td align="left"><input  type='text' id='fields_city' name='fields_city' /></td>
                    </tr>
                  </tbody>
                  <tbody id='fields_zip_tr'>
                    <tr>
                      <td align="right"><label for="fields_zip">Zip Code:</label></td>
                      <td align="left"><input  type='text' id='fields_zip' name='fields_zip' /></td>
                    </tr>
                  </tbody>
                  <tr>
                    <td align="right"><label for="fields_state" id="fields_state_region">State:</label></td>
                    <td align="left">
                      <div id="state_cus1">
                        <div class="select-outer" style="width:180px;" onclick="">
                          <div class="select-inner" style="">
                            <select border="0"  class="" id="fields_state" style="" name="fields_state"  size="1" onchange="SetStateHid(this);" >
                              <option value="" onclick="" >Select State</option>
                              <option value="AL" onclick="" >Alabama (AL)</option>
                              <option value="AK" onclick="" >Alaska (AK)</option>
                              <option value="AS" onclick="" >American Samoa (AS)</option>
                              <option value="AZ" onclick="" >Arizona (AZ)</option>
                              <option value="AR" onclick="" >Arkansas (AR)</option>
                              <option value="AE-A" onclick="" >Armed Forces Africa (AE)</option>
                              <option value="AA" onclick="" >Armed Forces Americas (AA)</option>
                              <option value="AE-C" onclick="" >Armed Forces Canada (AE)</option>
                              <option value="AE-E" onclick="" >Armed Forces Europe (AE)</option>
                              <option value="AE-M" onclick="" >Armed Forces Middle East (AE)</option>
                              <option value="AP" onclick="" >Armed Forces Pacific (AP)</option>
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
                              <option value="WY" onclick="" >Wyoming (WY)</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <input type="text" id="fields_state_hid" name="fields_state_hid" style="display: none;"/>
                    </td>
                  </tr>
                  <tr>
                    <td align="right"><label for='fields_phone'>Phone:</label></td>
                    <td align="left">
                      <input type="text" onkeydown="return onlyNumbers(event,'phone')" id="fields_phone" name="fields_phone" />
                    </td>
                  </tr>
                  <tbody id='fields_email_tr'>
                    <tr>
                      <td align="right"><label for="fields_email">Email:</label></td>
                      <td align="left"><input type="text" id="fields_email" name="fields_email" /></td>
                    </tr>
                  </tbody>
                  <tr>
                    <td><input type='hidden' name = 'step' value='first' /><input type='hidden' id='hasFormSubmitted' value='' /><input type='hidden' id='campaign_id' name='campaign_id' value='237' /></td>
                  </tr>
                  <input type="hidden" id="isWebForm" value="1"/>
                  <input type='hidden' name='is_upsell' value='0'>
                  <?php
                    foreach($_GET as $key => $value) {
                      echo "<input type='hidden' id='".safeRequest($key)."' name='".safeRequest($key)."' value='".safeRequest($_GET[$key])."'>";
                    }
                  ?>
                  <input type='hidden' name='data_provider_previous_values' value=''/><input type='hidden' name='data_verification_provider_id' value='0'/>
                  <tr>
                    <td colspan="2" style="padding: 0px;"><input id='btn_submit_form' type='button' value='Rush my order' onclick='form_validator();'></td>
                  </tr>
                </table>
              </form>

            </div>
            <div class="form_footer">
              <div class="form_icons">
                <img src="img/form_icon1.png" alt="">
                <img src="img/form_icon2.png" alt="">
                <img src="img/form_icon3.png" alt="">
              </div>
              <div class="form_safe">100% Safe & secure transactions & worry free</div>
            </div>
          </div>
        </div>
      </div>
      <!-- END OF head -->

      <!-- main -->
      <div id="main">
        <div class="two_box clearfix">
          <div class="box box_left">
            <div class="content_box">
              <img src="img/garcinia.png" alt="" style="float: right;">
              <h2><b>What is</b> Garcinia Cambogia?</h2>
              <div class="subtitle">the amazing fat blocking fruit</div>
              <p>Exciting new breakthrough in natural weight loss is an ingredient that lets you Lose Weight without Diet or Exercise.*</p>
              <p>HCA extract is an acid known for many of its benefits. The increase in serotonin helps emotional eaters get better sleep and improve their moods. HCA also acts as an Appetite Suppressant*.</p>
              <p>The HCA in Pure Garcinia Cambogia helps prevent new fat cells from forming* by inhibiting the citrate lyase enzyme from converting excess carbohydrates into fat. As the fat gets blocked from being made, you start seeing the results! By managing the stress hormone, cortisol, you begin to manage your belly fat. This magic ingredient makes sense! It's a simple solution to bust your fat! simple solution to bust your fat!</p>
              <br/><br/>
              <img src="img/bottles.png" alt="" style="float: right;">
              <h2><b>Why</b> Garcinia Cambogia Plus?</h2>
              <p>Garcinia Cambogia PLUS is carefully produced in our GNP Certified Lab without any fillers, binders or chemical additives of any kind.</p>
              <p>The greatest part of Pure Garcinia Cambogia is it's a dual action fat buster! It prevents fat from being made and suppresses your appetite. Now you can lose weight without diet and exercise!</p>
              <p>No more spending hours and hours at the gym exercising, and you can say goodbye to shopping for expensive diet foods. Go with the solution that makes sense! </p>
            </div>
            <a href="" class="a_two_button">
              <span class="a_left">lose weight without diet & exercise!</span>
              <span class="a_right">click here</span>
            </a>
          </div>
          <div class="box box_right">
            <div class="content_box">
              <h2>Why Does It Have Scientists and Media Buzzing?</h2>
              <p>The most talked about natural weight loss is finally here! A pumpkin shaped fruit that grows in Southeast Asia and India, Garcinia Cambogia is a revolutionary breakthrough!</p>
              <p>Garcinia Cambogia contains a key ingredient HCA (Hydroxycitric Acid), which is extracted from the rind of the fruit. This is mother nature's answer to weight loss!</p>
              <br/>
              <h3>helps stop fat from being made!</h3>
            </div>
          </div>
        </div>
        <div class="box box2">
          <div class="content_box">
            <div class="content_left">
              <h2><b>How</b> Does Hydroxycitric Acid (HCA) work?</h2>
              <h3>the power combination that burns the weight</h3>
              <p>Garcinia Cambogia PLUS works as a Fat Burner, Appetite Suppressant and Mood Enhancer. That power combination of effects is what allows people to Lose Weight.</p>
              <p>HCA inhibits citrate lyase enzyme in your body which is known to be an important catalyst in the metabolic process of converting excess carbohydrates into fat.</p>
              <br/><br/>
              <img src="img/content_img1.png" alt="" style="margin-left: -10px;">
            </div>
            <div class="content_right">
              <br/><br/><br/><br/><br/>
              <img src="img/molecule.png" alt="" style="margin-left: 40px;margin-bottom: 10px;">
              <h3>garcinia helps you see results fast!</h3>
              <p>The latest study proved Garcinia prevents liver cells from becoming fibrotic and stops the cellular damage caused by too much lipids in the bloodstream.</p>
              <p>Eating is affiliated with emotion. Garcinia Cambogia PLUS increases your serotonin levels, which leads to better mood and sleep.</p>
              <p>HCA also helps manage your stress hormones (cortisol), and in return you effectively attack that belly fat and see fast results!</p>
            </div>
          </div>
          <div class="content_footer">
            <div class="content_footer_text">
              <p><b>Burn Fat</b> Quicker and More Efficiently!</p></div>
            <div class="content_footer_img">
              <img src="img/content_img2.jpg" alt="">
              <img src="img/content_img3.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="box box3">
          <h2><b>Garcinia Cambogia</b> Helps Stop Fat From Being Made</h2>
          <div class="benefits_box benefits1">
            <img src="img/benefits_img1.png" alt="">
          </div>
          <div class="benefits_box benefits2">
            <div class="benefits_img"><img src="img/benefits_img2.jpg" alt=""></div>
            <div class="benefits_title">Burns Fat Quickly</div>
            <div class="benefits_text">Start losing fat today without crazy diets</div>
          </div>
          <div class="benefits_box benefits3">
            <div class="benefits_img"><img src="img/benefits_img3.jpg" alt=""></div>
            <div class="benefits_title">blocks fat formation</div>
            <div class="benefits_text">Maximize Fat loss effects every day</div>
          </div>
          <div class="benefits_box benefits4">
            <div class="benefits_img"><img src="img/benefits_img4.jpg" alt=""></div>
            <div class="benefits_title">serotonin increase</div>
            <div class="benefits_text">Improves overall mood. Feel better, comfortable and energized.</div>
          </div>
          <div class="benefits_box benefits5">
            <div class="benefits_img"><img src="img/benefits_img5.jpg" alt=""></div>
            <div class="benefits_title">suppresses appetite</div>
            <div class="benefits_text">All natural and safe proven ingredients</div>
          </div>
          <div class="benefits_button">
            <a href="" class="a_two_button">
              <span class="a_left">lose weight naturally!</span>
              <span class="a_right">click here</span>
            </a>
          </div>
        </div>
        <div class="box box4">
          <h2><b>Does</b> Garcinia Cambogia Meet all the  Criteria?</h2>
          <div class="content_box">
            <div class="content_left">
              <img src="img/couple.jpg" alt="">
            </div>
            <div class="content_right">
              <div class="list_criteria">
                <ul>
                  <li>
                    <div class="criteria_title">Contains 60% Hydroxycitric Acid (HCA)</div>
                    <div class="criteria_subtitle">(more than the minimum of 50%)</div>
                    <div class="criteria_text">The key ingredient to weight loss & improved well-being. </div>
                  </li>
                  <li>
                    <div class="criteria_title">100% Pure Grade Garcinia Cambogia </div>
                    <div class="criteria_subtitle">(the highest quality available)</div>
                    <div class="criteria_text">Contains absolutely no fillers, binders or artificial ingredients.</div>
                  </li>
                  <li>
                    <div class="criteria_title">Contains 1000mg Per Serving</div>
                    <div class="criteria_subtitle"></div>
                    <div class="criteria_text">Over 50% more of the dose of most extracts.</div>
                  </li>
                  <li>
                    <div class="criteria_title">FDA Compliant Manufacturing Facility</div>
                    <div class="criteria_subtitle"></div>
                    <div class="criteria_text">Garcinia Cambogia Extract is manufactured in an FDA compliant, GMP compliant laboratory.</div>
                  </li>
                </ul>
              </div>
              <div class="criteria_content">
                <div class="criteria_title"></div>
                <div class="criteria_text">
                  <p>Garcinia Cambogia Extract is the only supplement that meets all of these benchmarks! We trust you’ll order today because our Garcinia Cambogia is quality and made in the U.S.A. in FDA compliant and GMP compliant facilities!</p>
                </div>
                <div class="criteria_img">
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END OF main -->

      <!-- footer -->
      <div class="footer">
        <div class="footer_top">
          <div class="footer_social">
            <a href=""><img src="img/fb.jpg" alt=""></a>
            <a href=""><img src="img/tw.jpg" alt=""></a>
            <a href=""><img src="img/youtube.jpg" alt=""></a>
            <a href=""><img src="img/google.jpg" alt=""></a>
          </div>
          <div class="footer_certificate">
            <a href=""><img src="img/fda.jpg" alt=""></a>
            <a href=""><img src="img/gmp.png" alt=""></a>
          </div>
          <div class="footer_post">
            <a href=""><img src="img/usps.png" alt=""></a>
            <a href=""><img src="img/ups.png" alt=""></a>
            <a href=""><img src="img/fedex.png" alt=""></a>
          </div>
          <div class="footer_payment">
            <a href=""><img src="img/visa.png" alt=""></a>
            <a href=""><img src="img/mastercard.png" alt=""></a>
            <a href=""><img src="img/discover.png" alt=""></a>
          </div>
          <div class="footer_secure">
            <a href=""><img src="img/comodo.png" alt=""></a>
          </div>
        </div>
        <div class="footer_middle">
          <p>All Content Copyright © 2016 Garcinia Plus - All Rights Reserved </p>
          <p>Terms and Conditions  |  Privacy Policy  |  Contact Us  |  877-900-2879</p>
        </div>
        <div class="footer_bottom">
          <p>This product is not for use by or sale to persons under the age of 18. This product should be used only as directed on the label. It should not be used if you are pregnant or nursing. Consult with a physician before use if you have a serious medical condition or use prescription medications. A doctor's advice should be sought before using this and any supplemental dietary product. All trademarks and copyrights are the property of their respective owners and are not affiliated with nor do they endorse Garcinia Plus. These statements have not been evaluated by the FDA. This product is not intended to diagnose, treat, cure, or prevent any disease. Individual weight loss results will vary. By using this site you agree to follow the Privacy Policy and all Terms & Conditions printed on this site. Void Where Prohibited By Law.</p>
        </div>
      </div>
      <!-- END OF footer -->
    </div> 
  </div>
</body>
</html>