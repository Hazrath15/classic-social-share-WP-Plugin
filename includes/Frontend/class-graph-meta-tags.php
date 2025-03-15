<?php
if( !class_exists( 'CSSH_Graph_Meta_Tags' ) ) {
    class CSSH_Graph_Meta_Tags {
        
        // Add Open Graph meta tags based on user settings
        // public function add_open_graph_meta_tags() {
        //     // Only add Open Graph meta tags for blog posts, not products
        //     if ( is_single() && get_post_type() === 'post' ) {
        //         global $post;
    
        //         // Ensure $post is a WP_Post object
        //         if ( ! $post instanceof WP_Post ) {
        //             return;
        //         }
    
        //         $post_url = get_permalink( $post->ID );
        //         $post_title = get_the_title( $post->ID );
        //         $post_image = get_the_post_thumbnail_url( $post->ID, 'full' );
    
        //         // If there's an image, display Open Graph meta tags
        //         if ( $post_image ) {
        //             $image_url = $post_image;
    
        //             // Output Open Graph meta tags for social sharing
        //             echo '<meta property="og:title" content="' . esc_attr( $post_title ) . '" />';
        //             echo '<meta property="og:description" content="' . esc_attr( get_bloginfo( 'description' ) ) . '" />';
        //             echo '<meta property="og:image" content="' . esc_url( $image_url ) . '" />';
        //             echo '<meta property="og:url" content="' . esc_url( $post_url ) . '" />';
        //             echo '<meta property="og:type" content="article" />';
        //         }
        //     }
        // }
        public function add_open_graph_meta_tags() {
            $content = '';
            // Get admin settings
            $selected_post_types = (array) get_option('classic_share_post_types', []);

            if (!is_single() || !in_array(get_post_type(), $selected_post_types)) {
                return $content;
            }
        
            global $post;
        
            // Ensure $post is a WP_Post object
            if (! $post instanceof WP_Post) {
                return;
            }
        
            $post_url = get_permalink($post->ID);
            $post_title = get_the_title($post->ID);
            $post_image = get_the_post_thumbnail_url($post->ID, 'full');
        
            // If there's an image, display Open Graph meta tags
            if ($post_image) {
                $image_url = $post_image;
        
                // Output Open Graph meta tags for social sharing
                echo '<meta property="og:title" content="' . esc_attr($post_title) . '" />';
                echo '<meta property="og:description" content="' . esc_attr(get_bloginfo('description')) . '" />';
                echo '<meta property="og:image" content="' . esc_url($image_url) . '" />';
                echo '<meta property="og:url" content="' . esc_url($post_url) . '" />';
                echo '<meta property="og:type" content="article" />';
            }
        }
    }
}

?>