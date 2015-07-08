				<div id="sidebar2" class="sidebar right col300 last clearfix" role="complementary">
				

					<?php if ( is_active_sidebar( 'sidebar2' ) ) : ?>

						<?php // get_search_form(); ?>
						
                            <!--<li class="page_item page-item-28"><a href="http://127.0.0.1/artesol/?page_id=28">Artesanato brasileiro</a></li>-->
                           <?php
						  if($post->post_parent)
						  $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
						  else
						  $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
						  if ($children) { ?>
                          <div id="widget_pages" class="widget widget_pages"><h4 class="widgettitle">Páginas</h4>		
						  <ul>
						  <?php echo $children; ?>
						  </ul></div>
						  <?php } ?>
                        
                        <style>
                        	.logos2 {position: relative}
							a.wfto {display: block; width: 62px; height: 65px; position: absolute; top: 29px; left: 13px;}
                        </style>
                        
                       	<div class="logos2">
                       		<a href="http://www.wfto.com/" target="_blank" class="wfto"></a>
                       	</div>
                        
                    <?php else : ?>
						<div class="help">
						
							<p>Please activate some Widgets.</p>
						
						</div>

					<?php endif; ?>

				</div>