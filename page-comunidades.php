<?php

/*

Template Name: Comunidades

*/

?>



<?php get_header(); ?>

			

            <div id="content-hd"></div>

			<div id="content">

            

            	<div id="sidebar2" class="sidebar right col300 last clearfix" role="complementary" style="margin-top:32px;">

                	<?php // get_search_form(); ?>

                	

                    <div id="widget_pages" class="widget widget_pages">



					<h4 class="widgettitle">Tipo de Artesão</h4>

					<!-- vincode -->
					<ul class="tipode-artesao">
<?php
$var_tda = 'vin_tipodeartesao';$var_tdas = '_vinwpuip_tipodeartesaos';
$list_tdas = get_option($var_tdas);$array_tdas = explode(PHP_EOL, $list_tdas);$uipul = 0;
				foreach ($array_tdas as $key => $value)
				{
				$arrayselected_tda = explode("#",$value);$tda_n = $arrayselected_tda[0];;$tda_s = $arrayselected_tda[1];
				$uipul = $uipul+1;				
				//echo '<li id="uipul-'.$uipul.'" class="li-cat"><a style="display:block;" href="/rede/membros-da-rede/'.$tda_s.'/" class="li-cat-a">'.$tda_n.'</a>';
				echo '<li id="uipul-'.$uipul.'" class="li-cat">'.$tda_n.'';
				?>
						  <ul class="tipode-artesao-users">
<?php
$uiguarg = 'hide_empty=0&meta_key='.$var_tda.'&meta_value='.$tda_s;$uipusers = get_users($uiguarg);
foreach ($uipusers as $uipuser) {	echo '<li style="margin:2px 0px;;"><a style="display:block;background:#DCDCDC;font-size:11px;padding:5px;" href="'.get_author_posts_url($uipuser->ID).'#'.$tda_s.'"> '. $uipuser->display_name . '</a></li>';  }
?>
                          </ul> 
<?php
				echo '</li>';
				}
?>
					</ul>

<h4 class="widgettitle">Tipologias</h4>


<ul class="tipode-artesao">
<?php
$var_tipologia = 'vin_tipologia';$var_tipologias = '_vinwpuip_tipologias';
$list_tipologias = get_option($var_tipologias);$array_tipologias = explode(PHP_EOL, $list_tipologias);$uipul = 0;
				foreach ($array_tipologias as $key => $value)
				{
				$arrayselected_tipologia = explode("#",$value);$tipologia_n = $arrayselected_tipologia[0];;$tipologia_s = $arrayselected_tipologia[1];
				$uipul = $uipul+1;				
				//echo '<li id="uipull-'.$uipul.'" class="li-cat"><a style="display:block;" href="/rede/membros-da-rede/'.$tipologia_s.'/" class="li-cat-a">'.$tipologia_n.'</a>';
				echo '<li id="uipull-'.$uipul.'" class="li-cat">'.$tipologia_n.'';
				?>
						  <ul class="tipode-artesao-users">
<?php
$uiguarg = 'hide_empty=0&meta_key='.$var_tipologia.'&meta_value='.$tipologia_s;$uipusers = get_users($uiguarg);
foreach ($uipusers as $uipuser) {	echo '<li style="margin:2px 0px;;"><a style="display:block;background:#DCDCDC;font-size:11px;padding:5px;" href="'.get_author_posts_url($uipuser->ID).'#'.$tipologia_s.'"> '. $uipuser->display_name . '</a></li>';  }
?>
                          </ul> 
<?php
				echo '</li>';
				}
?>
					</ul>

<style>
	h4.widgettitle {margin-top: 25px;}

</style>

<h4 class="widgettitle">Região</h4>


