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
            <a onclick="$('#edit, #overlay').show()" id="cancel" class="btn btn-warning">Edit</a>
            <a href="/admins/products" id="preview" class="btn btn-success">All Products</a>
        </div>
    </div>
</div>
<div class="container" id="edit" style="display: none">
    <h1>Edit Product - ID <?=$product['id']?></h1>
    <div class="row">
        <img src="/assets/pics/img (<?=$product['picture_link']?>).jpg" class="col-md-6">
        <div class="container col-md-6">
            <form id="update" action="/admins/update/<?=$product['id']?>" method="post">
                <p><label>Name:</label><input type="text" name="name" value="<?=$product['name']?>"></p>
                <p><label>Price:</label><input type="number" name="price" value='<?=$product['price']?>'></p>
                <p><label>Description</label><textarea name="description"><?=$product['description']?></textarea></p>
                <p><label>Category</label><select name="category">
                    <?php
                    foreach($categories as $category){
                        echo "<option value='".$category['name']."'></option>";
                    }
                    ?>
                </select></p>
                <p><label>Or Create a New Category</label><input type="text" name="new_category"></p>
                <a href="/admins/products" id="cancel" class="btn btn-default">Cancel</a>
                <input type="submit" formaction="/admins/preview/<?=$product['id']?>" id="preview" class="btn btn-success" value="Preview">
                <input type="submit" value="Update" class="btn btn-primary">
            </form>
        </div>
        <div style="margin-left: 20px">
            <h4>Change Picture</h4>
            <input type="file" name="picture">
        </div>
    </div>
</div>
<div id='overlay' style="display: none"></div>