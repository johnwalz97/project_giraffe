<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="/assets/bootstrap.css">
  <title>Storefront</title>
</head>
<body>
  <h2>PHP CATEGORY NAME PHP - PAGE NUMBER</h2>

  <?php foreach($products as $product){ ?>
    <img width="50px" height="50px" src="/assets/pics/img (<?=$i?>).jpg">
    <?= } ?>
<!-- FOOTER PAGINATION -->
  <nav>
    <ul class="pagination">
      <li>
        <a href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li>
      <li><a href="#">1</a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li><a href="#">5</a></li>
      <li>
        <a href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
        </a>
      </li>
    </ul>
  </nav>
</body>
</html>