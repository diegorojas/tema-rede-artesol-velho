<?php
/*
Template Name: Produtos
*/
?>

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

					<!--<?php $loop = new WP_Query( array( 'post_type' => 'produtos', 'posts_per_page' => 8 ) ); ?>
            
					<?php while ( $loop->have_posts() ) : $loop->the_post(); ?> 
                        <article id="post-<?php the_ID(); ?>">
                            <header>
                                <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                            </header>
                            <section>
                                <?php echo get_the_post_thumbnail($page->ID, 'thumbnail'); ?>
                            </section>
                        </article>
                        
                    <?php endwhile; ?>-->
                
<?php
// output quick links list of countries
$terms = get_terms('tipologia');
foreach ($terms as $term) {
$wpq = array ('taxonomy'=>'tipologia','term'=>$term->slug,'posts_per_page' => 4,);
$query = new WP_Query ($wpq);
$article_count = $query->post_count;
echo "<h3 class=\"term-heading\" id=\"".$term->slug."\">";
echo $term->name;
echo "</h3>";
if ($article_count) {
echo "<ul class=\"list-prod-page\" >";
$posts = $query->posts;
foreach ($posts as $post) {
	$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
echo "<li>".get_the_post_thumbnail($page->ID, array(140,140) )."<span class=\"list-prod-title\" rel=\"fancybox\">".$post->post_title."</span><a href=\"".$large_image_url[0]."\"  class=\"a-prod-list\" rel=\"fancybox\" ></a></li>";
}
echo '<p><a href="'.get_term_link($term->slug, 'tipologia').'" class="link-to-term"> veja mais de '.$term->name.' →</a></p>';
echo "</ul>";
}
echo "";
}
?>
			
				</div> <!-- end #main -->
    
			</div> <!-- end #content -->
           <div id="content-bt"></div>
<?php get_footer(); ?>