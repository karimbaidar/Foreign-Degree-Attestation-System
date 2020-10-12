<!DOCTYPE HTML>
<html>
<head>
<title>Ministry of Higher Education</title>
    
    <!--<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
    <script src="http://malsup.github.com/jquery.form.js"></script> 
    <!-- Bootstrap -->
    <link href="{{URL::asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">

	 <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	 <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <!-- Font Awesome -->
    <link href="{{URL::asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{URL::asset('vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{URL::asset('vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
   
    <!-- JQVMap -->
    
    <!-- bootstrap-daterangepicker -->
    <link href="{{URL::asset('vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->


<style>





 /* reset */
html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,dl,dt,dd,ol,nav ul,nav li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
article, aside, details, figcaption, figure,footer, header, hgroup, menu, nav, section {display: block;}
ol,ul{list-style:none;margin:0;padding:0;}
blockquote,q{quotes:none;}
blockquote:before,blockquote:after,q:before,q:after{content:'';content:none;}
table{border-collapse:collapse;border-spacing:0;}
/* start editing from here */
a{text-decoration:none;}
.txt-rt{text-align:right;}/* text align right */
.txt-lt{text-align:left;}/* text align left */
.txt-center{text-align:center;}/* text align center */
.float-rt{float:right;}/* float right */
.float-lt{float:left;}/* float left */
.clear{clear:both;}/* clear float */
.pos-relative{position:relative;}/* Position Relative */
.pos-absolute{position:absolute;}/* Position Absolute */
.vertical-base{	vertical-align:baseline;}/* vertical align baseline */
.vertical-top{	vertical-align:top;}/* vertical align top */
.underline{	padding-bottom:5px;	border-bottom: 1px solid #eee; margin:0 0 20px 0;}/* Add 5px bottom padding and a underline */
nav.vertical ul li{	display:block;}/* vertical menu */
nav.horizontal ul li{	display: inline-block;}/* horizontal menu */
img{max-width:100%;}
/*end reset*/
body{
	font-family: 'Rokkitt', serif;
	font-size:100%;
	background: url({{ URL::asset('/images/bg.jpg') }}); no-repeat;
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-position: center;
	background-size: cover;
}


.button1 {
    background-color: #73879C; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}

.button1 {
    display: block;
}

.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  height:15px;
  color: #FFFFFF;
  text-align: center;
  font-size: 18px;
  padding-bottom: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}
.wrap{
	width: 50%;
	margin: 0 auto;
}
/*start-contact-form*/
.contact_form {
	width: 55%;
	background: url("../images/border.png")	 no-repeat 331px 77px;
	float: left;
	position: relative;
}
.contact-form{
	background:#fff;
	padding: 7%;
	margin-top: 23%;
	position: relative;
	border-radius: 12px;
	-webkit-border-radius: 12px;
	-moz-border-radius: 12px;
	-o-border-radius: 12px;
}
.contact-form h1{
	font-size: 1.7em;
	color:#474646;
}
.contact_form ul {
    list-style-type:none;
	list-style-position:outside;
	margin:0px;
	padding:0px;
}
.contact_form li{
	position:relative;
} 
	/* form element visual styles */
	.contact_form li{ 
		float: left;
		outline: none;
		border: 1px solid #DDDDDD;
		font-size: 1.2em;
		color: #B6B6B6;
		width: 78.5%;
		font-weight: 600;
		margin-top: 8%;
		position: relative;
		height: 42px;
		border-radius: 2px;
		-webkit-border-radius: 2px;
		-moz-border-radius: 2px;
		-o-border-radius: 2px;
		transition: all 0.5s ease-out;
		-webkit-transition: all 0.5s ease-out;
		-moz-transition: all 0.5s ease-out;
		-ms-transition: all 0.5s ease-out;
		-o-transition: all 0.5s ease-out;
	}
	.contact_form li:hover{ 
		border: 1px solid #79B42B;
		color:#79B42B;
	}
	.contact_form input {
		float: left;
		font-size: 1.1em;
		font-family: 'Rokkitt', serif;
		padding: 7px 14px;
		width: 75%;
		border: none;
		outline: none;
		color:#B6B6B6;
	}
	.contact_form p {
		float: right;
		padding: 8px 7px;
		width: 9.3%;
		cursor: pointer;
	}
	

.contact_form i{
	font-size: 1.2em;
	color:#B6B6B6;
	width: 40%;
	float: left;
}
.forgot{
	float: right;
	margin-right: 77px;
	width: 35%;
	margin-top: 4px;
}
.forgot a{
	color:#B6B6B6;
	font-size: 1.1em;
	-webkit-transition: all 0.5s ease-out;
	-moz-transition: all 0.5s ease-out;
	-ms-transition: all 0.5s ease-out;
	-o-transition: all 0.5s ease-out;
}
.forgot a:hover{
	color:#79B42B;
}
/* === Form hints === */
.form_hint {
	color: #fff;
	text-align: center;
	background:#79B42B;
	border-radius: 3px 3px 3px 3px;
	font-size:1.2em;
	margin-left: 8px;
	padding: 6px 23px;
	z-index: 999;
	position: absolute;
	right:-224px;l
	bottom: 3px;
	font-weight:100;
	display: none;
}
.form_hint::before {
	content: '';
	position: absolute;
	bottom: 9px;
	left: -9px;
	width: 0;
	height: 0;
	border-bottom: 10px solid transparent;
	border-right: 10px solid #79B42B;
	border-top: 10px solid transparent;
}
.contact_form input:focus + .form_hint {display: inline;}
.contact_form input:required:valid + .form_hint {color: #000;
	background: #79B42B;}
.contact_form input:required:valid + .form_hint::before {color:#28921f;}
/*end-contact-form*/
/*start-account*/
.account{
	float:right;
	width: 45%;
}
.account h2 a{
	color:#71B8E4;
	display: block;
	font-size: 1.3em;
	font-weight: 400;
	text-align:right;
	margin-top: 3px;
	transition: all 0.5s ease-out;
	-webkit-transition: all 0.5s ease-out;
	-moz-transition: all 0.5s ease-out;
	-ms-transition: all 0.5s ease-out;
	-o-transition: all 0.5s ease-out;
}
.account h2 a:hover{
	color:#79B42B;
}
.span {
	margin-top: 10.4%;
	display: block;
	width: 100%;
	background: #3B5998;
	transition: all 0.5s ease-out;
	-webkit-transition: all 0.5s ease-out;
	-moz-transition: all 0.5s ease-out;
	-ms-transition: all 0.5s ease-out;
	-o-transition: all 0.5s ease-out;
}
.span img {
	background:#354F88;
	padding: 7px;
	float: left;
}
.span i {
	color: #fff;
	padding: 9px 14px;
	float: left;
	font-size: 1.6em;
	font-weight: 400;
}
.span:hover {
	background:#354F88;
}
.span1 {
	margin-top: 9%;
	width: 100%;
	background: #45B0E3;
	transition: all 0.5s ease-out;
	-webkit-transition: all 0.5s ease-out;
	-moz-transition: all 0.5s ease-out;
	-ms-transition: all 0.5s ease-out;
	-o-transition: all 0.5s ease-out;
}
.span1 img {
	background: #40A2D1;
	padding: 7px;
	float: left;
}
.span1 i {
	color: #fff;
	padding: 9px 20px;
	float: left;
	font-size: 1.6em;
	font-weight: 400;
}
.span1:hover {
	background:#40A2D1;
}
.span2 {
	margin-top: 9%;
	width: 100%;
	background: #DE4C34;
	transition: all 0.5s ease-out;
	-webkit-transition: all 0.5s ease-out;
	-moz-transition: all 0.5s ease-out;
	-ms-transition: all 0.5s ease-out;
	-o-transition: all 0.5s ease-out;
}
.span2 img {
	background: #CE3E26;
	padding: 7px;
	float: left;
}
.span2 i {
	color: #fff;
	padding: 9px 17px;
	float: left;
	font-size: 1.6em;
	font-weight: 400;
}
.span2:hover {
	background: #CE3E26;
}
/*end-account*/
/*start-footer*/
.footer p{
	color:#fff;
	display: block;
	font-size: 1.3em;
	font-weight: 400;
	text-align:center;
	padding: 2em 0 1em;
}
.footer p a{
	color:#68B74A;
	-webkit-transition: all 0.5s ease-out;
	-moz-transition: all 0.5s ease-out;
	-ms-transition: all 0.5s ease-out;
	-o-transition: all 0.5s ease-out;
}
.footer p a:hover{
	color:#fff;
}
/*end-footer*/
/*start-checkbox*/
.checkbox {
	margin-bottom: 4px;
	padding-left: 27px;
	font-size: 1.1em;
	line-height: 27px;
	color: #B6B6B6;
	cursor: pointer;
}
 .checkbox:last-child {
	margin-bottom: 0;
}
.checkbox input {
	position: absolute;
	left: -9999px;
}

.checkbox i {
	position: absolute;
	bottom: 9px;
	left: 0;
	display: block;
	width: 13px;
	height: 13px;
	outline: none;
	border: 2px solid #DDDDDD;
	background: #DDDDDD;
}
.checkbox input + i:after {
	position: absolute;
	opacity: 0;
	transition: opacity 0.1s;
	-o-transition: opacity 0.1s;
	-ms-transition: opacity 0.1s;
	-moz-transition: opacity 0.1s;
	-webkit-transition: opacity 0.1s;
}
.checkbox input + i:after {
	content: '';
	background: url("{{Storage::url('public/documents/mark.png')}}"); no-repeat 3px 2px;
	top: -1px;
	left: -1px;
	width: 15px;
	height: 15px;
	font: normal 12px/16px FontAwesome;
	text-align: center;
}

.checkbox input:checked + i:after {
	opacity: 1;
}
.checkbox {
	float: left;
	margin-right: 30px;
}
.checkbox:last-child {
	margin-bottom: 4px;
}
/*end-checkbox*/
/*-----start-responsive-design------*/
@media only screen and (max-width: 1440px){
	.wrap{
		width:56%;
	}
	.span i {
		font-size: 1.4em;
	}
	.span1 i {
		font-size: 1.4em;
	}
	.span2 i {
		font-size: 1.4em;
	}
	.contact_form p {
		padding: 8px 7px;
	}
}
@media only screen and (max-width: 1366px){
	.wrap{
		width:59%;
	}
	.span i {
		font-size: 1.4em;
	}
	.span1 i {
		font-size: 1.4em;
	}
	.span2 i {
		font-size: 1.4em;
	}
	.contact_form p {
		padding: 8px 3px;
	}
}
@media only screen and (max-width: 1280px){
	.wrap{
		width:63%;
	}
	.span i {
		font-size: 1.3em;
	}
	.span1 i {
		font-size: 1.3em;
	}
	.span2 i {
		font-size: 1.3em;
	}
}
@media only screen and (max-width: 1024px){
	.wrap{
		width:79%;
	}
	.contact_form input {
		width: 77%;
	}
	.span i {
		font-size: 1.2em;
		padding: 13px 14px;
	}
	.span1 i {
		font-size: 1.2em;
		padding: 13px 14px;
	}
	.span2 i {
		font-size: 1.2em;
		padding: 13px 14px;
	}
	.checkbox {
		margin-right: 0px;
	}
}
@media only screen and (max-width: 800px){
	.wrap{
		width:95%;
	}
	.span i {
		padding: 14px 12px;
		font-size: 1.2em;
	}
	.span1 i {
		font-size: 1.2em;
		padding: 13px 20px;
	}
	.span2 i {
		font-size: 1.2em;
		padding: 13px 20px;
	}
	.contact_form {
		background: url("../images/border.png") no-repeat 313px 77px;
	}
	.forgot {
		margin-right: 65px;
		width: 38%;
	}
	.checkbox {
		margin-right: 0px;
	}
}
@media only screen and (max-width: 640px){
	.wrap{
		width:95%;
	}
	.contact-form h1 {
		font-size: 1.3em;
	}
	.contact_form li {
		height: 37px;
		margin-top: 7.3%;
	}
	.contact_form input {
		font-size: 1em;
		padding: 5px 14px;
	}

	
	.forgot a {
		font-size: 1em;
	}
	.span i {
		padding: 11px 6px;
		font-size: 1em;
	}
	.span img {
		padding: 2px;
	}
	.span1 img {
		padding: 2px;
	}
	.span1 i {
		padding: 11px 6px;
		font-size: 1em;
	}
	.span2 img {
		padding: 2px;
	}
	.span2 i {
		padding: 11px 6px;
		font-size: 1em;
	}
	.contact_form {
		background: url("../images/border.png") no-repeat 247px 41px;
	}
	.forgot {
		margin-right: 27px;
		width: 39%;
		margin-top: 6px;
	}
	.account h2 a {
		font-size: 0.9em;
	}
	.checkbox i {
		bottom: 10px;
	}

}
@media only screen and (max-width: 480px){
	.wrap{
		width:56%;
	}
	.contact_form {
		width: 100%;
		background:none;
	}
	.contact_form li {
		width: 99.5%;
	}

	.forgot {
		width: 82%;
		margin-top: 7px;
		margin-right: 41px;
	}
	.account {
		width: 100%;
	}
	.account h2 a {
		text-align: left;
		margin-top: 15px;
	}
	.span {
		margin-top: 3.4%;
	}
	.form_hint {
		font-size: 0.8em;
		padding: 6px 5px;
		right: -128px;
		bottom: 6px;
	}
	.form_hint::before {
		bottom: 5px;
	}
	.checkbox i {
		bottom: 34px;
	}
	.footer p {
		font-size: 1.1em;
	}
}
@media only screen and (max-width: 320px){
	.wrap{
		width:85%;
	}
	.contact_form {
		width: 100%;
		background:none;
	}
	.contact_form li {
		width: 99.5%;
	}

	.forgot {
		width: 82%;
		margin-top: 7px;
		margin-right: 41px;
	}
	.account {
		width: 100%;
	}
	.account h2 a {
		text-align: left;
		margin-top: 15px;
	}
	.span {
		margin-top: 3.4%;
	}
	.form_hint {
		font-size: 0.8em;
		padding: 6px 5px;
		right: -128px;
		bottom: 6px;
	}
	.form_hint::before {
		bottom: 5px;
	}
	.checkbox i {
		bottom: 34px;
	}
	.footer p {
		font-size: 1em;
	}
}







@import url(https://fonts.googleapis.com/css?family=Raleway:100,600,400);


.text-holder{
  color:#aaaaaa;
  text-align:center;
  padding-top:40px;
}
.button-holder{
  padding-top:100px;
}
.ajax-button{
  position:relative;
  display:inline-block;
  width:100px;
  height:40px;
  left:50%;
  top:50%;
  margin-left:-50px;
  margin-top:-20px;
  text-align:center;
}
.submit{
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  width:100px;
  height:40px;
  background-color:#006400;
  border:2px solid #006400;
  border-radius:10px;
  color:#FFFFFF;
  font-size:17px;
  cursor:pointer !important;
  outline:none;
  margin-top:20px;

}

.submit1{
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  width:200px;
  height:30px;
  
 
 
  color:#FFFFFF;
  font-size:17px;
  cursor:pointer !important;
  outline:none;
  margin-top:20px;
    margin-left:40px;
}
.submit2{
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  width:200px;
  height:30px;
  

  color:#FFFFFF;
  font-size:17px;
  cursor:pointer !important;
  outline:none;
  margin-top:10px;
margin-left:40px;
}


.submit:hover{
  background-color:#222222;
}


.loading{
  font-size:0;
  width:30px;
  height:30px;
    margin-top:20px;
  margin-left:40px;
  border-radius:15px;
  padding:0;
  border:3px solid #006400;
  border-bottom:3px solid rgba(1,1,1,0.0);
  border-left:3px solid rgba(1,1,1,0.0);
  background-color:transparent !important;
  animation-name: rotateAnimation;
  -webkit-animation-name: wk-rotateAnimation;
  animation-duration: 1s;
  -webkit-animation-duration: 1s;
  animation-delay: 0.2s;
  -webkit-animation-delay: 0.2s;
  animation-iteration-count: infinite;
  -webkit-animation-iteration-count: infinite;
}


.loading1{
  font-size:0;
  width:30px;
  height:30px;
  margin-top:20px;
    margin-left:40px;
  border-radius:15px;
  padding:0;
  border:3px solid #006400;
  border-bottom:3px solid rgba(1,1,1,0.0);
  border-left:3px solid rgba(1,1,1,0.0);
  background-color:transparent !important;
  animation-name: rotateAnimation;
  -webkit-animation-name: wk-rotateAnimation;
  animation-duration: 1s;
  -webkit-animation-duration: 1s;
  animation-delay: 0.2s;
  -webkit-animation-delay: 0.2s;
  animation-iteration-count: infinite;
  -webkit-animation-iteration-count: infinite;
}


.loading1{
  font-size:0;
  width:30px;
  height:30px;
  margin-top:10px;
margin-left:40px;
  border-radius:15px;
  padding:0;
  border:3px solid #006400;
  border-bottom:3px solid rgba(1,1,1,0.0);
  border-left:3px solid rgba(1,1,1,0.0);
  background-color:transparent !important;
  animation-name: rotateAnimation;
  -webkit-animation-name: wk-rotateAnimation;
  animation-duration: 1s;
  -webkit-animation-duration: 1s;
  animation-delay: 0.2s;
  -webkit-animation-delay: 0.2s;
  animation-iteration-count: infinite;
  -webkit-animation-iteration-count: infinite;
}




@keyframes rotateAnimation {
    0%   {transform: rotate(0deg);}
    100% {transform: rotate(360deg);}
}
@-webkit-keyframes wk-rotateAnimation {
    0%   {-webkit-transform: rotate(0deg);}
    100% {-webkit-transform: rotate(360deg);}
}

.fa{
  color:#ffffff;
  font-size:18px !important;
  position:absolute;
  left:50%;
  top:50%;
  margin-left:-9px;
  margin-top:-9px;
  -webkit-transform:scaleX(0) !important;
  transform:scaleX(0) !important;
}

.finish{
  -webkit-transform:scaleX(1) !important;
  transform:scaleX(1) !important;
}
.hide-loading{
  opacity:0;
  -webkit-transform: rotate(0deg) !important;
  transform: rotate(0deg) !important;
  -webkit-transform:scale(0) !important;
  transform:scale(0) !important;
}


.progress { position:relative; width:100%; }
.bar { background-color: #008000; width:0%; height:20px; }
.percent { position:absolute; display:inline-block; left:50%; color: #7F98B2;}


</style>



<link href='http://fonts.googleapis.com/css?family=Rokkitt' rel='stylesheet' type='text/css'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 


   
<script type="text/javascript">
       
  $(document).ready(function() {
  $(".submit").click(function() {
    $(".submit").addClass("loading");
    setTimeout(function() {
      $(".submit").addClass("hide-loading");
      // For failed icon just replace ".done" with ".failed"
      $(".done").addClass("finish");
    }, 6000);
    setTimeout(function() {
      $(".submit").removeClass("loading");
      $(".submit").removeClass("hide-loading");
      $(".done").removeClass("finish");
      $(".failed").removeClass("finish");
    }, 6000);
  })
});
       
       
       
   </script>
   
      
<script type="text/javascript">
       
  $(document).ready(function() {
  $(".submit1").click(function() {
    $(".submit1").addClass("loading1");
    setTimeout(function() {
      $(".submit1").addClass("hide-loading");
      // For failed icon just replace ".done" with ".failed"
      $(".done").addClass("finish");
    }, 6000);
    setTimeout(function() {
      $(".submit1").removeClass("loading1");
      $(".submit1").removeClass("hide-loading");
      $(".done").removeClass("finish");
      $(".failed").removeClass("finish");
    }, 6000);
  })
});
       
       
       
   </script>
   
   
   <script type="text/javascript">
       
  $(document).ready(function() {
  $(".submit2").click(function() {
    $(".submit2").addClass("loading1");
    setTimeout(function() {
      $(".submit2").addClass("hide-loading");
      // For failed icon just replace ".done" with ".failed"
      $(".done").addClass("finish");
    }, 6000);
    setTimeout(function() {
      $(".submit2").removeClass("loading1");
      $(".submit2").removeClass("hide-loading");
      $(".done").removeClass("finish");
      $(".failed").removeClass("finish");
    }, 6000);
  })
});
       
       

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>


<!--
<script type="text/javascript">
  $(function() {
       $(document).ready(function()
       {
          var bar = $('.bar');
          var percent = $('.percent');

    $('form').ajaxForm({
      beforeSend: function() {
          var percentVal = '0%';
          bar.width(percentVal)
          percent.html(percentVal);
      },
      uploadProgress: function(event, position, total, percentComplete) {
   document.getElementById("baidar").value = "Johnny Bravo";
      },
      complete: function(xhr) {
          alert('You are successfully Logged In');
          window.location.href = "/home";
      }
    });
 });
});
</script>
-->

   
</head>

@if($user = Auth::user())
<body>
    
<div class="wrap">
    
<!-- strat-contact-form -->	
<div class="contact-form">
<!-- start-form -->
<center>
    <img src="{{url('/images/logo.png')}}" width="150px" height="150px" alt=""><br/>
    <h3>Sorry! You are LoggedIn, Please Logout First from the Dashboard</h3><br/>
    <h4>Go to Dashboard :  <a href = "{{URL::route('home')}}" target = container>Dashboard</a> </h4>
</center>
			
<!-- end-form -->
<!-- start-account -->
	
<!-- end-account -->
<div class="clear"></div>	
</div>
<!-- end-contact-form -->
<div class="footer">
	<font color="black" size="2px"><p><font color="white">All Rights Reserved by </font> <a href="">MoHE</a> 
  


</div>
</div>



</body>


@else
<body>
    
<div class="wrap">
    
<!-- strat-contact-form -->	
<div class="contact-form">
<!-- start-form -->
	<form class="contact_form" role="form" action="{{route('login')}}" method="post">
	{{csrf_field()}}
 <input type="hidden" name="_token" value="{{ csrf_token() }}">
	
				 <h1>Login to Ministry of Higher Education</h1>
				 	 @if ($errors->has('password'))
                                                                        <span class="help-block">
                                                                            <strong>{{ $errors->first('password') }}</strong>
                                                                        </span>
                @endif
                 @if ($errors->has('email'))
                                                                        <span class="help-block">
                                                                         <font color="red">  <strong>{{ $errors->first('email') }}</strong> </font> 
                                                                        </span>
                 @endif
				 
		<!--<h1>{{__('ui-list.login_mohe_account')}}</h1>-->
	    <ul>
	        <li>
	           
			   <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
			   <input type="email" class="textbox1" name="email" placeholder="info@gmail.com" required onkeyup="if(this.value.length > 0) document.getElementById('baidar1').disabled = false; else document.getElementById('baidar1').disabled = true;"/>
	            <span class="form_hint">Enter a valid email</span>
				
				
				
	             <p><img src="{{Storage::url('public/documents/contact.png')}}" alt=""></p>
	        </li>
	        <li>
				<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
	            <input type="password" name="password" class="textbox2" placeholder="password">
			
	            <p><img src="{{Storage::url('public/documents/lock.png')}}" alt=""></p>  <br/><br/>
	        </li>
         </ul>
        
       	 	<input type="submit" id="baidar1" class="submit" disabled name="Sign In" value="Sign In" />	
												   
			
	
		
		
	</fieldset>
				</form>
			
<!-- end-form -->
<!-- start-account -->
<div class="account">
    <br/>
    <center> <img src="{{url('/images/logo.png')}}" width="150px" height="150px" alt=""> </center>
<center>
  <div class="submit2">  <a href="/register/" ><i>{{__('ui-list.registeration_here')}} >>&nbsp;</i><div class="clear"></div></a></div>	
   	<div class="submit1">
		            
		            	<a href="/doctor">
		
	<b>{{__('ui-list.search_verified_students')}}</b> 
		   
	
		            	</a>
					</div>	
					
			
					</center>
</div>	
<!-- end-account -->
<div class="clear"></div>	
</div>
<!-- end-contact-form -->
<div class="footer">
	<font color="black" size="2px"><p><font color="white">All Rights Reserved by </font> <a href="">Ministry of Higher Education, Afghanistan</a> <br/><font color="white">Powered By :</font> <a href="#">Karim Baidar </a></p></font>
  


</div>
</div>



</body>


@endif








</html>
@section('scripts')
       
   </script>
   <script type="text/javascript">
    function stoppedTyping(){
        if(this.value.length > 0) { 
            document.getElementById('baidar1').disabled = false; 
        } else { 
            document.getElementById('baidar1').disabled = false;
        }
    }
    function verify(){
        if(myText is empty){
            alert "Put some text in there!"
            return
        }
        else{
            do button functionality
        }
    }
</script>
 
  

@endsection()
