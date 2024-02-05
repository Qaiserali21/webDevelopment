<?php


include('header.php');

?>
<style>
    .itl-container {
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    flex-direction: column;
    align-items: center;
}
.itl-container__inner__survey {
    max-width: 500px;
    width: 100%;
    padding-left: 10px;
    padding-right: 10px;
}
.w-100 {
    width: 100% !important;
}
.card {
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 0 9px rgba(182, 181, 182, 0.3);
    color: #7E8977;
    max-width: 100%;
    overflow: hidden;
    position: relative;
}
.mt-5, .my-5 {
    margin-top: 3rem !important;
}
.mb-0, .my-0 {
    margin-bottom: 0 !important;
}
legend {
    box-sizing: border-box;
    color: inherit;
    display: table;
    max-width: 100%;
    padding: 0;
    white-space: normal;
}
legend h3{
    font-size: 18px;
    color: #00b5e9;
    font-weight: 600;
}
.sv-question__content {
    margin-top: 10px;
}
.sv-radio__decorator {
    border-radius: 100%;
}
.sv-item__decorator {
    position: relative;
    display: inline-block;
    box-sizing: border-box;
    width: 30px;
    height: 30px;
    border: solid 1px transparent;
    vertical-align: middle;
}
.itl-survey .itl-survey__radio .sv-radio__svg {
    border-width: 2px;
    width: 26px;
    height: 26px;
}
.sv-root-modern .sv-radio__svg {
    border-color: rgb(65, 177, 227);
    fill: transparent;
}
svg:not(:root) {
    overflow: hidden;
}
svg:not(:root) {
    overflow: hidden;
}
.sv-radio__svg {
    border: 3px solid rgba(64, 64, 64, 0.5);
    border-radius: 100%;
    fill: transparent;
}
.sv-item__svg {
    position: absolute;
    top: 50%;
    left: 50%;
    display: inline-block;
    box-sizing: border-box;
    width: 24px;
    height: 24px;
    margin-right: -50%;
    transform: translate(-50%, -50%);
}
[type="radio"] {
    box-sizing: border-box;
    padding: 0;
}
.female{
    margin-left: -10px;
}
#proceedBtn {
    background: #00e5d2;
    color: #0c144f;
    width: 400px;
    height: 45px;
    font-size: 18px;
    border-color: #00e5d2;
    border-radius: 20px;
}
#chatbot-progressbar {
    height: 20px;
    position: relative;
    overflow: hidden;
    border-radius: 25px;
    background: #e6f1f3;
    width: 100%;
}
#chatbot-progressbar #chatbot-progressbar__value {
    position: absolute;
    z-index: 1;
    transition: width 0.6s;
    padding-right: 10px;
    color: white;
    left: 0;
    text-align: right;
}
#chatbot-progressbar #chatbot-progressbar__value .value {
    font-weight: bold;
}
#chatbot-progressbar .ui-progressbar-value {
    position: absolute;
    transition: width 0.6s;
    border-radius: 25px;
    left: 0;
    height: 100%;
    background: #00b5e9;
}
.sv-question .sv-selectbase {
    margin-bottom: 4px;
}
.sv-container-modern fieldset {
    border: none;
    padding: 0;
    margin: 0;
}
.itl-survey .sv-checkbox {
    display: inherit;
}
.sv-item {
    position: relative;
    cursor: pointer;
}
.sv-selectbase__item--inline {
    display: inline-block;
    padding-right: 5%;
}
.sv-selectbase__item {
    margin-bottom: 0.425em;
    vertical-align: top;
}
.sv-selectbase__label {
    display: block;
    box-sizing: border-box;
    width: 100%;
    cursor: inherit;
}
input[type=checkbox] {
    position: absolute;
    top: 0;
    left: 0;
    visibility: hidden;
    vertical-align: middle;
    margin-right: 10px;
    width: 25px;
    height: 25px;
}
.sv-visuallyhidden {
    position: absolute;
    height: 1px;
    width: 1px;
    overflow: hidden;
    clip: rect(1px 1px 1px 1px);
    clip: rect(1px, 1px, 1px, 1px);
}
[type="checkbox"], [type="radio"] {
    box-sizing: border-box;
    padding: 0;
}
body .itl-container .steps .step-item:before, body .itl-container .is-tablet-medium .step-item:before {
    background: #4DC4D8;
}
#proceedBtn {
    background: #4DC4D8;
    color: #0c144f;
    width: 400px;
    height: 45px;
    font-size: 18px;
    border-color: #4DC4D8;
    border-radius: 20px;
}
</style>
    <body data-container="body"
          data-mage-init='{"loaderAjax": {}, "loader": { "icon": "https://consultation.my-bmi.co.uk/static/version1702452587/frontend/MyBMI/child/en_GB/images/loader-2.gif"}}'
        id="html-body" class="has-background-consultation-flow-background consultation-details-index page-layout-1column">
        <div class="d-flex flex-column justify-content-center align-items-center bg--white consultation-header-section p-2">
    <a class="f--cyan-dark" title="previous-page" id="surveyPrev" href="#"><i class="fas fa-arrow-left"></i></a>
    <a href="/" style="margin: auto; width: 200px"><img class="align-top" width="200" src="bmi-images/Weighloss_final_logo.png"></a>
