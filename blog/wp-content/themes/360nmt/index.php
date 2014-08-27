<?php
/**
 * @package WordPress
 * @subpackage 360NMT_Theme
 */

get_header(); ?>
	

	<tr>
		<td style="padding-left:50px; padding-right:100px; padding-top:20px" background="../images/total_shadow.png">
			<p><span class="name">Welcome to 360 NMT's Blog</span></p>
			<p>Here at 360 NMT, we are self-proclaimed “muscle geeks.” Nothing gets us more excited than finding a clue or trigger point that solves a pain pattern. This blog is dedicated to capturing those “ah-ha” moments and communicating clinical thoughts, findings, ideas and techniques from our treatment rooms.</p>
			
		</td>
	</tr>
	<tr>
					<td style="padding-left:50px; padding-right:50px; padding-top:20px" background="../images/total_shadow.png">
			<table width="625" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td width="475">
					
					<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>"></div>	

<table width="100%" border="0" cellspacing="0" cellpadding="0" height="80">
<tr height="80">
<td align="left" valign="bottom" height="80">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<small><?php the_time('F jS, Y') ?> by <?php the_author() ?></small>
</td>
</tr>
</table>

				<div class="entry">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div>

				<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> |   <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>

	<?php endif; ?>
					</div>
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
