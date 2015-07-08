				<div id="sidebar1" class="sidebar right col300 last clearfix" role="complementary">
				

					<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

						

<div class="logos">
  <a href="http://artesol.org.br" class="logo-link-artesol" target="_blank" style="display:block;float: right;width: 60px;height: 68px;margin-top: 26px;"></a>
  <a href="http://www.wfto.com/" class="logo-link-artesol" target="_blank" style="display: block;  float: right;  width: 80px;  height: 68px;  margin-top: 26px;"></a>
</div>
						<?php // get_search_form(); ?>

						<style>
							ul#redes-sociais {overflow: auto; list-style: none; margin: 10px 0; padding: 0; margin-left: 25px;}
							ul#redes-sociais li {float: left; width:34px; height: 41px; margin-right: 5px;}
							ul#redes-sociais li a {width: 45px; height: 40px; display: block; background:url(http://artesol.org.br/rede/wp-content/themes/artesol/img/redesocial.jpg) no-repeat 0 0;}
							ul#redes-sociais li.facebook a {background-position: -40px 0;}
							ul#redes-sociais li.twitter a {background-position: 0px 0;}
							ul#redes-sociais li.instagram a {background-position: -82px 0;}
							ul#redes-sociais li.youtube a {background-position: -122px 0;}
						</style>

						<ul id="redes-sociais">
							<li class="facebook"><a target="_blank" href="http://www.facebook.com/ArtesanatoSolidario.Artesol"></a></li>
							<li class="twitter"><a target="_blank" href="https://twitter.com/ArteSol"></a></li>
							<li class="instagram"><a target="_blank" href="http://instagram.com/artesanatosolidario"></a></li>
							<li class="youtube"><a target="_blank" href="http://www.youtube.com/user/ArtesanatoSolidario"></a></li>
						</ul>

						<?php dynamic_sidebar( 'sidebar1' ); ?>
						
                    <?php else : ?>
						<div class="help">
						
							<p>Please activate some Widgets.</p>
						
						</div>

					<?php endif; ?>

				</div>