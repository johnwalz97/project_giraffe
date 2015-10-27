<?php
$this->load->view('partials/head', ['title' => 'All Products']);
$this->load->view('partials/nav');
$this->load->view('partials/foot');
?>
<div class="container">
    <a href="/admins/add_product" class="btn btn-primary">Add New Product</a>
    <table class="table">
        <th>Picture</th>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Inventory Count</th>
        <th>Quantity Sold</th>
        <th>Actions</th>
        <?php
        $i = 0;
        foreach($products as $product){
            $i++ ?>
            <tr>
                <td><img width="50px" height="50px" src="/assets/pics/img (<?=$i?>).jpg"></td>
                <td><?=$product['id']?></td>
                <td><?=$product['name']?></td>
                <td style="overflow: scroll; height: 100px; max-width: 200px;"><?=$product['description']?></td>
                <td>100</td>
                <td>0</td>
                <td><a href="/admins/edit/<?=$product['id']?>">Edit</a> | <a href="/admins/delete/<?=$product['id']?>">Delete</a></td>
            </tr>
    <?php } ?>
    </table>
</div>