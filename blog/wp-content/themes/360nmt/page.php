<?php
/**
 * @package WordPress
 * @subpackage 360NMT_Theme
 */

get_header(); ?>

<tr>
					<td style="padding-left:125px; padding-right:125px; padding-top:20px" background="../images/total_shadow.png">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
		<h2><?php the_title(); ?></h2>
			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			</div>
		</div>
		<?php endwhile; endif; ?>
	<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

	</div>
					</td>
				</tr>
				<tr>
					<td><img src="../images/home_bkg_lg.png" alt="" width="800" height="215" border="0" /></td>
				</tr>

<?php get_sidebar(); ?>

<?php get_footer(); ?>