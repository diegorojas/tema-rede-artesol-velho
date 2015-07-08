<?php get_header(); ?>
			<div id="content-hd"></div>
			<div id="content">
			
				<div id="main" class="col620 left first clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
						<header>
							<?php userphoto_the_author_photo() ?>
							<h1 class="single-title" itemprop="headline"><?php the_title(); ?></h1>
							
							<p class="meta"><time datetime="<?php echo the_time('m F Y'); ?>" pubdate><?php the_time('m F Y'); ?></time> - <?php the_author_posts_link(); ?>.</p>
						
						</header> <!-- end article header -->
					
						<section class="post_content clearfix" itemprop="articleBody">
							<?php the_content(); ?>
							
					
						</section> <!-- end article section -->
						
						<footer>
			
							<?php the_tags('<p class="tags"><span class="tags-title">Tags:</span> ', ', ', '</p>'); ?>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					<?php comments_template(); ?>
					
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
                	<?php get_search_form(); ?>
                    <div id="rss-2" class="widget widget_rss">
                        <h4 class="widgettitle">Posts recentes</h4>		
                        <ul>
                            <?php
                            $args = array( 'numberposts' => 10, 'order'=> 'ASC', 'orderby' => 'title' );
                            $postslist = get_posts( $args );
                            foreach ($postslist as $post) :  setup_postdata($post); ?> 
                                <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div id="rss-2" class="widget widget_rss">
                    	<?php sidebarlogin(); ?>
                    </div>
                </div>
                
                <div id="parceiros"></div>
                
			</div> <!-- end #content -->
<div id="content-bt"></div>
<?php get_footer(); ?>