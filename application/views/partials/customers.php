<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <title><?=$title?></title>
	<link rel="icon" href="/assets/pics/motorcycle02.png">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="/assets/bootstrap.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip(); 
        });
    </script>
</head>
<nav class="navbar navbar-carbon" style="border-bottom: solid thin black;">
    <div class="container">
        <div class="navbar-header">
            <a class="active navbar-brand" href="/" style="color: #c0392b; font-weight: bold;">AJ Conceptz</a>
        </div>
		<ul class="nav navbar-nav">
			<li><a href="/mains/">All Products</a></li>
			<li class="li_bar"><a href="/welcome/contact">Contact Us</a></li>
		</ul>
        <ul class="nav navbar-nav pull-right">
            <li class="pull-right"><a href="/shopping">Shopping Cart <i class="fa fa-shopping-cart fa-lg"></i></a></li>
        </ul>
    </div>
</nav>