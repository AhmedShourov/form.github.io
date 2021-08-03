<!DOCTYPE html>
<html>
<head>	
	<meta charset="utf-8">
	<title>Dashboard</title>
</head>
	<style type="text/css">
	*{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
	}
	header{
		background-color: #424242;
		height: 50px;
		width: 100%;
	}
		ul{
			display: flex;
			align-items: center;
		}
		li{
			list-style-type: none;
			padding-top: 10px;
		}
		a{
			text-decoration: none;
			color: #bdbbbb;
			padding-left: 30px;
			font-size: 22px;
			
		}
		body{
			 background: linear-gradient(to right, #ff416c, #ff4b2b);
		}
		.log{
			text-align: center;
			margin-top: 8px;
		}
		h2{
			color: #ffffff;
			font-size: 28px;
			margin: 10px 0;
		}
		form{
			text-align: center;
			margin-top: 5rem;
			background: rgba(255, 255, 255, 0.5);
			margin-right: 33rem;
			margin-left: 33rem;
			padding-top: 2rem;
			padding-bottom: 1rem;
			border-radius: 10px;
			box-shadow: 3px 5px 15px #383838;
			backdrop-filter: blur(5px);
			-webkit-backdrop-filter: blur(5px);
		}
		input{
			margin-bottom: 10px;
			padding: 15px 30px;
			border-radius: 8px;
			border: none;
			outline: none;			
		}
		input::placeholder{
			color: rgba(255, 255, 255, 0.7) !important;
			font-size: 18px;
			
		}
		.glass{
			background: linear-gradient(to right, #ff416c, #ff4b2b);
		}
		.sub
		{
			background: linear-gradient(to right, #ff416c, #ff4b2b);
			color: #fff;
			font-size: 17px;
			cursor: pointer;
			opacity: 0.9;
		}
		.pass{
			margin-left: 6rem;
		}
		.pass a:first-child{
			width: 100%;
			color: #fff !important;
			margin-left: -9rem;
			font-size: 15px;
		}
		.pass a:last-child{
			width: 100%;
			color: #fff !important;
			
			font-size: 15px;
		}
		footer{
			background-color: #424242;
			height: 50px;
			width: 100%;
			color: #bdbbbb;
			bottom: 0;
			left: 0;
			position: fixed;
			text-align: center;
				
		}
		footer h3{
			padding: 10px 0 20px 0;
			font-size: 25px;
		}
	</style>
<body>
	<header>
			<ul>
				<li><a href="">Home</a></li>
				<li><a href="">About</a></li>
				<li><a href="">Contact</a></li>
			</ul>
	</header>