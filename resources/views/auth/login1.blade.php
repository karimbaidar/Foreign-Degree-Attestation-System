<html>
<head>

<style type="text/css">

.body{
			
			background-image: url("{{Storage::url('public/documents/doctor.jpg')}}");
			background-size: 1550px 1100px;
			background-repeat: no-repeat;
			transition: all .5s;
			padding: 1px;
		}
		.veen{
			width: 70%;
			margin: 100px auto;
			background: rgba(255,255,255,.5);
			min-height: 400px;
			display:table;
			position: relative;
			box-shadow: 0 0 4px rgba(0,0,0,.14), 0 4px 8px rgba(0,0,0,.28);
		}
		.veen > div {
			display: table-cell;
			vertical-align: middle;
			text-align: center;
			color: #333;
		}
		.veen button{
			background: transparent;
			//background-image: linear-gradient(90deg, #e0b722, #ff4931);
			display: inline-block;
			padding: 10px 30px;
			border: 3px solid #333;
			border-radius: 50px;
			background-clip: padding-box;
			position: relative;
			color: #333;
			//box-shadow: 0 0 4px rgba(0,0,0,.14), 0 4px 8px rgba(0,0,0,.28);
			transition: all .25s;
		}
		.veen button.dark{
			border-color: blue;
			background: white;
		}
		.veen .move button.dark{
			border-color: #e0b722;
			background: #e0b722;
		}
		.veen .splits p{
			font-size: 18px;
		}
		.veen button:active{
			box-shadow: none;	
			
		}
		.veen button:focus{
			outline: none;			
		}
		.veen > .wrapper {
			position: absolute;
			width: 40%;
			height: 120%;
			top: -10%;
			left: 5%;
			background: #fff;
			box-shadow: 0 0 4px rgba(0,0,0,.14), 0 4px 8px rgba(0,0,0,.28);
			transition: all .5s;
			color: #303030;
			overflow: hidden;
		}
		.veen .wrapper > div{
			padding: 15px 30px 30px;
			width: 100%;
			transition: all .5s;
			background: #fff;
			width: 100%; 
		}
		.veen .wrapper #login{
			padding-top: 20%;
		}
		.veen .wrapper #register{
			transform: translateY(-80%) translateX(100%);
		}
		.veen .wrapper.move #register{
			transform: translateY(-80%) translateX(0%);
		}
		.veen .wrapper.move #login{
			transform: translateX(-100%);
		}
		.veen .wrapper > div> div {
			position: relative;
			margin-bottom: 15px;
		}
		.veen .wrapper label{
			position: absolute;
			top: -7px;
			font-size: 12px;
			white-space: nowrap;
			background: #fff;
			text-align: left;
			left: 15px;
			padding: 0 5px;
			color: #999;
			pointer-events: none;
		}
		.veen .wrapper h3{
			margin-bottom: 25px;
		}
		.veen .wrapper input{
			height: 40px;
			padding: 5px 15px;
			width: 100%;
			border: solid 1px #999;
		}
		.veen .wrapper input:focus{
			outline: none;
			border-color: #ff4931;
		}
		.veen > .wrapper.move{
			left: 45%;
		}
		.veen > .wrapper.move input:focus{
			border-color: #e0b722;
		}
		@media (max-width: 767px){
			.veen{
				padding: 5px;
				margin: 0;
				width: 100%;
				display: block;
			}
			.veen > .wrapper{
				position: relative;
				height: auto;
				top: 0;
				left: 0;
				width: 100%;
			}
			.veen > div{
				display: inline-block;
			}
			.splits{
				width: 100%;
				background: #fff;
				float: right;
			}
			.splits button{
				width: 100%;
				border-radius: 0;
				background: #505050; 
				border: 0;
				opacity: 5;
			}
			.splits button.active{
				opacity: 5;
			}
			.splits button.active{
				opacity: 5;
				background: #ff4931;
			}
			.splits.rgstr-btn button.active{
				background: black;
				
			}
			
			.splits p{
				display: none;
			}
			.veen > .wrapper.move{
				left: 0%;
			}
		}
</style>
<script>
$(document).ready(function(){
			$(".veen .rgstr-btn button").click(function(){
				$('.veen .wrapper').addClass('move');
				$('.body').css('background','#e0b722');
				$(".veen .login-btn button").removeClass('active');
				$(this).addClass('active');

			});
			$(".veen .login-btn button").click(function(){
				$('.veen .wrapper').removeClass('move');
				$('.body').css('background','#ff4931');
				$(".veen .rgstr-btn button").removeClass('active');
				$(this).addClass('active');
			});
		});
</script>
<script  src="https://code.jquery.com/jquery-3.1.1.min.js"  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="  crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" ></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>

<body>
<div class="body" >
<form role="form" action="{{route('login')}}" method="post">
	<div class="veen">
			<div class="login-btn splits">
				<p>Already an user?</p>
				<button class="active">Login</button>
			</div>
			
			<div class="rgstr-btn splits">
				
				<p><b>Doctors' Registration System</b></p>
				<button>Register</button>
			</div>
			<div class="wrapper">
				<div id="login">
					<h3>Login</h3>
					<div class="mail">
						<input name="email" type="email">
						<label>Mail or Username</label>
					</div>
					<div class="passwd">
						<input name="password" type="password">
						<label>Password</label>
					</div>
					<div class="submit">
						
						 <input type="submit"   class=" login-button btn btn-default btn-small pull-right " style="font-size:20px;font-style:bold; display: inline-block;" value="Login"/ >
					</div>
				</div>
				</form>
				<div id="register">
				
					<h3>Register</h3>
					<div class="name">
						<input type="text" name="">
						<label>Full Name</label>
					</div>
					
					
					
					<div class="submit">
						<button class="dark">Register</button>
					</div>
				</div>
			</div>
		</div>	
	</div>

	<div class="site-link">
		<a href="http://www.amc.gov.af" target="_blank">
			 Back to Website</a>
	</div>
	
	<style type="text/css">
		.site-link{
      padding: 5px 15px;
			position: fixed;
			z-index: 99999;
			background: #fff;
			box-shadow: 0 0 4px rgba(0,0,0,.14), 0 4px 8px rgba(0,0,0,.28);
			right: 30px;
			bottom: 30px;
			border-radius: 10px;
		}
		.site-link img{
			width: 30px;
			height: 30px;
		}
	</style>
	