</div>
<div class="page-wrapper" ><main id="maincontent" class="page-main"><a id="contentarea" tabindex="-1"></a>
<div class="page messages"><div data-bind="scope: 'messages'">
    <!-- ko if: cookieMessages && cookieMessages.length > 0 -->
    <div aria-atomic="true" role="alert" data-bind="foreach: { data: cookieMessages, as: 'message' }" class="messages">
        <div data-bind="attr: {
            class: 'message-' + message.type + ' ' + message.type + ' message',
            'data-ui-id': 'message-' + message.type
        }">
            <div data-bind="html: $parent.prepareMessageForHtml(message.text)"></div>
        </div>
    </div>
    <!-- /ko -->

    <!-- ko if: messages().messages && messages().messages.length > 0 -->
    <div aria-atomic="true" role="alert" class="messages" data-bind="foreach: {
        data: messages().messages, as: 'message'
    }">
        <div data-bind="attr: {
            class: 'message-' + message.type + ' ' + message.type + ' message',
            'data-ui-id': 'message-' + message.type
        }">
            <div data-bind="html: $parent.prepareMessageForHtml(message.text)"></div>
        </div>
    </div>
    <!-- /ko -->
</div>
</div><div class="columns"><div class="column main"><input name="form_key" type="hidden" value="LiMSlWXrct67Yhpi" /><div id="authenticationPopup" data-bind="scope:'authenticationPopup', style: {display: 'none'}">
    
</div>
<style>
    .password-strength-meter{
        background-color: white;
    }
    .password-weak .password-strength-meter, .password-none .password-strength-meter, .password-strength-meter{
        color: #DF8472;
    }
    .password-strong .password-strength-meter {
        color: #00b67a;
    }
    .password-medium .password-strength-meter {
        color: #e4832b;
    }
    .password-weak .password-strength-meter:before, .password-none .password-strength-meter:before, .password-medium .password-strength-meter:before, .password-strong .password-strength-meter:before{
        background-color: white;
    }

</style>

<div class="itl-container">
    <div class="itl-container__inner px-1">
        <div class="w-100">
            <h4 class="step-text-section w-100 text-center its-font-s--20 pt-3">4 Simple Steps</h4>
            <div class="steps mt-5 mb-1 is-tablet-medium">
                <div class="step-item is-active">
                    <div class="step-marker" style="background: #4DC4D8;"><span class="step-number-text">1</span><span class="icon-your-details-icon f--white-before"></span></div>
                    <div class="step-details">
                        <p class="step-title" style="color: #4DC4D8;">Your Details</p>
                    </div>
                </div>
                <div class="step-item">
                    <div class="step-marker" style="background: #4DC4D8;"><span class="step-number-text">2</span><span class="icon-consultation-icon"></span></div>
                    <div class="step-details">
                        <p class="step-title" style="color: #4DC4D8;">Consultation</p>
                    </div>
                </div>
                <div class="step-item">
                    <div class="step-marker" style="background: #4DC4D8;"><span class="step-number-text">3</span><span class="icon-your-treatment-icon"></span></div>
                    <div class="step-details">
                        <p class="step-title" style="color: #4DC4D8;">Your Treatment</p>
                    </div>
                </div>
                <div class="step-item">
                    <div class="step-marker" style="background: #4DC4D8;"><span class="step-number-text">4</span><span class="icon-checkout-icon"></span></div>
                    <div class="step-details">
                        <p class="step-title" style="color: #4DC4D8;">Checkout</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="itl-container">
    <div class=".itl-container__inner__survey">
        <div class="w-100">
            <div class="card mt-5 mb-0">
                <div id="surveyElement" class="itl-survey" style="display:inline-block;width:100%;">
                    <legend>
                        <h3 style="font-weight: 700; color: #5E7BC0;">Tell us a little more about your medical<br>conditions</h3>
                        
                    </legend>
                     <textarea type="text" class="mt-4" style="width: 100%; height: 100px; background: #F6FEFF;">

                     </textarea>
                    
                    <div class="card-content pt-0 justify-content-center d-flex pb-4 mt-5">
                        <a href="consultation6.php"><button id="proceedBtn" class="proceedBtn">Next</button></a>
                    </div>
                    
                </div>
            </div>
            <div class="itl-survey__progressbar my-4">
                <div id="chatbot-progressbar" role="progressbar" aria-valuemin="0" class="ui-progressbar ui-corner-all ui-widget ui-widget-content" aria-valuemax="100%" aria-valuenow="33%">
                    <span id="chatbot-progressbar__value" style="width: 33%;">
                    <span id="progressbarval" class="value">33%</span>
                     
                    </span>
                    <div class="ui-progressbar-value ui-corner-left ui-widget-header" style="width: 33%;"></div>
                </div>
            </div>
        </div>
    </div>
