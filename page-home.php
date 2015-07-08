<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
	
    		
			<div id="carrossel">
            	<div id="carrossel-tp"></div>
                	<h1>Conhe&ccedil;a os produtos artesanais e saiba como adquirir!</h1>
                    <ul id="sm" class="sm">
                        <?php
                        $terms = apply_filters( 'taxonomy-images-get-terms', '', array('taxonomy'=> 'tipologia'));
                        if ( ! empty( $terms ) ) {
                            foreach( (array) $terms as $term ) {
                                print '<li><a href="' . esc_url( get_term_link( $term, $term->taxonomy ) ) . '" class="bg-acc" title="">' . wp_get_attachment_image( $term->image_id, 'medium' ) . '</a><a href="' . esc_url( get_term_link( $term, $term->taxonomy ) ) . '" class="acc-title">' . $term->name . '</a><span></span></li>' ;
                            }
                        }
                        ?>
                    </ul>
                <div id="carrossel-bt"></div>
            </div>
			
            <div id="content-hd"></div>
			<div id="content">
            	
			  <div id="main-hm" class="col620 left first clearfix" role="main">
                       	
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						<section class="post_content"><?php the_content(); ?></section> <!-- end article section -->				
				  </article> <!-- end article -->

				  <?php endwhile; ?>	
				  <?php else : ?>
				  <?php endif; ?>
                    
                    
                    
                    <div class="box-hm">
                    	<div id="color-20">
						<?php 
						$page_id = 20;
                            query_posts('page_id=20');
                            while (have_posts()) : the_post();
							echo '<a href="' . get_permalink( $page_id ) . '" class="img-hm-tb"></a>';
							echo the_post_thumbnail('full');
                            endwhile;
                        $page_data = get_page( $page_id ); 
                        $content = apply_filters('the_excerpt', $page_data->post_excerpt);
                        $title = $page_data->post_title;
                        echo "<h3>" . $title ."</h3>";
                        echo "<p>" . $content."</p>";
                        ?>
                    	</div>
                    </div>
                    
                    <div class="box-hm">
                    	<div id="color-24">
						<?php 
						$page_id = 24;
                            query_posts('page_id=24');
                            while (have_posts()) : the_post();
							echo '<a href="http://www.artesol.org.br/site/comercio-justo/" class="img-hm-tb"></a>';
                            echo the_post_thumbnail('full');
                            endwhile;
                        $page_id = 24;
                        $page_data = get_page( $page_id ); 
                        $content = apply_filters('the_excerpt', $page_data->post_excerpt);
                        $title = $page_data->post_title;
                        echo "<h3>" . $title ."</h3>";
                       	echo "<p>" . $content."</p>";
                        ?>
                    	</div>
                    </div>

                    <div class="box-hm">
                        <div id="color-22">
                         <?php      
                         $page_id = 33;              
                            query_posts('page_id=33');
                            while (have_posts()) : the_post();
                            echo '<a href="' . get_permalink( $page_id ) . '" class="img-hm-tb"></a>';
                            echo the_post_thumbnail('full');
                            endwhile; 
                        $page_id = 33;
                        $page_data = get_page( $page_id ); 
                        $content = apply_filters('the_excerpt', $page_data->post_excerpt);
                        $title = $page_data->post_title;
                        echo "<h3>" . $title ."</h3>";
                        echo "<p>" . $content."</p>";
                        ?>
                        </div>
                    </div>
                    
				</div> 
				<!-- end #main -->
                
               
    
				<?php get_sidebar(); // sidebar 1 ?>
                
                <div id="parceiros"></div>
                
    			
			</div> <!-- end #content -->
            <div id="content-bt"></div>

<?php get_footer(); ?>