<?php
if (!class_exists('CSSH_Settings_Structure')) {
    class CSSH_Settings_Structure {

        function settings_header() {
            ?>
            <div class="ssb-top-bar">
                <a href="https://wpbrigade.com/"><img src="<?php echo plugins_url( 'assets/images/social_button.svg', plugin_dir_path( __FILE__ ) ); ?>" alt="Classic Social Share"></a>
                <div class="ssb-top-bar-content">
                <h2>Classic Social Share -->> <?php _e( 'makes Social Sharing easy for everyone' ); ?></h2>
                <p><?php _e( '<strong>Classic Social Share</strong> by <strong><a href="https://wpbrigade.com/?utm_source=classic-social-Share-lite&utm_medium=link-header&utm_campaign=pro-upgrade">whizPlugins</a></strong> adds an advanced set of social media sharing Share to your WordPress sites, such as:<code> <strong>Facebook</strong>, <strong>Twitter</strong>, <strong>LinkedIn</strong>, <strong>WhatsApp</strong>, <strong>Viber</strong>, <strong>Reddit</strong> and <strong>Pinterest</strong>.</code> This makes it the most flexible social sharing plugin ever for Everyone.', 'simplesocialbuttons' ); ?></p>
                </div>
            </div>
            <?php
		}
        function settings_sidebar() {
			?>
            <div class="postbox-container ssb_right_sidebar">
            <div id="poststuff">
                <div class="postbox ssb_social_links_wrapper ssb_spread_word">
                <div class="sidebar postbox">
                    <h2><?php _e( 'Spread the Word', 'simple-social-buttons' ); ?></h2>
                    <ul class="ssb_social_links">
                    <li>
                        <a href="https://twitter.com/intent/tweet?text=Check out this (FREE) Amazing Social Share Plugin for WordPress&amp;url=https://wordpress.org/plugins/simple-social-buttons/" data-count="none" class="button twitter" target="_blank" title="Post to Twitter Now"><?php _e( 'Share on X/Twitter', 'simple-social-buttons' ); ?><span class="dashicons ssb-x-icon"></span></a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://wordpress.org/plugins/simple-social-buttons/" class="button facebook" target="_blank" title="Check out this (FREE) Amazing Social Share Plugin for WordPress"><?php _e( 'Share on Facebook', 'simple-social-buttons' ); ?><span class="dashicons dashicons-facebook-alt"></span>
                        </a>
                    </li>
                    <li>
                        <a href="https://wordpress.org/support/plugin/simple-social-buttons/reviews/?filter=5" class="button wordpress" target="_blank" title="Rate on WordPress.org"><?php _e( 'Rate on WordPress.org', 'simple-social-buttons' ); ?><span class="dashicons dashicons-wordpress"></span>
                        </a>
                    </li>
                    </ul>
                </div>
                </div>

                <div class="postbox ssb_social_links_wrapper ssb_newsletter">
                <div class="sidebar postbox">
                    <h2><?php _e( 'Subscribe Newsletter', 'simple-social-buttons' ); ?></h2>
                    <ul class="postbox-newsletter">
                    <li>
                        <label for=""><?php _e( 'Email', 'simple-social-buttons' ); ?></label>
                        <input type="email" name="subscriber_mail" value="<?php echo get_option( 'admin_email' ); ?>" id="ssb_subscribe_mail">
                        <p class="ssb_subscribe_warning"></p>
                    </li>
                    <li>
                        <label for=""><?php _e( 'Name', 'simple-social-buttons' ); ?></label>
                        <input type="text" name="subscriber_name" id="ssb_subscribe_name" value="<?php echo wp_get_current_user()->display_name; ?>">
                    </li>
                    <li>
                        <input type="submit" value="Subscribe Now" class="button button-primary button-big" id="ssb_subscribe_btn">
                        <img src="<?php echo admin_url( 'images/spinner.gif' ); ?>" class="ssb_subscribe_loader" style="display:none">
                    </li>
                    <li>
                        <p class="ssb_return_message"></p>
                    </li>
                    </ul>
                </div>
                </div>

                <div class="postbox ssb_social_links_wrapper ssb_other_plugin">
                <div class="sidebar postbox">
                    <h2><?php _e( 'Recommended Plugins', 'simple-social-buttons' ); ?></h2>
                    <ul class="plugins_lists">
                    <li>
                        <a href="https://loginpress.pro/?utm_source=ssb-lite&amp;utm_medium=sidebar&amp;utm_campaign=pro-upgrade&utm_content=text-link" target="_blank" title="Post to Twitter Now">Customize WordPress Login Page</a>
                    </li>
                    <li>
                        <a href="https://analytify.io/ref/73/?utm_source=ssb-lite&amp;utm_medium=sidebar&amp;utm_campaign=pro-upgrade&utm_content=text-link" target="_blank" title="Share with your facebook friends about this awesome plugin.">Simplify Google Analytics in WordPress</a>
                    </li>
                    <li>
                        <a href="https://wpbrigade.com/wordpress/plugins/related-posts/?utm_source=ssb-lite&amp;utm_medium=sidebar&amp;utm_campaign=pro-upgrade&utm_content=text-link" target="_blank" title="Related Posts Thumbnails">Related Posts Thumbnails</a>
                    </li>
                    <li>
                        <a href="https://wpbrigade.com/recommend/maintenance-mode&utm_content=text-link" target="_blank" title="Under Construction &amp; Maintenance mode">Under Construction &amp; Maintenance mode
                        </a>
                    </li>
                    </ul>
                </div>
                </div>
            </div>
            </div>
			<?php
		}
        function show_navigation() {
			$html = '<h2 class="nav-tab-wrapper">';

			$tabs = array(
				array(
					'id'    => 'ssb_settings',
					'title' => '<span class="dashicons dashicons-admin-generic"></span>Settings',
				),
			);

			$tabs[] = array(
				'id'    => 'ssb_advanced',
				'title' => '<span class="dashicons dashicons-editor-code"></span>Advanced',
			);

            $tabs[] = array(
                'id'    => 'ssb_go_pro',
                'title' => '<span class="dashicons dashicons-star-filled"></span>Upgrade To Pro For More Features',
                // 'link'  => 'https://simplesocialbuttons.com/pricing/?utm_source=simple-social-buttons-lite&utm_medium=tab&utm_campaign=pro-upgrade',
            );

			foreach ( $tabs as $tab ) {
				if ( isset( $tab['link'] ) ) {
					$html .= sprintf( '<a href="%3$s" class="nav-tab" id="%1$s-tab" target="_blank" >%2$s</a>', $tab['id'], $tab['title'], $tab['link'] );
				} else {
					$html .= sprintf( '<a href="#%1$s" class="nav-tab" id="%1$s-tab">%2$s</a>', $tab['id'], $tab['title'] );
				}
			}

			$html .= '</h2>';

			echo $html;
		}
        function show_forms() {
            ?>
            <div class="ssb_settings_container ssb_settings-tab group" id="ssb_settings-tab-content">
                <div class="metabox-holder">
                    <div id="poststuff">
                        <p>Tab 1</p>
                        <?php
                        // Get all post types (excluding built-in like 'attachment', 'revision')
                        $post_types = get_post_types(['public' => true], 'objects');

                        // Retrieve saved options (array of post types)
                        $selected_post_types = get_option('classic_share_post_types', []);
                        $social_media_options = [
                            'facebook' => 'Facebook',
                            'twitter' => 'Twitter',
                            'linkedin' => 'LinkedIn',
                            'instagram' => 'Instagram',
                            'pinterest' => 'Pinterest'
                        ];
                        $selected_socials = get_option('classic_share_socials', []);
                        ?>
                        <form method="post" action="options.php">
                            <?php
                            settings_fields('classic-social-share-group');
                            do_settings_sections('classic-social-share');
                            $selected_post_types = (array) get_option('classic_share_post_types', []);
                            ?>
                            <h3>Select Social Media Platforms</h3>
                            <select name="classic_share_socials[]" multiple size="5" style="width: 200px;">
                                <?php foreach ($social_media_options as $key => $label) : ?>
                                    <option value="<?php echo esc_attr($key); ?>" <?php echo in_array($key, $selected_socials) ? 'selected' : ''; ?>>
                                        <?php echo esc_html($label); ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                            <h3>Post Type Settings</h3>
                            <div style="display: flex; gap: 20px;">
                                <?php foreach ($post_types as $post_type) : ?>
                                    <label style="display: flex; align-items: center; gap: 5px;">
                                        <input type="checkbox" name="classic_share_post_types[]" value="<?php echo esc_attr($post_type->name); ?>"
                                        <?php checked(in_array($post_type->name, $selected_post_types)); ?>>
                                        <span style="<?php echo in_array($post_type->name, $selected_post_types) ? 'background-color: #0073aa; color: white; padding: 2px 8px; border-radius: 4px;' : ''; ?>">
                                            <?php echo esc_html($post_type->label); ?>
                                        </span>
                                    </label>
                                <?php endforeach; ?>
                            </div>

                            <?php submit_button(); ?>
                        </form>
                    </div>
                </div>
            </div>
            <div class="ssb_settings_container ssb_settings-tab group" id="ssb_advanced-tab-content">
                <div class="metabox-holder">
                    <div id="poststuff">
                        <p>Tab 2</p>
                    </div>
                </div>
            </div>
            <div class="ssb_settings_container ssb_settings-tab group" id="ssb_go_pro-tab-content">
                <div class="metabox-holder">
                    <div id="poststuff">
                        <p>Tab 3</p>
                    </div>
                </div>
            </div>
            <?php
		}

    }
}
?>