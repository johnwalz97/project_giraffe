<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>AJ Conceptz</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<link rel="stylesheet" href="/assets/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/font-awesome.css">
    <link rel="stylesheet" href="/assets/style.css">
    <style>
        .background {
			position: absolute;
			top: 0px;
			width: 100%;
			height: 100%;
			z-index: 98;
            background-image: url('/assets/pics/background.jpg');
			background-size: cover;
        }
		.overlay {
			position: absolute;
			width: 100%;
			height: 100%;
			background: #202020;
			opacity: .5;
			z-index: 99;
		}
		.container_main1  {
			position: absolute;
			color: white;
			font-size: 48px;
			font-weight: bold;
			width: 100%;
			z-index: 101;
			top: 50px;
			width: 100%;
			text-align: center;
		}
		.container_main2  {
			position: absolute;
			color: white;
			width: 100%;
			z-index: 101;
			top: 130px;
			width: 100%;
			text-align: center;
		}
		.navbar {
			position: absolute;
			z-index: 100;
			width: 100%;
		}
		.navbar-carbon {
			background:
			  linear-gradient(27deg, #151515  5px, transparent 5px) 0 5px,
			  linear-gradient(207deg, #151515  5px, transparent 5px) 10px 0px,
			  linear-gradient(27deg, #222 5px, transparent 5px) 0px 10px,
			  linear-gradient(207deg, #222 5px, transparent 5px) 10px 5px,
			  linear-gradient(90deg, #1b1b1b  10px, transparent 10px),
			  linear-gradient(#1d1d1d  25%, #1a1a1a  25%, #1a1a1a 50%, transparent 50%, transparent 75%, #242424  75%, #242424 );
			background-color: #131313 ;
			background-size: 20px 20px;
		}
		.btn-matte {
			position: absolute;
			top: 300px;
			left: 50%;
			margin-left: -150px;
			width: 300px;
			z-index: 101;
		}
		.btn-carbon {
			float: left;
			cursor: pointer;
			background:
			  linear-gradient(27deg, #151515  5px, transparent 5px) 0 5px,
			  linear-gradient(207deg, #151515  5px, transparent 5px) 10px 0px,
			  linear-gradient(27deg, #222 5px, transparent 5px) 0px 10px,
			  linear-gradient(207deg, #222 5px, transparent 5px) 10px 5px,
			  linear-gradient(90deg, #1b1b1b  10px, transparent 10px),
			  linear-gradient(#1d1d1d  25%, #1a1a1a  25%, #1a1a1a 50%, transparent 50%, transparent 75%, #242424  75%, #242424 );
			background-color: #131313 ;
			background-size: 20px 20px;
			width: 100px;
			height: 40px;
			margin: 0px;
			color: #c0392b;
			padding-left: 24px;
			padding-top: 10px;
		}
		.btn-carbon:hover {
			background: #c0392b;
		}
		.btn-carbon:hover > a {
			color: white;
			text-decoration: none;
		}
		.btn-carbon a {
			color: #c0392b;
			font-weight: bold;
		}
    </style>
</head>
<body>
<?php
$this->load->view('partials/nav_customer');
$this->load->view('partials/foot');
?>
<div class="background"></div>
<div class="overlay"></div>
<h1 class="container_main1">Welcome to AJ Conceptz</h1>
<h3 class="container_main2">Where beautiful design meets incredible performace!</h3>

<div class="btn-matte">
	<div class="btn-carbon" style="margin-right: 100px"><a href="/welcome/signin_page">Log In</a></div>
	<div class="btn-carbon"><a href="/welcome/register_page">Register</a></div>
</div>