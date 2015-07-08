<?php get_header(); ?>

<style>
.collapseomatic {width: 550px; clear:both; background:#f4f4f4; display:block; margin: 2px 0 2px 25px; padding: 6px 0 4px 31px;}
	.collapseomatic:hover {text-decoration:none; background:#448875; color:#fff;}
.collapseomatic_content {margin-bottom:36px; border-left: 4px solid #c95d1a; padding-left:16px; width: 500px; margin-left:50px;}
</style>
			
            <div id="content-hd"></div>
			<div id="content">
            
            <?php include ('sidebar2.php'); ?>
			
				<div id="main" class="col620 left first clearfix pages-int" role="main">

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
    
				<div id="parceiros"></div>
    
			</div> <!-- end #content -->
            <div id="content-bt"></div>

<?php get_footer(); ?>