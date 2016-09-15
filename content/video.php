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

			<div class="entry-byline">
				<?php hybrid_post_format_link(); ?>
				<span <?php hybrid_attr( 'entry-author' ); ?>><?php the_author_posts_link(); ?></span>
				<time <?php hybrid_attr( 'entry-published' ); ?>><?php echo get_the_date(); ?></time>
				<?php if ( comments_open() && 0 < $number ) : '<span class="sep">' . _ex( ' | ', 'By Line separator', 'themelia' ) . '</span>'; endif ?>
				<?php comments_popup_link( ( '' ), '<span>' . number_format_i18n( 1 ) . '</span>' . __( ' Comment', 'themelia' ), '<span>%</span>' .  __( ' Comments', 'themelia' ), 'comments-link' . $css_class, '' ); ?>
				<?php edit_post_link(); ?>
			</div><!-- .entry-byline -->

			<h1 <?php hybrid_attr( 'entry-title' ); ?>><?php single_post_title(); ?></h1>

		</header><!-- .entry-header -->
		
		<?php echo ( $video = hybrid_media_grabber( array( 'type' => 'video', 'split_media' => true ) ) ); ?>

		<div <?php hybrid_attr( 'entry-content' ); ?>>
			<?php the_content(); ?>
			<?php wp_link_pages(); ?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php hybrid_post_terms( array( 'taxonomy' => 'category', 'sep' => '<span>,</span> ',  'text' => esc_html__( 'Posted in: %s', 'themelia' ) ) ); ?>
			<?php hybrid_post_terms( array( 'taxonomy' => 'post_tag', 'sep' => '<span>,</span> ', 'text' => esc_html__( 'Tagged: %s', 'themelia' ), 'before' => '<br />' ) ); ?>
		</footer><!-- .entry-footer -->

	<?php else : // If not viewing a single post. ?>

		<header class="entry-header">

			<div class="entry-byline">
				<?php hybrid_post_format_link(); ?>
				<time <?php hybrid_attr( 'entry-published' ); ?>><?php echo get_the_date(); ?></time>
				<span class="post-by"><?php echo esc_html_x( 'by', 'post author', 'themelia' ) ?></span>
				<span <?php hybrid_attr( 'entry-author' ); ?>><?php the_author_posts_link(); ?></span>
				<?php if ( comments_open() && 0 < $number ) : '<span class="sep">' . _ex( ' | ', 'By Line separator', 'themelia' ) . '</span>'; endif ?>
				<?php comments_popup_link( ( '' ), '<span>' . number_format_i18n( 1 ) . '</span>' . __( ' Comment', 'themelia' ), '<span>%</span>' .  __( ' Comments', 'themelia' ), 'comments-link' . $css_class, '' ); ?>
				<?php edit_post_link(); ?>
			</div><!-- .entry-byline -->
			
			<?php the_title( '<h2 ' . hybrid_get_attr( 'entry-title' ) . '><a href="' . esc_url( get_permalink() ) . '" rel="bookmark" itemprop="url">', '</a></h2>' ); ?>

		</header><!-- .entry-header -->
		
		<?php echo ( $video = hybrid_media_grabber( array( 'type' => 'video', 'split_media' => true ) ) ); ?>

		<?php if ( has_excerpt() ) : // If the post has an excerpt. ?>

			<div <?php hybrid_attr( 'entry-summary' ); ?>>
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->

		<?php elseif ( ! $video ) : // Else, if the post does not have a video. ?>

			<div <?php hybrid_attr( 'entry-content' ); ?>>
				<?php the_content(); ?>
			</div><!-- .entry-content -->

		<?php endif; // End excerpt/video checks. ?>

	<?php endif; // End single post check. ?>

</article><!-- .entry -->