<?php
$this->load->view('partials/head', ['title' => 'Edit Product']);
$this->load->view('partials/nav');
$this->load->view('partials/foot');
?>
<div class="container">
    <h1>Preview Product <?=$product['id']?> - <?=$product['name']?></h1>
    <div class="row">
        <img src="/assets/pics/img (<?=$product['picture_link']?>).jpg" class="col-md-6">
        <div class="container col-md-6">
            <label>Name:</label><p><?=$product['name']?></p>
            <label>Price:</label><p>$<?=$product['price']?></p>
            <label>Description</label><div><?=$product['description']?></div>
            <a href="/admins/edit/<?=$product['id']?>" id="cancel" class="btn btn-default">Edit</a>
            <a href="/admins/products" id="preview" class="btn btn-success">All Products</a>
        </div>
    </div>
</div>