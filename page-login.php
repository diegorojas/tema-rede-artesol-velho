<?php
/*
Template Name: Login Page
*/
?>

<?php get_header(); ?>
			
            <div id="content-hd"></div>
			<div id="content">
            
            			
				<div id="main" class="col620 left first clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
						<header>
							
							<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
							
						
						</header> <!-- end article header -->
					
						<section class="post_content clearfix" itemprop="articleBody">
							<?php the_content(); ?>
					
						</section> <!-- end article section -->
					
					</article> <!-- end article -->
					
					
					
					<?php endwhile; ?>		
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1>Not Found</h1>
					    </header>
					    <section class="post_content">
					    	<p>Sorry, but the requested resource was not found on this site.</p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    			<div id="sidebar1" class="sidebar right col300 last clearfix" role="complementary" style="margin-top:54px;">
     
                    <div id="rss-2" class="widget widget_rss">
                    	<?php sidebarlogin(); ?>
                    </div>
                </div>
				
    
			</div> <!-- end #content -->
            <div id="content-bt"></div>

<?php get_footer(); ?>