<!-- <?php if (!empty($_SERVER['SCRIPT_FILENAME']) and 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) die ('Please do not load this page directly. Thanks!'); ?>
<?php if (post_password_required()): ?>
	This post is password protected. Enter the password to view comments.
<?php endif; ?> -->


<?php if ( comments_open() ): ?>
	<div class="comment-form-container" id="comment-form-container">
		<!-- <h2 id="comment-form-title"><?php comment_form_title( 'Leave a Reply', 'Leave a Reply to %s' ); ?></h2> -->
		<!-- <div class="cancel-comment_reply">
			<?php cancel_comment_reply_link() ?>
		</div> -->
		<?php if (get_option('comment_registration') and !is_user_logged_in()): ?>
			<p>You must be <a href="<?= wp_login_url(get_permalink()) ?>">logged in</a> to post a comment.</p>
		<?php else: ?>
		<form action="<?= get_option('siteurl') ?>/wp-comments-post.php" method="post" class="comment-form">
			<?php if (is_user_logged_in()): ?>
				<!-- <p>Estas <a href="<?= get_option('siteurl') ?>/wp-admin/profile.php"><?= $user_identity ?></a>. <a href="<?= wp_logout_url(get_permalink()) ?>" title="Log out of this account">Log out &raquo;</a></p> -->
			<?php else : ?>
				<div class="input-wrap text<?= ($req) ? ' required' : ''?>">
					<input type="text" name="author" id="input-author" placeholder="Autor" value="<?= esc_attr($comment_author) ?>"<?= ($req) ? ' aria-required="true"' : '' ?> />
				</div>
				<div class="input-wrap text<?= ($req) ? ' required' : ''?>">
					<input type="text" name="email" id="input-email" placeholder="E-mail" value="<?= esc_attr($comment_author_email) ?>"<?= ($req) ? ' aria-required="true"' : '' ?> />
				</div>
			<?php endif; ?>
			<div class="input-wrap textarea<?= ($req) ? ' required' : ''?>">
				<textarea name="comment" placeholder="Deja un comentario" id="input-comment"></textarea>
			</div>
			<div class="input-wrap submit">
				<input class="button" type="submit" value="enviar" />
				<?php comment_id_fields() ?>
			</div>
			<?php do_action('comment_form', $post->ID) ?>
		</form>
		<?php endif; ?>
	</div>
<?php endif; ?>

<?php if (have_comments()): ?>
  <div class="comments-list">
  	<ul class="comments-list__wrapper" id="comment-list">
  		<?php wp_list_comments('type=comment&callback=format_comment'); ?>
  	</ul>
    <div class="comments-feed">
      <?php post_comments_feed_link('Feed de comentarios'); ?>
    </div>
  	<div class="comments-navigation">
  		<div class="next-posts"><?php previous_comments_link() ?></div>
  		<div class="prev-posts"><?php next_comments_link() ?></div>
  	</div>
  </div>
<?php endif; ?>
