				<div id="sidebar3" class="sidebar right col300 last clearfix" role="complementary">
				

					<?php if ( is_active_sidebar( 'sidebar3' ) ) : ?>

						<?php get_search_form(); ?>
						<?php dynamic_sidebar( 'sidebar3' ); ?>
                        
                    <?php else : ?>
						<div class="help">
						
							<p>Please activate some Widgets.</p>
						
						</div>

					<?php endif; ?>

				</div>