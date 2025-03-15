<?php
if( !class_exists('CSSH_Social_Button')) {
    class CSSH_Social_Button {

            // Display social share buttons based on user settings
            // public function display_social_share_buttons( $content ) {
            //     // Only display social share buttons on blog post pages
            //     if ( is_single() && get_post_type() === 'post' ) {
            //         global $post;
        
            //         // Check if $post is a WP_Post object
            //         if ( ! $post instanceof WP_Post ) {
            //             return $content;
            //         }
        
            //         $post_url = urlencode(get_permalink($post->ID));
            //         $post_title = rawurlencode($post->post_title);
            //         $post_image = urlencode(get_the_post_thumbnail_url($post->ID, 'full'));
        
            //         $content .= '<div class="custom-social-share">';
            //         $content .= '<ul>';
        
            //         // Facebook
            //         $content .= '<li><a href="https://www.facebook.com/sharer.php?u=' . $post_url . '" target="_blank" rel="noopener"><i class="fa-brands fa-facebook-f"></i></a></li>';
        
            //         // Instagram (you can leave this link as is, or customize to post)
            //         $content .= '<li><a href="https://www.instagram.com/" target="_blank" rel="noopener"><i class="fa-brands fa-instagram"></i></a></li>'; 
        
            //         // Twitter
            //         $content .= '<li><a href="https://twitter.com/share?url=' . $post_url . '&text=' . $post_title . '" target="_blank" rel="noopener"><i class="fa-brands fa-x-twitter"></i></a></li>';
        
            //         // Linkedin
            //         $content .= '<li><a href="https://www.linkedin.com/sharing/share-offsite/?url="' . $post_url . '&media=' . $post_image . '&description=' . $post_title . '" target="_blank" rel="noopener"><i class="fa-brands fa-linkedin-in"></i></a></li>';
        
            //         $content .= '</ul>';
            //         $content .= '</div>';
            //     }
        
            //     return $content;
            // }
            public function display_social_share_buttons( $content ) {
                // Get admin settings
                $selected_socials = get_option('classic_share_socials', []);
            
                // Check if current post type is allowed
                $selected_post_types = (array) get_option('classic_share_post_types', []);

                if (!is_single() || !in_array(get_post_type(), $selected_post_types)) {
                    return $content;
                }
            
                global $post;
            
                // Ensure $post is a WP_Post object
                if (! $post instanceof WP_Post) {
                    return $content;
                }
            
                $post_url = urlencode(get_permalink($post->ID));
                $post_title = rawurlencode($post->post_title);
                $post_image = urlencode(get_the_post_thumbnail_url($post->ID, 'full'));
            
                $content .= '<div class="custom-social-share">';
                $content .= '<ul>';
            
                // Define available social platforms
                $social_links = [
                    'facebook' => '<li><a href="https://www.facebook.com/sharer.php?u=' . $post_url . '" target="_blank" rel="noopener"><i class="fa-brands fa-facebook-f"></i></a></li>',
                    'instagram' => '<li><a href="https://www.instagram.com/" target="_blank" rel="noopener"><i class="fa-brands fa-instagram"></i></a></li>',
                    'twitter' => '<li><a href="https://twitter.com/share?url=' . $post_url . '&text=' . $post_title . '" target="_blank" rel="noopener"><i class="fa-brands fa-x-twitter"></i></a></li>',
                    'linkedin' => '<li><a href="https://www.linkedin.com/sharing/share-offsite/?url=' . $post_url . '&media=' . $post_image . '&description=' . $post_title . '" target="_blank" rel="noopener"><i class="fa-brands fa-linkedin-in"></i></a></li>',
                    'pinterest' => '<li><a href="https://pinterest.com/pin/create/button/?url=' . $post_url . '&media=' . $post_image . '&description=' . $post_title . '" target="_blank" rel="noopener"><i class="fa-brands fa-pinterest"></i></a></li>',
                ];
            
                // Display selected social share buttons
                foreach ($selected_socials as $social) {
                    if (isset($social_links[$social])) {
                        $content .= $social_links[$social];
                    }
                }
            
                $content .= '</ul>';
                $content .= '</div>';
            
                return $content;
            }
    }
}

?>