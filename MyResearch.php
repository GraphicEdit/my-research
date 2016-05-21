<?php

/*
  Plugin Name:  My Research
  Plugin URI: http://graphicedit.com
  Description:  allows people to have a Research library for their website
  Version: 1.0.1
  Author: graphicedit
  Author URI: http://graphicedit.com
  License: GPLv2 or later
 */
define('GraphicEdit', 'GraphicEdit-Research-Library');
//load_plugin_textdomain(GraphicEdit, false, basename(dirname(__FILE__)) . '/languages');

add_action('init', 'erd_research_post_types');

function erd_research_post_types() {
    register_post_type(
            'research', array(
        'label' => __('Research', GraphicEdit),
        'description' => '',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'research'),
        'query_var' => true,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            //'trackbacks',
            //'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            //'page-attributes',
        ),
        'has_archive' => true,
        'labels' => array(
            'name' => __('Research', GraphicEdit),
            'singular_name' => __('Research', GraphicEdit),
            'menu_name' => __('My Research', GraphicEdit),
            'add_new' => __('Add New', GraphicEdit),
            'add_new_item' => __('Add new Research', GraphicEdit),
            'edit' => __('Edit', GraphicEdit),
            'edit_item' => __('Edit Research', GraphicEdit),
            'new_item' => __('New Research', GraphicEdit),
            'view' => __('View', GraphicEdit),
            'view_item' => __('View Research', GraphicEdit),
            'search_items' => __('Research search', GraphicEdit),
            'not_found' => __('No Research found', GraphicEdit),
            'not_found_in_trash' => __('No Research found in trash', GraphicEdit),
            //'parent' => __('Parent Research', GraphicEdit),
        ),
                //'taxonomies'=>array('post_tags','category')
				));
    
}

?>