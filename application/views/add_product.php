<?php
$this->load->view('partials/head', ['title' => 'Add Product']);
$this->load->view('partials/nav');
$this->load->view('partials/foot');
?>
<div class="container">
    <h1>Add Product</h1>
    <div class="container">
        <form action="/admins/create" method="post">
            <input type="text" name="name">
            <textarea name="description"></textarea>
            <select name="category">
                <?php
                foreach($categories as $category){
                    echo "<option value='$category'></option>";
                }
                ?>
            </select>
            <input type="text" name="new_category">
            <input type="image" name="image">
            <button id="cancel" class="btn btn-default">Cancel</button>
            <button id="preview" class="btn btn-success">Preview</button>
            <input type="submit" value="Update" class="btn btn-primary">
        </form>
    </div>
</div>