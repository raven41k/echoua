<?php/*
Template Name: Home */
?>
<?php echo get_header(); ?>

	<!--content start-->
	<main class="content">
		<div class="wrapper">
			<!-- provider start -->
			<section class="provider">
				<div class="provider__leftBlock">
					<?php
		                $title = get_field('provider_title');
		                if( !empty($title) ) {
		                    echo '<div class="provider__title">'.$title.'</div>';
		                }
	                ?>
	                <?php
		                $desc = get_field('provider_text');
		                if( !empty($desc) ) {
		                    echo '<div class="provider__desc">'.$desc.'</div>';
		                }
	                ?>
					<a href="#" class="provider__btn hvr-float-shadow">Learn More</a>
				</div>
				<div class="providerList">
					<?php
				    $rows = get_field('provider_list');
				    ?>
				    <?php if ($rows): ?>
				        <?php foreach ($rows as $row): ?>
				            <div class="providerList__box">
				            	<div class="providerList__icon">
				                	<img src="<?php echo $row['icon']; ?>" alt=""/>
				            	</div>
				            	<div class="providerList__title">
				            		<?php echo $row['name']; ?>
				            	</div>				
				            	<div class="providerList__desc">
				            		<?php echo $row['description']; ?>
				            	</div>                
				            </div>
				        <?php endforeach; ?>
				    <?php endif; ?>
				</div>
			</section>
			<!-- provider end -->

			<!-- products start -->
			<section class="products">
				<?php
	                $title = get_field('products_title');
	                if( !empty($title) ) {
	                    echo '<div class="products__title">'.$title.'</div>';
	                }
                ?>
                <?php
	                $desc = get_field('products_description');
	                if( !empty($desc) ) {
	                    echo '<div class="products__desc">'.$desc.'</div>';
	                }
                ?>
				<ul class="products__tabs">
					<?php
				    $rows = get_field('products_tabs');
				    ?>
				    <?php if ($rows): ?>
				    	<?php $count = 0; ?>
				        <?php foreach ($rows as $row): ?>
				        	<?php $count++ ?>
				            <li class="<?php if ($count === 1) echo 'active'; ?>"><?php echo $row['name']; ?></li>
				        <?php endforeach; ?>
				    <?php endif; ?>
				</ul>
				<?php
			    $rows = get_field('products_tabs');
			    ?>
			    <?php if ($rows): ?>
			    	<?php $count = 0; ?>
			        <?php foreach ($rows as $row): ?>
			        	<?php $count++ ?>
			        	<div class="products__content <?php if ($count === 1) echo 'active'; ?>">
			        		<?php
						    $images = $row['images'];
						    ?>
			        		<?php foreach ($images as $url): ?>
			        			<div class="products__photo">
			        				<img src="<?php echo $url['url']; ?>" alt="">
			        			</div>
				        	<?php endforeach; ?>
			        	</div>
			        <?php endforeach; ?>
			    <?php endif; ?>
			</section>
			<!-- products end -->

			<!-- team start -->
			<section class="team">
				<?php
	                $title = get_field('team_title');
	                if( !empty($title) ) {
	                    echo '<div class="team__title">'.$title.'</div>';
	                }
                ?>
                <?php
	                $desc = get_field('team_desc');
	                if( !empty($desc) ) {
	                    echo '<div class="team__desc">'.$desc.'</div>';
	                }
                ?>
				<div class="cart">
					<div class="cart__bigPhoto">
						<?php
					    $bigphoto = get_field('cart_big_photo');
					    ?>
						<img src="<?php echo $bigphoto; ?>" alt="">
					</div>
					<div class="cart__rightBlock">
						<?php
					    $rows = get_field('cart_info');
					    ?>
						<?php if ($rows): ?>
					    	<?php $count = 0; ?>
					        <?php foreach ($rows as $row): ?>
					        	<?php $count++ ?>
					        	<div class="cart__info <?php if ($count === 1) echo 'active'; ?>">
									<div class="cart__name"><?php echo $row['name']; ?></div>
									<div class="cart__desc"><?php echo $row['description']; ?></div>
									<div class="cart__social">
										<a href="<?php echo $row['facebook']; ?>">Facebook</a>
										<a href="<?php echo $row['dribble']; ?>">Dribble</a>
										<a href="<?php echo $row['behance']; ?>">Behance</a>
										<a href="<?php echo $row['twitter']; ?>">Twiter</a>
									</div>
					        	</div>
					        <?php endforeach; ?>
				    	<?php endif; ?>
						<ul class="cart__list">
							<?php
						    $rows = get_field('cart_list');
						    ?>
							<?php if ($rows): ?>
						    	<?php $count = 0; ?>
						        <?php foreach ($rows as $row): ?>
						        	<?php $count++ ?>
						        	<li class="cart__photo <?php if ($count === 1) echo 'active'; ?>">
										<img src="<?php echo $row['img']; ?>" alt="">
										<div class="caption"><?php echo $row['name']; ?></div>
						        	</li>
						        <?php endforeach; ?>
					    	<?php endif; ?>
						</ul>
					</div>
				</div>
			</section>	
			<!-- team end -->
		</div>
		
		<!-- subscribe start -->
		<section class="subscribe">
			<div class="wrapper">
				<div class="subscribe__form">
					<?php echo do_shortcode('[contact-form-7 id="62" title="Subscribe form"]')?>
				</div>			
			</div>
		</section>
		<!-- subscribe end -->

		<!-- contact start -->
		<section class="contact">
			<div class="wrapper">
				<?php
	                $title = get_field('contact_title');
	                if( !empty($title) ) {
	                    echo '<div class="contact__title">'.$title.'</div>';
	                }
                ?>
                <?php
	                $desc = get_field('contact_description');
	                if( !empty($desc) ) {
	                    echo '<div class="contact__desc">'.$desc.'</div>';
	                }
                ?>
			</div>
			<div class="contact__center">
				<div class="wrapper">
					<div class="contact__form">
						<?php echo do_shortcode('[contact-form-7 id="63" title="Contact form"]')?>
					</div>
					<?php
		                $info = get_field('contact_info');
		                if( !empty($info) ) {
		                    echo '<div class="contact__info">'.$info.'</div>';
		                }
            		?>
				</div>
			</div>
		</section>
		<!-- contact end -->
	</main>
	<!--content end-->
<?php echo get_footer(); ?>

