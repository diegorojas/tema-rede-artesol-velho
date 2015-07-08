<?php
/*
The comments page for Bones
*/

// Do not delete these lines
  if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
    die ('Please do not load this page directly. Thanks!');

  if ( post_password_required() ) { ?>
  	<div class="help">
    	<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
  	</div>
  <?php
    return;
  }
?>

<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>
	
	<h3 id="comments" class="h2"><?php comments_number('Nenhum coment&aacute;rio', 'Um coment&aacute;rio', '% coment&aacute;rios' );?> - deixe o seu!</h3>

	<nav id="comment-nav">
		<ul class="clearfix">
	  		<li><?php previous_comments_link() ?></li>
	  		<li><?php next_comments_link() ?></li>
	 	</ul>
	</nav>
	
	<ol class="commentlist">
		<?php wp_list_comments('type=comment&callback=bones_comments'); ?>
	</ol>
	
	<nav id="comment-nav">
		<ul class="clearfix">
	  		<li><?php previous_comments_link() ?></li>
	  		<li><?php next_comments_link() ?></li>
		</ul>
	</nav>
  
	<?php else : // this is displayed if there are no comments so far ?>

	<?php if ( comments_open() ) : ?>
    	<!-- If comments are open, but there are no comments. -->

	<?php else : // comments are closed ?>
	<!-- If comments are closed. -->
	<p class="nocomments">Comments are closed.</p>

	<?php endif; ?>

<?php endif; ?>


<?php if ( comments_open() ) : ?>

<section id="respond" class="respond-form">

	<div id="cancel-comment-reply">
		<p class="small"><?php cancel_comment_reply_link(); ?></p>
	</div>

	<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
  	<div class="help">
  		<p>Você tem que ter feito <a href="<?php echo wp_login_url( get_permalink() ); ?>">o login</a> para postar um comentário.</p>
  	</div>
	<?php else : ?>

	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

	<?php if ( is_user_logged_in() ) : ?>

	<p class="comments-logged-in-as">Voc&ecirc; est&aacute; postando no nome da comunidade:  <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>.</p>

	<?php else : ?>
	
	<ul id="comment-form-elements" class="clearfix">
		
		<li>
		  <label for="author">Name <?php if ($req) echo "(required)"; ?></label>
		  <input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" placeholder="Your Name" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
		</li>
		
		<li>
		  <label for="email">Mail <?php if ($req) echo "(required)"; ?></label>
		  <input type="email" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" placeholder="Your Email" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
		  <small>(will not be published)</small>
		</li>
		
		<li>
		  <label for="url">Website</label>
		  <input type="url" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" placeholder="Your Website" tabindex="3" />
		</li>
		
	</ul>

	<?php endif; ?>
	
	<p><textarea name="comment" id="comment" placeholder="Escreva aqui seu comentário..." tabindex="4"></textarea></p>
	
	<p>
	  <input name="submit" type="submit" id="submit" tabindex="5" value="Enviar comentário para conversa" />
	  <?php comment_id_fields(); ?>
	</p>
	<!--
	<div class="help">
		<p id="allowed_tags" class="small"><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></p>
	</div>
	-->
	<?php do_action('comment_form', $post->ID); ?>
	
	</form>
	
	<?php endif; // If registration required and not logged in ?>
</section>

<?php endif; // if you delete this the sky will fall on your head ?>
