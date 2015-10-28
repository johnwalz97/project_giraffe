<?php
$this->load->view('partials/head', ['title' => 'Add Product']);
$this->load->view('partials/nav');
$this->load->view('partials/foot');
?>
<div class="container">
    <h1>Add Product</h1>
    <div class="container col-md-">
        <form action="/admins/create" method="post">
            <p><label>Name: </label><input type="text" name="name" required></p>
            <p><label>Price: </label><input type="number" name="price" required></p>
            <p><label>Description: </label></p><p><textarea style="width: 400px; height: 100px;" required name="description"></textarea></p>
            <p><label>Category: </label><select name="category">
                <?php
                foreach($categories as $category){
                    echo "<option value='".$category['id']."'>".$category['name']."</option>";
                }
                ?>
            </select></p>
            <p><a id="picture" onclick="$('#pictures, #overlay').slideDown()">Choose Picture</a></p>
            <p><a id="cancel" class="btn btn-default" href="/admins/products">Cancel</a>
            <input id="pic" type="hidden" name="picture_link" value="">
            <input type="submit" id="preview" formaction="/admins/create_preview" class="btn btn-success" value="Preview">
            <input type="submit" value="Add Product" class="btn btn-primary"></p>
        </form>
    </div>
</div>
<div id="pictures" style="display: none">
    <?php
    for($i=1; $i<=29; $i++){ ?>
        <img class="picture" src="/assets/pics/img (<?=$i?>).jpg" id="<?=$i?>" width="100px" height="100px;">
    <?php } ?>
</div>
<div id='overlay' style="display: none" onclick="$('#pictures, #overlay').slideUp();"><h3 class="fixed_title">Choose a picture</h3></div>
<script>
    $('.picture').click(function(){
        var value = $(this).attr('id');
        $('#pic').attr('value', value);
        $('#pictures, #overlay').slideUp();
    })
</script>