


<?php
$pageTitle = "Home";
include("inc/header.php"); ?>
		<div class="section banner">

			<div class="wrapper">
				<div class="button">
					<a href="#">
						<h2>Hey, I&rsquo;m Mike!</h2>
						<p>Check Out My Shirts</p>
					</a>
				</div>
			</div>

		</div>
		
		<div class="section shirts latest">

			<div class="wrapper">

				<h2>OUR LATEST SHIRTS</h2>


			<?php include("inc/products.php") ?>
				<ul class="products">


					<?php

								$total_products = count($products);
								$position = 0;

					?>
					<?php foreach($products as $product_id => $product) {
							$position = $position + 1;
							if ($total_products - $position < 4) {
								echo get_list_view_html($product_id, $product);
							}
		            }
		         ?>

				</ul>

			</div>

		</div>

	</div>

	<?php include("inc/footer.php"); ?>
