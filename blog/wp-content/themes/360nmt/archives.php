<?php
/**
 * @package WordPress
 * @subpackage 360NMT_Theme
 */
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

<tr>
					<td style="padding-left:125px; padding-right:50px; padding-top:20px" background="../images/total_shadow.png">
			<table width="625" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td width="475">
					
				

<?php get_search_form(); ?>

<h2>Archives by Month:</h2>
	<ul>
		<?php wp_get_archives('type=monthly'); ?>
	</ul>

<h2>Archives by Subject:</h2>
	<ul>
		 <?php wp_list_categories(); ?>
	</ul>


				
					</td>
					<td valign="top" width="150">
					
					<?php get_sidebar(); ?>
					
					</td>
				</tr>
			</table>
			

	
					</td>
				</tr>
				<tr>
					<td><img src="../images/home_bkg_lg.png" alt="" width="800" height="215" border="0" /></td>
				</tr>



<?php get_footer(); ?>
