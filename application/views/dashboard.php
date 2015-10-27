<?php
$this->load->view('partials/head', ['title' => 'Admin Dashboard']);
$this->load->view('partials/nav');
$this->load->view('partials/foot');
?>
<a href="/admins/orders"><div class="container">
    <table class="table">
        <?php
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
</div></a>