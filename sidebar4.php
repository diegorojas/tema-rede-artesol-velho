				<div id="sidebar1" class="sidebar right col300 last clearfix" role="complementary">
				

					<?php if ( is_active_sidebar( 'sidebar4' ) ) : ?>

						<?php get_search_form(); ?>
						<?php dynamic_sidebar( 'sidebar4' ); ?>
                        
                    <?php else : ?>
						<div class="help">
						
							<p>Please activate some Widgets.</p>
						
						</div>

					<?php endif; ?>

				</div>