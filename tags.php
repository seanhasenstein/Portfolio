<?php
/*
Template Name: Tags
*/
?>

<?php
	/* Process
	================================================= */
	$list = '';
	$tags = get_terms( 'post_tag' );
	$groups = array();
	if( $tags && is_array( $tags ) ) {
		foreach( $tags as $tag ) {
			$first_letter = strtoupper( $tag->name[0] );
			$groups[ $first_letter ][] = $tag;
		}
		if( !empty( $groups ) ) {
			foreach( $groups as $letter => $tags ) {
				$list .= "\n\t" . '<div class="tag-letter row"><h4>' . apply_filters( 'the_title', $letter ) . '</h4>';
				$list .= "\n\t" . '<ul>';
				foreach( $tags as $tag ) {
					$url = attribute_escape( get_tag_link( $tag->term_id ) );
					$count = intval( $tag->count );
					$name = apply_filters( 'the_title', $tag->name );
					$list .= "\n\t\t" . '<a href="' . $url . '"><li>' . $name . '<span class="count"> (' . $count . ')</span></li></a>';
					}
				$list .= "\n\t" . '</li></ul></div>';
			}
		}
	}else $list .= "\n\t" . '<p>Sorry, but no tags were found</p>'; ?>

	<?php get_header(); ?>

		<div class="container tags-page">
			<div class="row">
				<div class="col-sm-12">
					<img class="profile" src="<?php bloginfo('template_directory'); ?>/images/sean.jpg" alt="Sean Hasenstein">
					<h3 class="tag-header"><a href="http://localhost/wp_portfolio"><span>Sean Hasenstein</a>&nbsp;&nbsp;/&nbsp;&nbsp;Tags</span></h3>
					<?php print $list; ?>
				</div>
			</div>
		</div>
	<?php get_footer(); ?>













