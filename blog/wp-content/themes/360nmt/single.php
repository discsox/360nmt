<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */




get_header();
?>




<tr>
					<td style="padding-left:125px; padding-right:50px; padding-top:20px" background="../images/total_shadow.png">
			<table width="625" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td width="475">
					
						




	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>




		<div class="navigation">
			<div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
			<div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
		</div>




		<div <?php post_class() ?> id="post-<?php the_ID(); ?>"></div>
<table width="100%" border="0" cellspacing="0" cellpadding="0" height="80">
<tr height="80">
<td align="left" valign="bottom" height="80"><h2><?php the_title(); ?></h2>
<small><?php the_time('F jS, Y') ?> by <?php the_author() ?></small>
</td>
<td align="right" valign="bottom" width="80" height="80"><?php //userphoto_the_author_thumbnail() ?>
</td>
</tr>
</table>			


			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>




				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>




				<p class="postmetadata alt">
					<small>
						This entry was posted
						<?php /* This is commented, because it requires a little adjusting sometimes.
							You'll need to download this plugin, and follow the instructions:
							http://binarybonsai.com/archives/2004/08/17/time-since-plugin/ */
							/* $entry_datetime = abs(strtotime($post->post_date) - (60*120)); echo time_since($entry_datetime); echo ' ago'; */ ?>
						on <?php the_time('l, F jS, Y') ?> at <?php the_time() ?>
						and is filed under <?php the_category(', ') ?>.
						You can follow any responses to this entry through the <?php post_comments_feed_link('RSS 2.0'); ?> feed.




						<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Both Comments and Pings are open ?>
							You can <a href="#respond">leave a response</a>, or <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> from your own site.




						<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Only Pings are Open ?>
							Responses are currently closed, but you can <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> from your own site.




						<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Comments are open, Pings are not ?>
							You can skip to the end and leave a response. Pinging is currently not allowed.




						<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Neither Comments, nor Pings are open ?>
							Both comments and pings are currently closed.




						<?php } edit_post_link('Edit this entry','','.'); ?>




					</small>
				</p>




			</div>
		</div>




	<?php comments_template(); ?>




	<?php endwhile; else: ?>




		<p>Sorry, no posts matched your criteria.</p>




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



