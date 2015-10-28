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
    </style>
</head>
<body>
<nav class="navbar navbar-carbon" style="border-bottom: solid thin black; margin-left: 0px !important; margin-top: 0px !important; border: none !important">
    <div class="container">
        <div class="navbar-header">
            <span class="navbar-brand" style="color: #202020">AJ Conceptz</span>
        </div>
        <ul class="nav navbar-nav">
            <li><a class="list_link" href="/mains/">Shop as a guest</a></li>
			<li><a class="list_link" href="/welcome/contact">Contact Us</a></li>
        </ul>
        <ul class="nav navbar-nav pull-right">
            <li class="pull-right"><a class="list_link" href="/admins/logoff">Log Off</a></li>
        </ul>
    </div>
</nav>
<?php
$this->load->view('partials/foot');
?>
<div class="background"></div>
<div class="overlay"></div>
<h1 class="container_main1">Welcome to AJ Conceptz</h1>
<h3 class="container_main2">Where beautiful design meets incredible performace!</h3>