<?php
$this->load->view('partials/head', ['title' => 'Admin Dashboard']);
$this->load->view('partials/nav');
$this->load->view('partials/foot');
?>
<div class="container">
    <table class="table">
        <?php
        if(empty($orders)){
            echo "<h3>No Orders!</h3>";
        }
        foreach($orders as $order){ ?>
            <tr>
                <td><?=$order['id']?></td>
                <td><?=$order['id']?></td>
                <td><?=$order['id']?></td>
                <td><?=$order['id']?></td>
                <td><?=$order['id']?></td>
                <td>
                    <form action="/admins/status" method="post">
                        <select name="status">
                            <option value="shipped"></option>
                            <option value="order in process"></option>
                            <option value="cancelled"></option>
                        </select>
                    </form>
                </td>
            </tr>
    <?php } ?>
    </table>
</div>