<ul class="tipode-artesao">
<?php
$var_region = 'vin_region';$var_regions = '_vinwpuip_regions';
$list_regions = get_option($var_regions);$array_regions = explode(PHP_EOL, $list_regions);$uipul = 0;
				foreach ($array_regions as $key => $value)
				{
				$arrayselected_region = explode("#",$value);$region_n = $arrayselected_region[0];;$region_s = $arrayselected_region[1];
				$uipul = $uipul+1;				
				//echo '<li id="uipulll-'.$uipul.'" class="li-cat open-'.$region_s.'"><a style="display:block;" href="/rede/membros-da-rede/'.$region_s.'/" class="li-cat-a">'.$region_n.'</a>';
				echo '<li id="uipulll-'.$uipul.'" class="li-cat open-'.$region_s.'">'.$region_n.'';
				?>
						  <ul class="tipode-artesao-users">
<?php
$uiguarg = 'hide_empty=0&meta_key='.$var_region.'&meta_value='.$region_s;$uipusers = get_users($uiguarg);
foreach ($uipusers as $uipuser) {	echo '<li style="margin:2px 0px;;"><a style="display:block;background:#DCDCDC;font-size:11px;padding:5px;" href="'.get_author_posts_url($uipuser->ID).'#'.$region_s.'"> '. $uipuser->display_name . '</a></li>';  }
?>
                          </ul> 
<?php
				echo '</li>';
				}
?>
					</ul>


					
                    </div>
<script type="text/javascript" language="JavaScript">
jQuery(document).ready(function($){
	$(".tipode-artesao-users").hide();
	$(".tipode-artesao li.li-cat").click(function(){
		console.log('pegou!')
		//event.preventDefault();
		var thisliid = $(this).attr('id');
		$(".tipode-artesao li#"+thisliid+".li-cat ul").slideToggle("fast");
		$(".tipode-artesao-users").not(".tipode-artesao > li#"+thisliid+".li-cat ul").slideUp("fast");return false;
	});

	$(".tipode-artesao li.li-cat li a").click(function(e){
		e.stopPropagation();
	});

	//var hash = document.location.hash.substring(1);
	//$('.open-'+hash).children('ul').slideDown('fast');
});//jQueryEnd
</script>
			<!-- vincode -->

        

			 <!-- vincode -->

                    <?php

						  if($post->post_parent)

						  $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");

						  else

						  $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");

						  if ($children) { ?>

                          <div id="widget_pages" class="widget widget_pages"><h4 class="widgettitle">Veja também</h4>		

						  <ul>

						  <?php echo $children; ?>

						  </ul></div>

						  <?php } ?>

                </div>

			

				<div id="main" class="col620 left first clearfix pages-int" role="main">



					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					

					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

						

						<header>

							

							<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>

							

						

						</header> <!-- end article header -->

					

						<section class="post_content_comunidades clearfix" itemprop="articleBody">

							<?php the_content(); ?>

                            

                            <ul>			        

<?php

//get all users, iterate through users, query for one post for the user,

//if there is a post then display the post title, author, content info

$blogusers = get_users_of_blog(array());

if ($blogusers) {

  foreach ($blogusers as $bloguser) {

    $args = array(

      'author' => $bloguser->user_id,

	  'orderby' => 'name',

	  'showposts' => 1,

	  'caller_get_posts' => 1,

	  'post_type' => 'produtos'

    );

    $my_query = new WP_Query($args);

    if( $my_query->have_posts() ) {

      // $user = get_userdata($bloguser->user_id);

      // echo 'This is one post for author with User ID: ' . $user->ID . ' ' . $user->user_firstname . ' ' . $user->user_lastname;

      while ($my_query->have_posts()) : $my_query->the_post(); ?>

        

		<li><?php the_post_thumbnail('thumbnail'); ?>

        <?php the_author_posts_link() ?> 

        </li>

       

		<?php

      endwhile;

    }

  }

}

?> </ul>   

                            

                        </section> <!-- end article section -->

					

					</article> <!-- end article -->

					

					

					

					<?php endwhile; ?>		

					

					<?php else : ?>

					

					<?php endif; ?>

 

                        

				</div> <!-- end #main -->

    

				<div id="parceiros"></div>

    

			</div> <!-- end #content -->

            <div id="content-bt"></div>



<?php get_footer(); ?>