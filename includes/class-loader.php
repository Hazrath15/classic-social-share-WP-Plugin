<?php
/**
 * This file is used to include all the necessary files for the plugin.
 *
 * @package Classic_Social_Share
 */
if( !class_exists( 'CSSH_Loader' ) ) {
    class CSSH_Loader {
        public static function init() {

            require_once CSSH_PLUGIN_DIR . 'includes/Admin/class-settings-structure.php';
            require_once CSSH_PLUGIN_DIR . 'includes/Admin/class-admin-settings.php';
            
            require_once CSSH_PLUGIN_DIR . 'includes/Frontend/class-social-button.php';
            require_once CSSH_PLUGIN_DIR . 'includes/Frontend/class-graph-meta-tags.php';
            require_once CSSH_PLUGIN_DIR . 'includes/Frontend/class-social-share-settings.php';

            require_once CSSH_PLUGIN_DIR . 'includes/Assets/Assets.php';

            new CSSH_Admin_Settings();
            new CSSH_Load_Assets();
            new CSSH_Social_Share_Settings();
        }
    }
}

?>