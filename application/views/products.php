<?php
$this->load->view('partials/head', ['title' => 'All Products']);
$this->load->view('partials/nav');
$this->load->view('partials/foot');
?>
<div class="container products">
    <a href="/admins/add_product" id="add_product" class="btn btn-primary">Add New Product</a>
    <table class="table">
        <thead>
            <th>Picture</th>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Inventory Count</th>
            <th>Quantity Sold</th>
            <th>Actions</th>
        </thead>
        <?php
        foreach($products as $product){ ?>
            <tr>
                <td><img width="50px" height="50px" src="/assets/pics/img (<?=$product['picture_link']?>).jpg"></td>
                <td><a href="/admins/preview/<?=$product['id']?>"><?=$product['id']?></a></td>
                <td><a href="/admins/preview/<?=$product['id']?>"><?=$product['name']?></a></td>
                <td><div style="overflow-y: scroll; max-height: 100px; max-width: 200px;"><?=$product['description']?></div></td>
                <td>0</td>
                <td><?=$product['qty_ordered']?></td>
                <td><a href="/admins/edit/<?=$product['id']?>">Edit</a> | <a href="/admins/delete/<?=$product['id']?>">Delete</a></td>
            </tr>
    <?php } ?>
    </table>
</div>