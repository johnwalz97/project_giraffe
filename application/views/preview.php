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
            <label>Category:</label><p><?=$product['category_name']?></p>
            <a onclick="$('#edit, #overlay').slideDown()" id="cancel" class="btn btn-warning">Edit</a>
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
                        if ($category['name'] == $product['category_name']){
                            echo "<option selected value='".$category['id']."'>".$category['name']."</option>";
                        }
                        else {
                            echo "<option value='".$category['id']."'>".$category['name']."</option>";
                        }
                    }
                    ?>
                </select></p>
                <input id="pic" type="hidden" name="picture_link" value="">
                <a onclick="$('#edit, #overlay').slideUp()" id="cancel" class="btn btn-warning">Cancel</a>
                <input type="submit" formaction="/admins/preview/<?=$product['id']?>" id="preview" class="btn btn-success" value="Preview">
                <input type="submit" value="Update" class="btn btn-primary">
            </form>
        </div>
        <div style="margin-left: 20px">
            <p><a id="picture" onclick="$('#pictures, #overlay1').slideDown()">Choose Picture</a></p>
        </div>
    </div>
</div>
<div id='overlay' style="display: none" onclick="$('#edit, #overlay').slideUp()"></div>
<div id="pictures" style="display: none">
    <?php
    for($i=1; $i<=29; $i++){ ?>
        <img class="picture" src="/assets/pics/img (<?=$i?>).jpg" id="<?=$i?>" width="100px" height="100px;">
    <?php } ?>
</div>
<div id='overlay1' style="display: none" onclick="$('#pictures, #overlay1').slideUp();"><h3 class="fixed_title">Choose a picture</h3></div>
<script>
    $('.picture').click(function(){
        var value = $(this).attr('id');
        $('#pic').attr('value', value);
        $('#pictures, #overlay1').slideUp();
    })
</script>