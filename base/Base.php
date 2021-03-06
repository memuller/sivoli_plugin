<?php
	namespace ClinicaSavioli ;
	use BasePlugin, SplFileObject ;

	class Plugin extends BasePlugin {

		static $db_version = '' ;
		static $custom_posts = array('Banner');
		static $custom_taxonomies = array();
		static $custom_post_formats = array();
		static $custom_classes = array('ForeignPost', 'MagentoProduct');
		static $custom_users = array();
		static $presenters = array();
		static $has_translations = false ;

		static $absent_roles = array();
		static $restricted_menus = array('Posts', 'Comments');
		static $restrict_for_everyone = true;

		static $migrations = array(

		);

		static $query_vars = array(
		);
		static $rewrite_rules = array(
		);

		static function build(){
			parent::build();
			add_filter( 'got_rewrite', '__return_true', 999 );
			
			add_action('admin_init', function(){
				register_setting('clinica-savioli_options', 'clinica-savioli_options');
			});
		}

	}

 ?>