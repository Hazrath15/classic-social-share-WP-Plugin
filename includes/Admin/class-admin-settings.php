<?php
if( !class_exists( 'CSSH_Admin' ) ) {
    class CSSH_Admin_Settings {
        private $settings_api;
        public function __construct() {
            $this->settings_api = new CSSH_Settings_Structure();
		    add_action( 'admin_init', array( $this, 'register_settings' ) );
            add_action( 'admin_menu', [ $this, 'admin_menu' ] );
            // add_action( 'admin_init', [ 'CSSH_Admin', 'register_settings' ] );
        }

        function admin_menu() {

            if ( current_user_can( 'activate_plugins' ) ) {
                add_menu_page( 
                    'Classic Social Share ', 
                    'Social share ', 
                    'activate_plugins', 
                    'classic-social-share', 
                    [$this, 'plugin_page' ], 
                    'dashicons-share-alt',
                    30 
                );
    
                add_submenu_page( 
                    'classic-social-share', 
                    'Settings', 
                    'Settings', 
                    'manage_options', 
                    'classic-social-share' 
                );
                // do_action( 'ssb_add_pro_submenu' );
    
                add_submenu_page( 
                    'classic-social-share', 
                    __( 'Help', 'classic-social-share' ),
                    __( 'Help', 'classic-social-share' ), 
                    'manage_options', 'ssb-help', 
                    [$this, 'admin_page' ] 
                );
        
            }
    
        }
        public function register_settings() {
            register_setting(
                'classic-social-share-group', // Option group
                'classic_share_post_types', // Option name
            );
            register_setting(
                'classic-social-share-group', // Option group
                'classic_share_socials', // Option name
            );
        }
        function plugin_page() {
            echo '<div class="wrap">';
                $this->settings_api->settings_header();
                $this->settings_api->show_navigation();
                $this->settings_api->show_forms();
                $this->settings_api->settings_sidebar();
                
            echo '</div>';
        }

    }
}
?>