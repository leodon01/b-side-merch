<?php include("inc/products.php") ?>

<?php
$pageTitle = "Merchandise";
$section = "shirts";
include("inc/header.php"); ?>

<div class="section shirts page">
  <div class="wrapper">
    <h1>Full Catalog</h1>
    <ul class="products" style="display: inline-table">
      <?php foreach($products as $product_id => $product) {
           echo get_list_view_html($product_id, $product);
            }
         ?>
    </ul>
  </div>
</div>


<?php include("inc/footer.php"); ?>
