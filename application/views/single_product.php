<?php $this->load->view('partials/customers') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Single Product View</title>
</head>
<body>
<div class="container">
	<div style="margin-left: 20px;">
		<p><a href="/mains">&#10094;&#10094;&#10094; Go Back</a></p>
		<h1><?= $oneProduct["name"] ?></h1>
	</div>
	<!-- BIG IMAGE -->
	<img class="col-md-6" src="/assets/pics/img (<?= $oneProduct['picture_link'] ?>).jpg">
	<!-- DESCRIPTION -->
	<div class="col-md-6">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, deleniti asperiores doloribus atque ea mollitia explicabo consectetur veniam, libero ex error. Autem adipisci, reiciendis quod dolores excepturi illum voluptatibus laborum!</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa alias error modi iusto laboriosam officiis necessitatibus distinctio a minima! Quia non natus commodi iure accusamus aliquid, earum molestias quisquam recusandae.</p>
	</div>
	
	<div class="row" align="right" style="margin-right: 20px;">
		<h3><i class="fa fa-usd"><?= $oneProduct['price'] ?></i></h3>	
		<!-- PURCHASE -->
		<a href="/shopping/buy/<?= $oneProduct['id'] ?>" class="btn btn-primary">Add to Cart <i class="fa fa-cart-plus"></i></a>	
	</div>

<!-- BOTTOM THUMBNAIL SLIDER - SIMILAR ITEMS (SORT BY CATEGORY, LIMIT BY 6)-->
	<div style="margin-left: 15px;">
		<h3>Similar Items</h3>
	
		<?php 
		foreach($products as $product){ ?>
		<a href="/mains/oneProduct/<?= $product['id']?>"><img width="150px" height="150px" src="/assets/pics/img (<?=$product['picture_link']?>).jpg"></a> 
		<?php } ?>
	</div>
</div>
</body>
</html>