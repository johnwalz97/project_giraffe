<?php
$this->load->view('partials/head', ['title' => 'Edit Product']);
$this->load->view('partials/nav');
$this->load->view('partials/foot');
var_dump($product);
?>
<div class="container">
    <h1>Edit Product - ID <?=$product['id']?></h1>
    <div class="row">
        <img src="/assets/pics/img (<?=$product['id']?>).jpg" class="col-md-6">
        <div class="container col-md-6">
            <form action="/admins/update/<?=$product['id']?>" method="post">
                <p><label>Name:</label><input type="text" name="name" value="<?=$product['name']?>"></p>
                <p><label>Price:</label><input type="number" name="price"></p>
                <p><label>Description</label><textarea name="description"><?=$product['description']?></textarea></p>
                <p><label>Category</label><select name="category">
                    <?php
                    foreach($categories as $category){
                        echo "<option value='$category'></option>";
                    }
                    ?>
                </select></p>
                <p><label>Or Create a New Category</label><input type="text" name="new_category"></p>
                <button id="cancel" class="btn btn-default">Cancel</button>
                <button id="preview" class="btn btn-success">Preview</button>
                <input type="submit" value="Update" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>