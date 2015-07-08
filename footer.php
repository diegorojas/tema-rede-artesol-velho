			<footer role="contentinfo">
			
				<div id="inner-footer" class="clearfix">		
			
					<p class="attribution"><?php bloginfo('name'); ?> - Alguns direitos reservados - 2015 - Desenvolvido com <a href="http://wordpress.org/" title="WordPress">WordPress</a><br /><br />
					Rua Pamplona, 1005 - 4° andar - Jardim Paulista - CEP 01405-001 - Tel.: 11 3082-8681 - Fax: 11 3082-8460 - rede@artesol.org.br</p>
				
				</div> <!-- end #inner-footer -->
				
			</footer> <!-- end footer -->
		
	
		<!-- scripts are now optimized via Modernizr.load -->	
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/scripts.js"></script>
		
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>

	</body>

</html>