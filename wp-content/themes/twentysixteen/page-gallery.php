<?php get_header(); ?>
<?php $term = $_GET['term']; 
    if(!isset($term)){
        $term = "all";
    }
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		
		<?php $red_images =  get_image_urls_by_taxonomy_term($term); 
        foreach($red_images as $image){
            print '<img src="'.$image.'">';
        }
        ?>

	</main><!-- .site-main -->
</div><!-- .content-area -->

<!-- <?php get_sidebar(); ?> -->
<?php get_footer(); ?>
