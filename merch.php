<?php include("inc/products.php") ?>

<?php
$pageTitle = "Merchandise";
$section = "shirts";
include("inc/header.php"); ?>

<div class="section shirts page">
  <div class="wrapper">
    <h1>Full Catalog</h1>
    <ul class="products" style="display: inline-table">
      <?php foreach($products as $product_id => $product) { ?>
        <li>
          <?php echo '<a href="shirt.php?id=' . $product_id . '">'; ?>  
            <img src="<?php echo $product["img"];?>" alt="<?php echo $product["name"]; ?>">
            <p>View Details</p>
          </a>
        </li>
        <?php } ?>
    </ul>
  </div>
</div>


<?php include("inc/footer.php"); ?>
