<?php
/**
 * @package WordPress
 * @subpackage 360NMT_Theme
 */

get_header(); ?>

<tr>
					<td style="padding-left:125px; padding-right:50px; padding-top:20px" background="../images/total_shadow.png">
			<table width="625" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td width="475">
					
				

	<?php if (have_posts()) : ?>

		<h2 class="pagetitle">Search Results</h2>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>


		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?>>
				<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
<small><?php the_time('F jS, Y') ?> by <?php the_author() ?></small>

				<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?>   <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">No posts found. Try a different search?</h2>
		<?php get_search_form(); ?>

	<?php endif; ?>


				
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