<?php
/*
Plugin Name: WP Simple Event Listing
Plugin URI:  https://github.com/qriouslad/wp-simple-event-listing
Description: Simple event listing plugin for WordPress
Version:     1.0
Author:      Bowo
Author URI:  https://bowo.io
Text Domain: wpsel
Domain Path: /languages
License:     GPL2
 
WP Simple Event Listing is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
WP Simple Event Listing is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with {Plugin Name}. If not, see {License URI}.
*/

/**
 * Event Showcase
 *
 * Creates an 'event' content type to showcase upcoming events and information.
 */

class event_showcase {

	// variables;
	private $directory = '';
	private $singular_name = 'event';
	private $plural_name = 'events';
	private $content_type_name = 'event_showcase';

	// magic function, called on object instantiation
	public function __construct() {

		$this->set_directory_value(); // set the directory url on creation

		add_action( 'init', array( $this, 'add_content_type') ); //add content type

		add_action( 'init', array( $this, 'check_flush_rewrite_rules' ) ); // flush re-qrite rules for permalinks

		add_action( 'add_meta_boxes', array( $this, 'add_meta_boxes_for_content_type' ) ); // add meta boxes

		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_public_scripts_and_styles' ) ); // enqueue public scripts and styles

		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_admin_scripts_and_styles' ) ); // enqueue admin scripts and styles

		add_action( 'save_post', $this->content_type_name, array( $this, 'save_custom_content_type' )  ); // handle saving of content type meta info

		add_action( 'display_content_type_meta' , array( $this, 'display_additional_meta_data') ); // displays the saved content type meta info

	}

	// sets the directory (path) so that we can use this for enqueuing
	public function set_directory_value() {

		$this->directory = plugin_dir_path( __FILE__ );

	}

	// check if we need to flush rewrite rules
	public function check_flush_rewrite_rules() {

	}

	// enqueue public scripts and styles
	public function enqueue_public_scripts_and_styles() {

	}

	// enqueue admin scripts and styles
	public function enqueue_admin_scripts_and_styles() {

	}

	// add new content type
	public function add_content_type() {

	}

	// add meta box to save additional meta data for the content type
	public function add_meta_boxes_for_content_type() {

	}

	// display the visual output of the meta box in admin (where we will save our meta data)
	public function display_function_for_content_type_meta_box($post) {

	}

	// when saving the custom content type, also save additional meta data
	public function save_custom_content_type($post_id) {

	}

	// @hooked using 'display_additional_meta_data' in theme
	public function display_additional_meta_data() {

	}

}

// Create new object
$event_showcase = new event_showcase;