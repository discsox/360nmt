<?php
/**
 * @package WordPress
 * @subpackage 360NMT_Theme
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<style type="text/css" media="screen">

<?php
// Checks to see whether it needs a sidebar or not
if ( !empty($withcomments) && !is_single() ) {
?>
	#page { background: url("<?php bloginfo('stylesheet_directory'); ?>/images/kubrickbg-<?php bloginfo('text_direction'); ?>.jpg") repeat-y top; border: none; }
<?php } else { // No sidebar ?>
	#page { background: url("<?php bloginfo('stylesheet_directory'); ?>/images/kubrickbgwide.jpg") repeat-y top; border: none; }
<?php } ?>

</style>
		<csscriptdict import="import">
			<script type="text/javascript" src="GeneratedItems/CSScriptLib.js"></script>
		</csscriptdict>
		<csactiondict>
			<script type="text/javascript"><!--
var preloadFlag = false;
function preloadImages() {
	if (document.images) {
		pre_nav_01_over = newImage('../images/nav_01-over.gif');
		pre_nav_02_over = newImage('../images/nav_02-over.gif');
		pre_nav_03_over = newImage('../images/nav_03-over.gif');
		pre_nav_04_over = newImage('../images/nav_04-over.gif');
		pre_nav_05_over = newImage('../images/nav_05-over.gif');
		preloadFlag = true;
	}
}

// --></script>
		</csactiondict>

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head(); ?>
</head>
<body onload="preloadImages();" marginheight="50" topmargin="50">
		<div align="center">
												<?php include("includes/header.html") ?>
			<table width="800" border="0" cellspacing="0" cellpadding="0">

				<tr height="163">
					<td align="center" height="163" background="../images/total_shadow.png">
						<table width="780" border="0" cellspacing="0" cellpadding="0">
							<tr height="123">
								<td valign="middle" width="276" height="123" background="../images/center_bkg.jpg" style="padding:18px">
									<div align="right">
										<span class="pgname">NMT Community</span><br />
										<br />
										<a href="http://www.360nmt.com/recommended-providers.php" class="white">&gt;&gt; Recommended Providers</a><br />
										<a href="http://www.360nmt.com/blog/" class="white">&gt;&gt; Our Blog</a></div>
								</td>
								<td align="right" valign="top" width="504" height="123" background="../images/center_bkg.jpg"><img src="../images/Community.jpg" alt="" width="504" height="163" border="0" /></td>
							</tr>
						</table>
					</td>
				</tr>