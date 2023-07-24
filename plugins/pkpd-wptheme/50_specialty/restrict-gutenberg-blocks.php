<?php
/**
 * Restrict Gutenberg Blocks to only allowed block types
 * 
 * Use with caution since this will only show the allowed
 * block types and all others will be blocked. 
 * 
 * @package         pkpd-wptheme\restrict-gutenberg-blocks
 * @author          Adam S. Lowe <adam@peakperformancedigital.com>
 * @copyright       2023 Peak Performance Digital 
 * @license         GPL-2.0-or-later
 * @version         0.1.0
 * @since           0.1.0 Added 2022-11-10
 * 
 */


function pkpd_allowed_block_types ( $block_editor_context, $editor_context ) {
	if ( ! empty( $editor_context->post ) ) {
		return array(
                  // https://developer.wordpress.org/block-editor/reference-guides/core-blocks/
                  //
                  //Text 
                  //
                  //'core/code',
                  'core/column',
                  'core/freeform', //classic editor
                  'core/heading',
                  'core/list',
                  'core/list-item',
                  'core/missing',
                  'core/paragraph',
                  'core/preformatted',
                  'core/pullquote',
                  'core/quote',
                  'core/table',
                  //'core/verse',
                  //
                  //Media
                  //
                  //'core/audio',
                  //'core/cover',
                  //'core/file',
                  'core/gallery',
                  'core/image',
                  'core/media-text',
                  'core/video',
                  //
                  //Design 
                  //
                  'core/button',
                  'core/buttons',
                  'core/columns',
                  //'core/comment-template',
                  'core/group',
                  //'core/home-link',
                  //'core/more',
                  //'core/navigation-link',
                  //'core/navigation-submenu',
                  //'core/nextpage',
                  'core/separator',
                  'core/spacer',
                  //
                  //Widgets
                  //
                  //'core/archives',
                  //'core/calendar',
                  //'core/categories',
                  'core/html',
                  //'core/latest-comments',
                  //'core/latest-posts',
                  //'core/page-list',
                  //'core/page-list-item',
                  //'core/rss',
                  'core/search',
                  'core/shortcode',
                  'core/social-link',
                  'core/social-links',
                  //'core/tag-cloud',
                  //
                  //Theme 
                  //
                  //'core/avatar',
                  //'core/comment-author-name',
                  //'core/comment-content',
                  //'core/comment-date',
                  //'core/comment-edit-link',
                  //'core/comment-reply-link',
                  //'core/comments',
                  //'core/comments-pagination',
                  //'core/comments-pagination-next',
                  //'core/comments-pagination-numbers',
                  //'core/comments-pagination-previous',
                  //'core/comments-title',
                  //'core/loginout',
                  //'core/navigation',
                  //'core/pattern',
                  //'core/post-author',
                  //'core/post-author-biography',
                  //'core/post-author-name',
                  //'core/post-comments-count',
                  //'core/post-comments-form',
                  //'core/post-comments-link',
                  //'core/post-content',
                  //'core/post-date',
                  //'core/post-excerpt',
                  //'core/post-featured-image',
                  //'core/post-navigation-link',
                  //'core/post-template',
                  //'core/post-terms',
                  //'core/post-title',
                  //'core/query',
                  //'core/query-no-results',
                  //'core/query-pagination',
                  //'core/query-pagination-next',
                  //'core/query-pagination-numbers',
                  //'core/query-pagination-previous',
                  //'core/query-title',
                  //'core/read-more',
                  //'core/site-logo',
                  //'core/site-tagline',
                  //'core/site-title',
                  //'core/template-part',
                  //'core/term-description',
                  //
                  //Embed
                  //
                  'core/embed',
                  //'core-embed/twitter',
                  //'core-embed/youtube',
                  //'core-embed/facebook',
                  //'core-embed/wordpress',
                  //'core-embed/soundcloud',
                  //'core-embed/spotify',
                  //'core-embed/instagram',
                  //'core-embed/flickr',
                  //'core-embed/vimeo',
                  //'core-embed/animoto',
                  //'core-embed/cloudup',
                  //'core-embed/collegehumor',
                  //'core-embed/dailymotion',
                  //'core-embed/funnyordie',
                  //'core-embed/hulu',
                  //'core-embed/imgur',
                  //'core-embed/issuu',
                  //'core-embed/kickstarter',
                  //'core-embed/meetup-com',
                  //'core-embed/mixcloud',
                  //'core-embed/photobucket',
                  //'core-embed/polldaddy',
                  //'core-embed/reddit',
                  //'core-embed/reverbnation',
                  //'core-embed/screencast',
                  //'core-embed/scribd',
                  //'core-embed/slideshare',
                  //'core-embed/smugmug',
                  //'core-embed/speaker',
                  //'core-embed/ted',
                  //'core-embed/tumblr',
                  //'core-embed/videopress',
                  //'core-embed/wordpress-tv',
                  //
                  //Reusable 
                  //
                  'core/block',
                  //
                  //Layout
                  //
                  'core/table-of-contents',
		);
	}

	return $block_editor_context;
}

add_filter( 'allowed_block_types_all', 'pkpd_allowed_block_types', 10, 2 );
