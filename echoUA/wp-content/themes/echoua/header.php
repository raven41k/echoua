<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package echoUA
 */

?>
<!DOCTYPE html>
<html class="no-js" lang="ru">

<head>

	<meta charset="utf-8">

	<title>Заголовок</title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<?php wp_head();?>
</head>

<body>

	<!-- header start -->
	<header class="header">
		<div class="wrapper">
			<?php 
				$menu = wp_nav_menu( array( 'theme_location' => 'menu', 'menu_class' => 'menu', 'container' => 'false', 'echo' => 0, ) );
	            echo ($menu);
            ?>
			<!-- Menu Button -->
    		<button class="menu-btn"><i class="fa fa-bars" aria-hidden="true"></i> Menu</button>
    		<!-- Mob Menu -->
			<nav class="pushy pushy-left">
			    <div class="pushy-content">
			        <?php 
						$pushymenu = wp_nav_menu( array( 'theme_location' => 'menu', 'menu_class' => 'pushy-menu', 'container' => 'false', 'echo' => 0, ) );
			            echo ($pushymenu);
		            ?>
			    </div>
			</nav>
			<div class="welcomeBlock">
				<div class="left">
					<?php
		                $title = get_field('welcome_title');
		                if( !empty($title) ) {
		                    echo '<div class="welcomeBlock__title">'.$title.'</div>';
		                }
	                ?>
					<?php
		                $desc = get_field('welcome_text');
		                if( !empty($desc) ) {
		                    echo '<div class="welcomeBlock__desc">'.$desc.'</div>';
		                }
	                ?>
					<a href="#" class="welcomeBlock__btn hvr-float-shadow">Contact Us</a>	
				</div>
				<div class="right">
					<div class="welcomeBlock__video">
				        <div id="player"></div>
				        <div id="thumbnail_container" class="thumbnail_container">
				            <img class="thumbnail" id="thumbnail" />
				        </div>
				        <a class="start-video"><i class="fa fa-play-circle-o" aria-hidden="true"></i></a>
				    </div>
				</div>
			</div>
		</div>
	</header>
	<!-- header end -->
