<?php
$this->load->view('partials/head', ['title' => 'Admin Dashboard']);
$this->load->view('partials/nav');
$this->load->view('partials/foot');
switch($order['status']){
    case '1':
        $status = "warning";
        $order_status = "In-Process";
        break;
    case '2':
        $status = "success";
        $order_status = "Shipped";
        break;
    case '3':
        $status = "danger";
        $order_status = "Cancelled";
        break;
}
?>
<div class="container">
    <div class="col-md-3" style="border: solid thick black; padding-left: 10px;">
        <h4 style="text-decoration: underline">Order ID---<?=$order['id']?></h4>
        <h5>Customer Shipping Info:</h5>
        <ul>
            <li><?=$order['ship_first_name']?> <?=$order['ship_last_name']?></li>
            <li><?=$order['ship_street']?></li>
            <li><?=$order['ship_city']?></li>
            <li><?=$order['ship_state']?></li>
            <li><?=$order['ship_zip']?></li>
        </ul>
        <h5>Customer Billing Info:</h5>
        <ul>
            <li><?=$order['first_name']?> <?=$order['last_name']?></li>
            <li><?=$order['street']?></li>
            <li><?=$order['city']?></li>
            <li><?=$order['state']?></li>
            <li><?=$order['zip']?></li>
        </ul>
    </div>
    <div class="col-md-6 col-md-offset-1">
        <h3>Products Ordered</h3>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Item</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
            </thead>
            <?php
            $total = 0;
            foreach($products as $item){
                $subtotal = $item['product_quantity'] * $item['price'];
                $total += $subtotal;
                ?>
                <tr>
                    <td><?=$item['product_id']?></td>
                    <td><?=$item['name']?></td>
                    <td><?=$item['price']?></td>
                    <td><?=$item['product_quantity']?></td>
                    <td><?=$subtotal?></td>
                </tr>
            <?php }
            ?>
        </table>
        <div class="row">
            <div class="col-md-3">
                Order Status: <span class="btn btn-<?=$status?>"><?=$order_status?></span>
            </div>
            <div style="border: solid thin black; margin-top: 5px;" class="col-md-3 col-md-offset-6">
                <p>Total Price: $<?=$total?></p>
            </div>
        </div>
    </div>
</div>