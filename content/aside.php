<article <?php hybrid_attr( 'post' ); ?>>

	<?php
		$css_class = ' zero-comments';
		$number    = (int) get_comments_number( get_the_ID() );
		
		if ( 1 === $number )
			$css_class = ' one-comment';
		elseif ( 1 < $number )
		$css_class = ' multiple-comments';
	?>

	<?php if ( is_singular( get_post_type() ) ) : // If viewing a single post. ?>

		<header class="entry-header">

			<h1 <?php hybrid_attr( 'entry-title' ); ?>><?php single_post_title(); ?></h1>

			<div class="entry-byline">
				<?php hybrid_post_format_link(); ?>
				<span <?php hybrid_attr( 'entry-author' ); ?>><?php the_author_posts_link(); ?></span>
				<time <?php hybrid_attr( 'entry-published' ); ?>><?php echo get_the_date(); ?></time>
				<?php if ( comments_open() && 0 < $number ) : '<span class="sep">' . _ex( ' | ', 'By Line separator', 'themelia' ) . '</span>'; endif ?>
				<?php comments_popup_link( ( '' ), '<span>' . number_format_i18n( 1 ) . '</span>' . __( ' Comment', 'themelia' ), '<span>%</span>' .  __( ' Comments', 'themelia' ), 'comments-link' . $css_class, '' ); ?>
				<?php edit_post_link(); ?>
			</div><!-- .entry-byline -->

		</header><!-- .entry-header -->

		<div <?php hybrid_attr( 'entry-content' ); ?>>
			<?php the_content(); ?>
			<?php wp_link_pages(); ?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php hybrid_post_terms( array( 'taxonomy' => 'category', 'sep' => '<span>,</span> ',  'text' => esc_html__( 'Posted in: %s', 'themelia' ) ) ); ?>
			<?php hybrid_post_terms( array( 'taxonomy' => 'post_tag', 'sep' => '<span>,</span> ', 'text' => esc_html__( 'Tagged: %s', 'themelia' ), 'before' => '<br />' ) ); ?>
		</footer><!-- .entry-footer -->
		
		<?php get_template_part( 'misc/author-box' ); ?>

	<?php else : // If not viewing a single post. ?>

		<div <?php hybrid_attr( 'entry-content' ); ?>>
			<?php the_content(); ?>
		</div><!-- .entry-content -->

	<?php endif; // End single post check. ?>

</article><!-- .entry -->