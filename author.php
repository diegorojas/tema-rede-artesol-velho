<?php get_header(); ?>

			

			<div id="content-hd"></div>

            <div id="content" class="clearfix">

            

            	<div id="sidebar2" class="sidebar right col300 last" role="complementary" style="margin-top:36px;">

                	<?php get_search_form(); ?>

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
				echo '<li id="uipul-'.$uipul.'" class="li-cat open-'.$tda_s.'">'.$tda_n.'';
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
				echo '<li id="uipull-'.$uipul.'" class="li-cat open-'.$tipologia_s.'">'.$tipologia_n.'';
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
		//console.log('pegou!')
		//event.preventDefault();
		var thisliid = $(this).attr('id');
		$(".tipode-artesao li#"+thisliid+".li-cat ul").slideToggle("fast");
		$(".tipode-artesao-users").not(".tipode-artesao > li#"+thisliid+".li-cat ul").slideUp("fast");return false;
	});

	$(".tipode-artesao li.li-cat li a").click(function(e){
		e.stopPropagation();
	});

	var hash = document.location.hash.substring(1);
	var url = document.URL;
	//alert(url)
	$('.li-cat').each(function(){
		if ($(this).attr('href') == url) {
			$(this).addClass('aberto');
		} else {
			console.log('num fez nada')
		};
	});
	//alert('open-'+hash)
	$('.open-'+hash).children('ul').slideDown('fast');
});//jQueryEnd
</script>
			<!-- vincode -->

                </div>

				<div id="main" class="col620 left first clearfix author-page" role="main">

				

					<h1 class="archive_title h2"><?php $curauth = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author')); echo get_author_name(get_query_var('author')); ?></h1>

                    

                    <article class="author-info">

                    	

                        

                    	

                        <h3>Tipologias da comunidade:</h3><p><?php get_the_author_meta($curauth->ID); echo $curauth->tipologias; ?> </p> 

                        <h3>Localização:</h3><p><?php get_the_author_meta($curauth->ID); echo $curauth->lugar; ?> </p> 

                        <h3>Telefones para contato:</h3> <p><?php get_the_author_meta($curauth->ID); echo $curauth->telefone; ?> </p>                     

                   

                        <p><?php the_author_meta($curauth->ID); echo $curauth->bigbiobox; ?></p>

                    </article>

                    	

					<section class="prod-com">

                        <h1>Artesanato da comunidade</h1>

                        

                        <div id="contato-author">

                        	<h1>Se interessou pelos produtos?</h1>

                            <p>Entre em contato com a comunidade para adqui-los diretamente com os produtores, incentivando, assim, o comércio justo! </p>

                        	<p><strong>Telefone:</strong><br /> <?php get_the_author_meta($curauth->ID); echo $curauth->telefone; ?> </p>

                            <div id="artesol-contact">

                            	<p></p>

                            </div>

                        </div>                    

                        

                        <div id="imgs-artesanato">

                        <!-- encontrei a resposta aqui http://themeshaper.com/forums/topic/authorphp-x-custom-post-types -->

                        <?php

						if(isset($_GET['author_name'])) :

							$curauth = get_user_by('slug', $author_name);

						else :

							$curauth = get_userdata(intval($author));

						endif;

						$authorID = $curauth->ID;

						$args=array(

						  'public'   => true,

						  'name' => 'produtos'

						); 

						$output = 'objects'; // names or objects

						$post_types = get_post_types($args,$output);

						foreach ($post_types as $post_type ) {

							$query= 'author=' . $authorID. '&post_type=' . 'produtos' . '&orderby=post_date&order=desc'; // concatenate the query

							query_posts($query); // run the query

							if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                            	<?php

								$thumbnail_id=get_the_post_thumbnail($post->ID, 'large');

								preg_match ('/src="(.*)" class/',$thumbnail_id,$link);

								?>

								<a href="<?php echo $link[1]; ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail( array(140,140), array('class' => 'img-hm') ); ?></a>

							<?php endwhile; else:

							endif;

						}

						//Reset Query

						wp_reset_query(); ?>

                        </div>

                        

                    </section>

			

				</div> <!-- end #main -->

    

                <div id="parceiros"></div>

    

			</div> <!-- end #content -->

			<div id="content-bt"></div>

<?php get_footer(); ?>