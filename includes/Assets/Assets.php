<?php
class CSSH_Load_Assets {
    public function __construct() {
        // Use 'admin_enqueue_scripts' (not 'wp_enqueue_admin_scripts')
        add_action( 'admin_enqueue_scripts', [ $this, 'admin_enqueue_scripts' ] );
        add_action('wp_enqueue_scripts', [$this, 'classic_share_enqueue_fontawesome']);
    }

    public function admin_enqueue_scripts( $hook ) {
        // Ensure styles load only on your plugin settings page
        if ( $hook !== 'toplevel_page_classic-social-share' ) {
            return;
        }

        wp_enqueue_style( 'cssh-admin-css', plugins_url( 'assets/css/admin-style.css', plugin_dir_path( __DIR__ ) ), [], '1.0.0' );
        wp_enqueue_style( 'cssh-fontawesome-css', plugins_url( 'assets/fontawesome/css/all.min.css', plugin_dir_path( __DIR__ ) ), [], '6.7.2' );
        wp_enqueue_script( 'cssh-admin-js', plugins_url( 'assets/js/admin.js', plugin_dir_path( __DIR__ ) ), [], '1.0.0' );
        wp_enqueue_script('sortable-js', 'https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.15.0/Sortable.min.js', [], null, true);
    }

    function classic_share_enqueue_fontawesome() {
        wp_enqueue_style('font-awesome', plugin_dir_url(__FILE__) . 'assets/fontawesome/css/all.min.css');
    }
    
    
}

?>
