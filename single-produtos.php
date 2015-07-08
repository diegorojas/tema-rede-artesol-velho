<?php
/*
This is the custom post type post template.
If you edit the post type name, you've got
to change the name of this template to
reflect that name change.

i.e. if your custom post type is called
register_post_type( 'bookmarks',
then your single template should be
single-bookmarks.php

*/
?>

<?php get_header(); ?>
			
            <div id="content-hd"></div>
			<div id="content">
            
            	<div id="sidebar2" class="sidebar right col300 last clearfix" role="complementary" style="margin-top:32px;">
                	<?php get_search_form(); ?>
                    <div id="widget_pages" class="widget widget_pages"><h4 class="widgettitle">Páginas</h4>		
						  	<?php 
							  $args = array(
								'taxonomy' => 'tipologia',
								format => 'list',
								smallest => '10',
								largest => '10'
							   ); 
							   
							  wp_tag_cloud($args);
							?>
                    </div>
                </div>
			
				<div id="main" class="col620 left first clearfix single-prod" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						<header>
							<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
						</header>
						<?php the_post_thumbnail( array(261,261), array('class' => 'img-single') ); ?>
                        <?php echo get_the_term_list( get_the_ID(), 'tipologia', "Categoria: " ) ?>
					</article> <!-- end article -->
					<?php endwhile; ?>			
					<?php else : ?>
					<?php endif; ?>
                    
			
				</div> <!-- end #main -->
    
			</div> <!-- end #content -->
			<div id="content-bt"></div>
<?php get_footer(); ?>