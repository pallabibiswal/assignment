
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>Bootply snippet - Bootstrap Edit profile form</title>
<meta name="generator" content="Bootply" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Bootstrap User information form snippet with timezones example snippet for Bootstrap." />
<!--<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
<link rel="apple-touch-icon" href="/bootstrap/img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="/bootstrap/img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="/bootstrap/img/apple-touch-icon-114x114.png">

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" type="text/css" rel="stylesheet">








<!-- CSS code from Bootply.com editor -->
<style type="text/css">
/* CSS used here will be applied after bootstrap.css */
</style>
</head>
<!-- HTML code from Bootply.com editor -->
<body >
<div class="container">
<h1>My Profile</h1>
<hr>
<div class="row">
<!-- left column -->
<div class="col-md-3">
<div class="text-center">
<img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
<h6>Upload a different photo...</h6>
<input class="form-control" type="file">
</div>
</div>
<!-- edit form column -->
<div class="col-md-9 personal-info">
<div class="alert alert-info alert-dismissable">
<a class="panel-close close" data-dismiss="alert">×</a>
<i class="fa fa-coffee"></i>
This is an <strong>.alert</strong>. Use this to show important messages to the user.
</div>
<h3>Personal info</h3>
<form class="form-horizontal" role="form">
<div class="form-group">
<label class="col-lg-3 control-label">First name:</label>
<div class="col-lg-8">
<input class="form-control" value="Jane" type="text">
</div>
</div>
<div class="form-group">
<label class="col-lg-3 control-label">Last name:</label>
<div class="col-lg-8">
<input class="form-control" value="Bishop" type="text">
</div>
</div>

<div class="form-group">
<label class="col-lg-3 control-label">Email:</label>
<div class="col-lg-8">
<input class="form-control" value="janesemail@gmail.com" type="text">
</div>
</div>
<div class="form-group">
<label class="col-lg-3 control-label">Country:</label>
<div class="col-lg-8">
<div class="ui-select">
<select id="user_time_zone" class="form-control">
<option value="Hawaii">(GMT-10:00) Hawaii</option>
<option value="Alaska">(GMT-09:00) Alaska</option>
<option value="Pacific Time (US &amp; Canada)">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
<option value="Arizona">(GMT-07:00) Arizona</option>
<option value="Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
<option value="Central Time (US &amp; Canada)" selected="selected">Hong Kong</option>
<option value="Eastern Time (US &amp; Canada)">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
<option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>
</select>
</div>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">Your username:</label>
<div class="col-md-8">
<input class="form-control" value="janeuser" type="text">
</div>
</div>
<div class="form-group">
<label class="col-lg-3 control-label">Year of birth:</label>
<div class="col-lg-8">
<div class="ui-select">
<select id="user_time_zone" class="form-control">
<option value="Central Time (US &amp; Canada)" selected="selected">2014</option>
<option value="Eastern Time (US &amp; Canada)">Male</option>
<option value="Indiana (East)">I don't </option>
</select>
</div>
</div>
</div>
<div class="form-group">
<label class="col-lg-3 control-label">Education level:</label>
<div class="col-lg-8">
<div class="ui-select">
<select id="user_time_zone" class="form-control">
<option value="Central Time (US &amp; Canada)" selected="selected">Degree</option>
<option value="Eastern Time (US &amp; Canada)">Male</option>
<option value="Indiana (East)">I don't </option>
</select>
</div>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">Mailing address:</label>
<div class="col-md-8">
<textarea class="form-control" row="6"></textarea>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">Tell us what you're interested in KEEP:</label>
<div class="col-md-8">
<textarea class="form-control" row="4"></textarea>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">Social Media1:</label>
<div class="col-md-8">
<div class="input-group">
<div class="input-group-addon">http://facebook.com/</div>
<input type="text" class="form-control" placeholder="your name">
</div>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">Social Media2:</label>
<div class="col-md-8">
<div class="input-group">
<div class="input-group-addon">http://linkedin.com/</div>
<input type="text" class="form-control" placeholder="your name">
</div>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label"></label>
<div class="col-md-8">
<input class="btn btn-primary" value="Save Changes" type="button">
<span></span>
<input class="btn btn-default" value="Cancel" type="reset">
</div>
</div>
<hr></form></div>


