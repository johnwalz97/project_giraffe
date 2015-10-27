<?php
$this->load->view('partials/head', ['title' => 'Edit Product']);
$this->load->view('partials/nav');
$this->load->view('partials/foot');
?>
<div class="container">
    <h1>Edit Product - ID <?=$this->session->flashdata('id')?></h1>
    <div class="container">
        <form action="/admins/update/<?=$this->session->flashdata('id')?>" method="post">
            <input type="text" name="name" value="<?=$product['name']?>">
            <textarea name="description"><?=$product['description']?></textarea>
            <select name="category">
                <?php
                foreach($categories as $category){
                    echo "<option value='$category'></option>";
                }
                ?>
            </select>
            <input type="text" name="new_category">
            <input type="image" name="image">
            <img src="/assets/pics/img (<?=$product['id']?>).jpg">
            <button id="cancel" class="btn btn-default">Cancel</button>
            <button id="preview" class="btn btn-success">Preview</button>
            <input type="submit" value="Update" class="btn btn-primary">
        </form>
    </div>
</div>