</div>    
</div>
 
<!-- For restriction pop-up for Nothern IE postcode in UK sotre. -->
<div id="popup-modal" style="display:none;">
    <h3>
        Unfortunately we are unable to ship to this post code,  if you are looking for shipping to Northern Ireland, please goto our Ireland Store.    </h3>
</div>
    <style>
        #customer-popup-login-form {
            font-family: 'Montserrat', sans-serif;
        }
        .customer-popup-login {
            display: none;
        }
        .or-another-selection {
            display: inline-block;
            padding-right: 5px;
        }
        @media(max-width: 767px) {
            .or-another-selection {
                display: block;
                text-align: center;
                margin-bottom: 5px;
            }
        }
    </style>
    <div id="customer-popup-login" class="customer-popup-login">
        <div class="block block-customer-login">
            <div class="block-content" aria-labelledby="block-customer-popup-login-heading">
                <form class="form form-login"
                      action="https://consultation.my-bmi.co.uk/customer/ajax/login/"
                      method="post"
                      id="customer-popup-login-form"
                      data-mage-init='{"validation":{}}'>
                    <input name="form_key" type="hidden" value="LiMSlWXrct67Yhpi" /><input type="hidden" name="redirect_url" value="https://consultation.my-bmi.co.uk/consultation/details/index/condition/1/" />
                    <fieldset class="fieldset login" data-hasrequired="* Required Fields">
                        <div class="messages"></div>
                        <div class="field email required d-flex flex-column">
                            <label class="label has-text-black w-100 pl-0 text-left mb-2">Email address</label>
                            <div class="control">
                                <input name="username" value=""  autocomplete="off" id="email-login" type="email" class="input-text bg--white its-input-text__input" title="Email" placeholder="Email" data-validate="{required:true, 'validate-email':true}">
                            </div>
                        </div>
                        <div class="field password required d-flex flex-column">
                            <label class="label has-text-black w-100 pl-0 text-left mb-2">Password</label>
                            <div class="control">
                                <input name="password" type="password"  autocomplete="off" class="input-text bg--white its-input-text__input" id="pass-login" title="Password" placeholder="Password" data-validate="{required:true}" >
                            </div>
                        </div>
                        <div class="actions-toolbar d-flex flex-column mt-4">
                            <div class="primary"><button type="submit" class="button is-secondary w-100" name="send" id="send2-login"><span>Sign In</span></button></div>
                                                            <!-- <div class="or-another-selection">or</div> -->
                                                        <div class="forgotpasslink text-center mt-2"><a href="https://consultation.my-bmi.co.uk/customer/account/forgotpassword/">Forgot Your Password?</a>
                            </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
<!-- Reviews.co.uk Rich Snippet -->
</div> 

<script>
    $(document).ready(function(){

var current_fs, next_fs, previous_fs; //fieldsets
var opacity;
var current = 1;
var steps = $("fieldset").length;

setProgressBar(current);

$(".next").click(function(){

current_fs = $(this).parent();
next_fs = $(this).parent().next();

//Add Class Active
$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//show the next fieldset
next_fs.show();
//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
next_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(++current);
});

$(".previous").click(function(){

current_fs = $(this).parent();
previous_fs = $(this).parent().prev();

//Remove class active
$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//show the previous fieldset
previous_fs.show();

//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
previous_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(--current);
});

function setProgressBar(curStep){
var percent = parseFloat(100 / steps) * curStep;
percent = percent.toFixed();
$(".progress-bar")
.css("width",percent+"%")
}

$(".submit").click(function(){
return false;
})

});
</script>
    </body>
</html>
