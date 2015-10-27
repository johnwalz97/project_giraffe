<?php
$this->load->view('partials/head', ['title' => 'All Products']);
$this->load->view('partials/nav');
$this->load->view('partials/foot');
?>
<div class="container">
    <table class="table">
        <th>Picture</th>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Inventory Count</th>
        <th>Quantity Sold</th>
        <th>Actions</th>
        <?php
        foreach($products as $product){ ?>
            <tr>
                <td><img width="50px" height="50px" src="/assets/pics/img (<?=$product['id']?>).jpg"></td>
                <td><?=$product['id']?></td>
                <td><?=$product['name']?></td>
                <td><?=$product['description']?></td>
                <td>100</td>
                <td>0</td>
                <td><a href="/admins/edit/<?=$product['id']?>">Edit</a> | <a href="/admins/delete/<?=$product['id']?>">Delete</a></td>
            </tr>
    <?php } ?>
    </table>
</div>