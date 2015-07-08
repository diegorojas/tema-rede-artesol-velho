<?php
/*
*/
?>

<?php get_header(); ?>

			<div id="carrossel">
            	<div id="carrossel-tp"></div>
            	<div id="carrossel-bt"></div>
            </div>
			
            
			<div id="content" class="clearfix">
            	<div id="content-hd"></div>
				<div id="main" class="col620 left first clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						<section class="post_content"><?php the_content(); ?></section> <!-- end article section -->				
					</article> <!-- end article -->
					<?php endwhile; ?>	
					<?php else : ?>
					<?php endif; ?>
                    
                  	<div class="box-home">
                    
                    <?php 
					$page_id = 20;
					$page_data = get_page( $page_id );
					$title = $page_data->post_title; // Get title
					$excerpt = $page_data->post_excerpt;
					echo $title;
					echo $excerpt; // Output Content
					?>
                    
                    </div>
                    
                    <div class="box-home">
                    
                    <?php 
					$page_id = 24;
					$page_data = get_page( $page_id );
					$title = $page_data->post_title; // Get title
					$excerpt = $page_data->post_excerpt;
					echo $title;
					echo $excerpt; // Output Content
					?>
                    
                    </div>
                    
                    <div class="box-home">
                    
                    <?php 
					$page_id = 22;
					$page_data = get_page( $page_id );
					$title = $page_data->post_title; // Get title
					$excerpt = $page_data->post_excerpt;
					echo $title;
					echo $excerpt; // Output Content
					?>
                    
                    </div>
                    
               
                
			
				</div> <!-- end #main -->
    
				<?php get_sidebar(); // sidebar 1 ?>
                
                <div id="parceiros"></div>
                
    			<div id="content-bt"></div>
			</div> <!-- end #content -->

<?php get_footer(); ?>