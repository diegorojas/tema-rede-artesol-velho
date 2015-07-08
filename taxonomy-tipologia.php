<?php get_header(); ?>
			<div id="content-hd"></div>
			<div id="content">
            
            	<div id="sidebar2" class="sidebar right col300 last clearfix" role="complementary" style="margin-top:24px;">
                	<?php // get_search_form(); ?>
                    <div id="widget_pages" class="widget widget_pages"><h4 class="widgettitle">Tipologias</h4>		
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
            
				<div id="main" class="col620 left first clearfix" role="main">
					<h3 class="term-heading"><?php single_cat_title(); ?></h3>
					
                    <!-- solution for this page found here http://www.dynamicwp.net/articles-and-tutorials/how-to-group-articles-or-posts-by-author/ -->
					<?php
                    $blogusers = $wpdb->get_results( "SELECT ID, user_nicename from $wpdb->users WHERE 1=1 ORDER BY display_name" );
                    $term =	$wp_query->queried_object;
                    if ($blogusers) {
                      foreach ($blogusers as $bloguser) {
                        $user = get_userdata($bloguser->ID);
                        $args=array(
                          'author' => $user->ID,
                          'post_type' => 'produtos',
                          'taxonomy' => 'tipologia',
                          'term' => $term->slug,
                          'posts_per_page' => 12,
                          'caller_get_posts'=> 1
                        );
                        $my_query = null;
                        $my_query = new WP_Query($args);
                        if( $my_query->have_posts() ) {
							//nome do grupo
                          echo '<div class="prod-author-camp"><h3 class="term-heading-2"><a href="' . get_author_posts_url( $user->ID ) . '" class="link-author" style="color:#458876;margin-left:-6px">' . $user->user_firstname . ' ' . $user->user_lastname .'</a></h3>';
						  	//link para o grupo
						  echo '<a href="' . get_author_posts_url( $user->ID ) . '" class="link-author">Veja mais do artesanato e saiba como adquirir →</a>';
						  	//posts do grupo
						  while ($my_query->have_posts()) : $my_query->the_post(); ?>
                            <?php
							$thumbnail_id=get_the_post_thumbnail($post->ID, 'large');
							preg_match ('/src="(.*)" class/',$thumbnail_id,$link);
							?>
                            <div class="prod-list-author">
								<?php the_post_thumbnail(array(140,140)); ?>
                                <span class="list-prod-title"><?php the_title(); ?></span>
                                <a href="<?php echo $link[1]; ?>" title="<?php the_title_attribute(); ?>" class="a-prod-list" rel="fancybox"></a>
                            </div>
							<?php
                          endwhile;
						  echo '</div>';
                        }
                      wp_reset_query();
                      }
                    }
                    ?>


			
				</div> <!-- end #main -->
    
			</div> <!-- end #content -->
 <div id="content-bt"></div>
<?php get_footer(); ?>