<div id="push"></div>
</div>
<footer id="footer">
<div class="row-fluid">
<div class="span3">
<p>
<a href="http://twitter.com/Bootply" rel="nofollow" title="Bootply on Twitter" target="ext">Twitter</a><br>
<a href="https://plus.google.com/+Bootply" rel="publisher">Google+</a><br>
<a href="http://facebook.com/Bootply" rel="nofollow" title="Bootply on Facebook" target="ext">Facebook</a><br>
<a href="https://github.com/iatek/bootply" title="Bootply on GitHub" target="ext">GitHub</a><br>
</p>
</div>
<div class="span3">
<p>
<a data-toggle="modal" role="button" href="#contactModal">Contact</a><br>
<a href="/tags">Tags</a><br>
<a href="/bootstrap-community">Community</a><br>
<a href="/upgrade">Upgrade</a><br>
</p>
</div>
<div class="span3">
<p>
<a href="https://bootstrapbay.com/?ref=skelly" target="_ext" rel="nofollow" title="Premium Bootstrap themes">Bootstrap Themes</a><br>
<a href="http://www.bootbundle.com" target="ext" rel="nofollow">BootBundle</a><br>
<a href="http://www.bootstrapzero.com" target="_ext" rel="nofollow" title="Free Bootstrap templates">BootstrapZero</a><br>
<a href="http://codeply.com/responsive-design-cheatsheet.html" target="_ext">Responsive Design Cheatsheet</a><br>
</p>
</div>
<div class="span3">
<p>
<a href="/about#privacy">Privacy</a><br>
<a href="/about#terms">Terms</a><br><br>
<span class="pull-right">Copyright 2013-2014 <a href="/" title="The Bootstrap Playground">Bootply</a></span>
</p>
</div>
</div>
</footer>
<script src="/plugins/bootstrap-select.min.js"></script>
<script src="/codemirror/jquery.codemirror.js"></script>
<script src="/beautifier.js"></script>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-40413119-1', 'bootply.com');
ga('send', 'pageview');
</script>
<script>
jQuery.fn.shake = function(intShakes, intDistance, intDuration, foreColor) {
this.each(function() {
if (foreColor && foreColor!="null") {
$(this).css("color",foreColor);
}
$(this).css("position","relative");
for (var x=1; x<=intShakes; x++) {
$(this).animate({left:(intDistance*-1)}, (((intDuration/intShakes)/4)))
.animate({left:intDistance}, ((intDuration/intShakes)/2))
.animate({left:0}, (((intDuration/intShakes)/4)));
$(this).css("color","");
}
});
return this;
};
</script>
<script>
$(document).ready(function() {
$('.tw-btn').fadeIn(3000);
$('.alert').delay(5000).fadeOut(1500);
$('#btnLogin').click(function(){
$(this).text("...");
$.ajax({
url: "/loginajax",
type: "post",
data: $('#formLogin').serialize(),
success: function (data) {
//console.log('data:'+data);
if (data.status==1&&data.user) { //logged in
$('#menuLogin').hide();
$('#lblUsername').text(data.user.username);
$('#menuUser').show();
/*
$('#completeLoginModal').modal('show');
$('#btnYes').click(function() {
window.location.href="/";
});
*/
}
else {
$('#btnLogin').text("Login");
prependAlert("#spacer",data.error);
$('#btnLogin').shake(4,6,700,'#CC2222');
$('#username').focus();
}
},
error: function (e) {
$('#btnLogin').text("Login");
console.log('error:'+JSON.stringify(e));
}
});
});
$('#btnRegister').click(function(){
$(this).text("Wait..");
$.ajax({
url: "/signup?format=json",
type: "post",
data: $('#formRegister').serialize(),
success: function (data) {
console.log('data:'+JSON.stringify(data));
if (data.status==1) {
$('#btnRegister').attr("disabled","disabled");
$('#formRegister').text('Thanks. You can now login using the Login form.');
}
else {
prependAlert("#spacer",data.error);
$('#btnRegister').shake(4,6,700,'#CC2222');
$('#btnRegister').text("Sign Up");
$('#inputEmail').focus();
}
},
error: function (e) {
$('#btnRegister').text("Sign Up");
console.log('error:'+e);
}
});
});
$('.loginFirst').click(function(){
$('#navLogin').trigger('click');
return false;
});
$('#btnForgotPassword').on('click',function(){
$.ajax({
url: "/resetPassword",
type: "post",
data: $('#formForgotPassword').serializeObject(),
success: function (data) {
if (data.status==1){
prependAlert("#spacer",data.msg);
return true;
}
else {
prependAlert("#spacer","Your password could not be reset.");
return false;
}
},
error: function (e) {
console.log('error:'+e);
}
});
});
$('#btnContact').click(function(){
$.ajax({
url: "/contact",
type: "post",
data: $('#formContact').serializeObject(),
success: function (data) {
if (data.status==1){
prependAlert("#spacer","Thanks. We got your message and will get back to you shortly.");
$('#contactModal').modal('hide');
return true;
}
else {
prependAlert("#spacer",data.error);
return false;
}
},
error: function (e) {
console.log('error:'+e);
}
});
return false;
});
/*
$('.nav .dropdown-menu input').on('click touchstart',function(e) {
e.stopPropagation();
});
*/
});
$.fn.serializeObject = function()
{
var o = {};
var a = this.serializeArray();
$.each(a, function() {
if (o[this.name] !== undefined) {
if (!o[this.name].push) {
o[this.name] = [o[this.name]];
}
o[this.name].push(this.value || '');
} else {
o[this.name] = this.value || '';
}
});
return o;
};
var prependAlert = function(appendSelector,msg){
$(appendSelector).after('<div class="alert alert-info alert-block affix" id="msgBox" style="z-index:1300;margin:14px!important;">'+msg+'</div>');
$('.alert').delay(3500).fadeOut(1000);
}
</script>
<div id="completeLoginModal" class="modal hide">
<div class="modal-header">
<a href="#" data-dismiss="modal" aria-hidden="true" class="close">×</a>
<h3>Do you want to proceed?</h3>
</div>
<div class="modal-body">
<p>This page must be refreshed to complete your login.</p>
<p>You will lose any unsaved work once the page is refreshed.</p>
<br><br>
<p>Click "No" to cancel the login process.</p>
<p>Click "Yes" to continue...</p>
</div>
<div class="modal-footer">
<a href="#" id="btnYes" class="btn danger">Yes, complete login</a>
<a href="#" data-dismiss="modal" aria-hidden="true" class="btn secondary">No</a>
</div>
</div>
<div id="forgotPasswordModal" class="modal hide">
<div class="modal-header">
<a href="#" data-dismiss="modal" aria-hidden="true" class="close">×</a>
<h3>Password Lookup</h3>
</div>
<div class="modal-body">
<div class="control-group">
<label class="control-label" for="inputEmail">Email</label>
<div class="controls">
<input name="_csrf" id="token" type="hidden" value="Aglpt14W-uEaFmjQ7k_AasvEAaUg2SS727SE">
<input type="email" name="email" id="inputEmail" placeholder="you@youremail.com" required="">
<span class="help-block"><small>Enter the email address you used to sign-up.</small></span>
</div>
</div>
</div>
<div class="modal-footer pull-center">
<a href="#" data-dismiss="modal" aria-hidden="true" class="btn">Cancel</a>
<a href="#" data-dismiss="modal" id="btnForgotPassword" class="btn btn-success">Reset Password</a>
</div>
</div>
<div id="upgradeModal" class="modal hide">
<div class="modal-header">
<a href="#" data-dismiss="modal" aria-hidden="true" class="close">×</a>
<h4>Would you like to upgrade?</h4>
</div>
<div class="modal-body">
<p class="text-center"><strong></strong></p>
<h1 class="text-center">$4<small>/mo</small></h1>
<p class="text-center"><small>Unlimited plys. Unlimited downloads. No Ads.</small></p>
<p class="text-center"><img src="/assets/i_visa.png" width="50" alt="visa"> <img src="/assets/i_mc.png" width="50" alt="mastercard"> <img src="/assets/i_amex.png" width="50" alt="amex"> <img src="/assets/i_discover.png" width="50" alt="discover"> <img src="/assets/i_paypal.png" width="50" alt="paypal"></p>
</div>
<div class="modal-footer pull-center">
<a href="/upgrade" class="btn btn-block btn-huge btn-success"><strong>Upgrade Now</strong></a>
<a href="#" data-dismiss="modal" class="btn btn-block btn-huge">No Thanks, Maybe Later</a>
</div>
</div>
<div id="contactModal" class="modal hide">
<div class="modal-header">
<a href="#" data-dismiss="modal" aria-hidden="true" class="close">×</a>
<h3>Contact Us</h3>
<p>suggestions, questions or feedback</p>
</div>
<div class="modal-body">
<form class="form form-horizontal" id="formContact">
<input name="_csrf" id="token" type="hidden" value="Aglpt14W-uEaFmjQ7k_AasvEAaUg2SS727SE">
<div class="control-group">
<label class="control-label" for="inputSender">Name</label>
<div class="controls">
<input type="text" name="sender" id="inputSender" class="input-large" placeholder="Your name">
</div>
</div>
<div class="control-group">
<label class="control-label" for="inputMessage">Message</label>
<div class="controls">
<textarea name="notes" rows="5" id="inputMessage" class="input-large" placeholder="Type your message here"></textarea>
</div>
</div>
<div class="control-group">
<label class="control-label" for="inputEmail">Email</label>
<div class="controls">
<input type="text" name="email" id="inputEmail" class="input-large" placeholder="you@youremail.com (for reply)" required="">
</div>
</div>
</form>
</div>
<div class="modal-footer pull-center">
<a href="#" data-dismiss="modal" aria-hidden="true" class="btn">Cancel</a>
<a href="#" data-dismiss="modal" aria-hidden="true" id="btnContact" role="button" class="btn btn-success">Send</a>
</div>
</div>

<script src="/plugins/bootstrap-pager.js"></script>
</div>
<script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>


<script type='text/javascript' src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>






<!-- JavaScript jQuery code from Bootply.com editor -->
<script type='text/javascript'>
$(document).ready(function() {
});
</script>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-40413119-1', 'bootply.com');
ga('send', 'pageview');
</script>
</body>
</html>