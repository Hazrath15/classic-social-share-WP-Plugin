<?php
if( !class_exists( 'CSSH_Social_Share_Settings' ) ) {
    class CSSH_Social_Share_Settings {
        private $social_button;
        private $graph_meta_tags;
        public function __construct() {
            $this->social_button = new CSSH_Social_Button();
            $this->graph_meta_tags = new CSSH_Graph_Meta_Tags();
            add_action( 'wp_head', [ $this->graph_meta_tags, 'add_open_graph_meta_tags' ] );
            add_filter( 'the_content', [ $this->social_button, 'display_social_share_buttons' ] );
        }
    }
}

?>