<?php get_header(); ?>
			
            <div id="content-hd"></div>
			<div id="content">
			
				<div id="main" class="col620 left first clearfix" role="main">
                
                	<h1 class="rede-title">F&oacute;rum de di&aacute;logo entre grupos</h1>
                    
                    <div id="botao-post">
						<?php if (function_exists('post_from_site')) {post_from_site();} ?> <span>←</span> <p>clique aqui para iniciar um novo tópico</p>
                    </div>

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
                    
                    	<section class="author-post">
                        	<time datetime="" pubdate><?php the_time('d/m'); ?></time>
                        	<?php userphoto_the_author_photo() ?>
                        </section>
						
						<header>
							<h1 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>                 					
							<p class="post-info">por: <?php the_author_posts_link(); ?> | <?php comments_number('Sem coment&aacute;rios', '1 coment&ario', '<span>%</span> coment&aacute;rios' );?></p>
                        </header> <!-- end article header -->
						
						<footer>
			
							<p class="tags"><?php the_tags('<span class="tags-title">Tags:</span> ', ', ', ''); ?></p>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					<?php comments_template(); ?>
					
					<?php endwhile; ?>	
					
                    <nav class="wp-prev-next">
                        <ul class="clearfix">
                            <li class="prev-link"><?php next_posts_link() ?></li>
                            <li class="next-link"><?php previous_posts_link() ?></li>
                        </ul>
                    </nav>		
					
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