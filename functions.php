<?php
/*
Author: Eddie Machado
URL: htp://themble.com/bones/

This is where you can drop your custom functions or
just edit things like thumbnail sizes, header images, 
sidebars, comments, ect.
*/

// Get Bones Core Up & Running!
require_once('library/bones.php');            // core functions (don't remove)
require_once('library/plugins.php');          // plugins & extra functions (optional)
require_once('library/custom-post-type.php'); // custom post type example

// Admin Functions (commented out by default)
// require_once('library/admin.php');         // custom admin functions

/************* THUMBNAIL SIZE OPTIONS *************/

// Thumbnail sizes
add_image_size( 'bones-thumb-600', 600, 150, true );
add_image_size( 'bones-thumb-300', 300, 100, true );
/* 
to add more sizes, simply copy a line from above 
and change the dimensions & name. As long as you
upload a "featured image" as large as the biggest
set width or height, all the other sizes will be
auto-cropped.

To call a different size, simply change the text
inside the thumbnail function.

For example, to call the 300 x 300 sized image, 
we would use the function:
<?php the_post_thumbnail( 'bones-thumb-300' ); ?>
for the 600 x 100 image:
<?php the_post_thumbnail( 'bones-thumb-600' ); ?>

You can change the names and dimensions to whatever
you like. Enjoy!
*/

/************* ACTIVE SIDEBARS ********************/

// Sidebars & Widgetizes Areas
function bones_register_sidebars() {
    register_sidebar(array(
    	'id' => 'sidebar1',
    	'name' => 'Sidebar 1',
    	'description' => 'The first (primary) sidebar.',
    	'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget' => '</div>',
    	'before_title' => '<h4 class="widgettitle">',
    	'after_title' => '</h4>',
    ));
	
	register_sidebar(array(
    	'id' => 'sidebar2',
    	'name' => 'Sidebar 2',
    	'description' => 'The second (secondary) sidebar.',
    	'before_widget' => '<div id="%2$s" class="widget %2$s">',
    	'after_widget' => '</div>',
    	'before_title' => '<h4 class="widgettitle">',
    	'after_title' => '</h4>',
    ));
    
    /* 
    to add more sidebars or widgetized areas, just copy
    and edit the above sidebar code. In order to call 
    your new sidebar just use the following code:
    
    Just change the name to whatever your new
    sidebar's id is, for example:
    
    register_sidebar(array(
    	'id' => 'sidebar2',
    	'name' => 'Sidebar 2',
    	'description' => 'The second (secondary) sidebar.',
    	'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget' => '</div>',
    	'before_title' => '<h4 class="widgettitle">',
    	'after_title' => '</h4>',
    ));
    
    To call the sidebar in your template, you can just copy
    the sidebar.php file and rename it to your sidebar's name.
    So using the above example, it would be:
    sidebar-sidebar2.php
    
    */
} // don't remove this bracket!

/************* COMMENT LAYOUT *********************/
		
// Comment Layout
function bones_comments($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?>>
		<article id="comment-<?php comment_ID(); ?>" class="clearfix">
        	<?php userphoto_comment_author_thumbnail(); ?>
			<header class="comment-author vcard">
				<?php printf(__('<cite class="fn">%s</cite>'), get_comment_author_link()) ?>
				<time datetime="<?php echo comment_time('Y-m-j'); ?>"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php comment_time('m F Y'); ?> </a></time>
			</header>
			<?php if ($comment->comment_approved == '0') : ?>
       			<div class="help">
          			<p><?php _e('Seu comentário está aguardando pela aprovação do mediador da Rede.') ?></p>
          		</div>
			<?php endif; ?>
			<section class="comment_content clearfix">
				<?php comment_text() ?>
			</section>
			<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
		</article>
    <!-- </li> is added by wordpress automatically -->
<?php
} // don't remove this bracket!

/************* SEARCH FORM LAYOUT *****************/

// Search Form
function bones_wpsearch($form) {
    $form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
    <label class="screen-reader-text" for="s">' . __('Busca') . '</label>
    <input type="text" value="' . get_search_query() . '" name="s" id="s" />
    <input type="submit" id="searchsubmit" value=">" />
    </form>';
    return $form;
} // don't remove this bracket!


?>

<?php 
add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
}
?>
<?php
// Add extra contact info to user profile page
function extra_contact_info($contactmethods) {
    unset($contactmethods['row']);
	unset($contactmethods['aim']);
    unset($contactmethods['yim']);
    unset($contactmethods['jabber']);
	unset($contactmethods['user_fb']);
	unset($contactmethods['user_tw']);
	unset($contactmethods['google_profile']);
   	$contactmethods['tipologias'] = 'Tipologias';
	$contactmethods['lugar'] = 'Cidade/Estado';
	$contactmethods['telefone'] = 'Telefone';

    return $contactmethods;
}
add_filter('user_contactmethods', 'extra_contact_info');
?>

<?php //remove_meta_box( 'authordiv', 'produtos', 'normal' ); ?>
<?php //remove_meta_box( 'commentstatusdiv', 'produtos', 'normal' ); ?>
<?php //remove_meta_box( 'commentsdiv', 'produtos', 'normal' ); ?>
<?php //remove_meta_box( 'slugdiv', 'produtos', 'normal' ); ?>
<?php //remove_meta_box( 'revisionsdiv', 'produtos', 'normal' ); ?>
<?php //remove_meta_box( 'authordiv', 'produtos', 'normal' ); ?>
<?php //remove_meta_box( 'postcustom', 'produtos', 'normal' ); ?>
<?php //remove_meta_box( 'postexcerpt', 'produtos', 'normal' ); ?>
<?php //remove_meta_box( 'trackbacksdiv', 'produtos', 'normal' ); ?>
<?php //remove_meta_box( 'postimagediv', 'produtos', 'normal' ); ?>
<?php //remove_meta_box( 'formatdiv', 'produtos', 'normal' ); ?>
<?php //remove_meta_box( 'tagsdiv-post_tag', 'produtos', 'normal' ); ?>
<?php //remove_meta_box( 'categorydiv', 'produtos', 'normal' ); ?>
<?php //remove_meta_box( 'pageparentdiv', 'produtos', 'normal' ); ?>

<?php
function admin_del_options() {
   global $_wp_admin_css_colors;
   $_wp_admin_css_colors = 0;
}
add_action('admin_head', 'admin_del_options');
?>

<?php
	// Callback function to remove default bio field from user profile page
	function remove_plain_bio($buffer) {
		$titles = array('#<h3>Sobre você</h3>#','#<h3>Sobre o usuário</h3>#');
		$buffer=preg_replace($titles,'<h3>Password</h3>',$buffer,1);
		$biotable='#<h3>Password</h3>.+?<table.+?/tr>#s';
		$buffer=preg_replace($biotable,'<h3>Senha</h3> <table class="form-table">',$buffer,1);
		return $buffer;
	}

	function profile_admin_buffer_start() { ob_start("remove_plain_bio"); }

	function profile_admin_buffer_end() { ob_end_flush(); }

	add_action('admin_head', 'profile_admin_buffer_start');
	add_action('admin_footer', 'profile_admin_buffer_end');
?>

<?php
add_action('admin_menu','wphidenag');
function wphidenag() {
remove_action( 'admin_notices', 'update_nag', 3 );
}
?>