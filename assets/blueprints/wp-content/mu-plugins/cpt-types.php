<?php
/**
 * Register Custom Post Type
 *
 * @package blueprint
 */

add_action(
	'init',
	function () {
		register_post_type(
			'stories',
			array(
				'labels'           => array(
					'name'                     => 'Stories',
					'singular_name'            => 'Story',
					'menu_name'                => 'Stories',
					'all_items'                => 'All Stories',
					'edit_item'                => 'Edit Story',
					'view_item'                => 'View Story',
					'view_items'               => 'View Stories',
					'add_new_item'             => 'Add Story',
					'add_new'                  => 'Add Story',
					'new_item'                 => 'New Story',
					'parent_item_colon'        => 'Parent Story:',
					'search_items'             => 'Search Stories',
					'not_found'                => 'No stories found',
					'not_found_in_trash'       => 'No stories found in Trash',
					'archives'                 => 'Story Archives',
					'attributes'               => 'Story Attributes',
					'insert_into_item'         => 'Insert into story',
					'uploaded_to_this_item'    => 'Uploaded to this story',
					'filter_items_list'        => 'Filter stories list',
					'filter_by_date'           => 'Filter stories by date',
					'items_list_navigation'    => 'Stories list navigation',
					'items_list'               => 'Stories list',
					'item_published'           => 'Story published.',
					'item_published_privately' => 'Story published privately.',
					'item_reverted_to_draft'   => 'Story reverted to draft.',
					'item_scheduled'           => 'Story scheduled.',
					'item_updated'             => 'Story updated.',
					'item_link'                => 'Story Link',
					'item_link_description'    => 'A link to a story.',
				),
				'public'           => true,
				'show_in_rest'     => true,
				'menu_icon'        => 'dashicons-admin-post',
				'supports'         => array(
					0 => 'title',
					1 => 'editor',
					2 => 'thumbnail',
					3 => 'custom-fields',
				),
				'delete_with_user' => false,
			)
		);
	}
);
