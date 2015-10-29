<?php
$this->load->view('partials/head', ['title' => 'Admin Dashboard']);
$this->load->view('partials/nav');
$this->load->view('partials/foot');
?>
<div class="container">
    <table class="table">
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Ordered At</th>
            <th>Ship Address</th>
            <th>Total Order</th>
            <th>Status</th>
        </thead>
        <?php
        if(empty($orders)){
            echo "<h3>No Orders!</h3>";
        }
        foreach($orders as $order){
            $products = $this->admin->get_ordered_products($order['id']);
            $total = 0;
            foreach($products as $product){
                $total += $product['product_quantity'] * $product['price'];
            }
            ?>
            <tr>
                <td><a href="/admins/view_order/<?=$order['id']?>"><?=$order['id']?></a></td>
                <td><?=$order['first_name']?></td>
                <td><?=$order['created_at']?></td>
                <td><?=$order['street']?> <?=$order['city']?>, <?=$order['state']?> <?=$order['zip']?></td>
                <td>$<?=$total?></td>
                <td>
                    <form id="form" action="/admins/status/<?=$order['id']?>" method="post">
                        <select id="status" name="status">
                            <option id="1" value="1">Order in Process</option>
                            <option id="2" value="2">Shipped</option>
                            <option id="3" value="3">Cancelled</option>
                        </select>
                    </form>
                </td>
            </tr>
    <?php } ?>
    </table>
</div>
<script>
    $('#status').val('<?=$order['status']?>');
    $('#status').change(function(){
        $('#form').submit();
    })
</script>