<?php

    /**
     * This file represents an example of the code that themes would use to register
     * the required plugins.
     *
     * It is expected that theme authors would copy and paste this code into their
     * functions.php file, and amend to suit.
     *
     * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
     *
     * @package    TGM-Plugin-Activation
     * @subpackage Example
     * @version    2.6.1 for parent theme Wprig
     * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
     * @copyright  Copyright (c) 2011, Thomas Griffin
     * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
     * @link       https://github.com/TGMPA/TGM-Plugin-Activation
     */
    
     
    require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';
    
    add_action( 'tgmpa_register', 'wprig_register_required_plugins' );
    
    /**
     * Register the required plugins for this theme.
     *
     * In this example, we register five plugins:
     * - one included with the TGMPA library
     * - two from an external source, one from an arbitrary source, one from a GitHub repository
     * - two from the .org repo, where one demonstrates the use of the `is_callable` argument
     *
     * The variables passed to the `tgmpa()` function should be:
     * - an array of plugin arrays;
     * - optionally a configuration array.
     * If you are not changing anything in the configuration array, you can remove the array and remove the
     * variable from the function call: `tgmpa( $plugins );`.
     * In that case, the TGMPA default settings will be used.
     *
     * This function is hooked into `tgmpa_register`, which is fired on the WP `init` action on priority 10.
     */
    function wprig_register_required_plugins() {
        /*
         * Array of plugin arrays. Required keys are name and slug.
         * If the source is NOT from the .org repo, then source is also required.
         */
        $plugins = array(
    
    
            // This is an example of how to include a plugin from an arbitrary external source in your theme.
            array(
                'name'         => 'Elementor',
                'slug'         => 'elementor', 
                'source'       => 'https://downloads.wordpress.org/plugin/elementor.2.5.11.zip', 
                'required'     => false, 
                'external_url' => 'https://es.wordpress.org/plugins/elementor',
            ),
            array(
                'name'         => 'Advanced Custom Fields',
                'slug'         => 'advanced-custom-fields', 
                'source'       => 'https://downloads.wordpress.org/plugin/advanced-custom-fields.5.7.12.zip', 
                'required'     => false, 
                'external_url' => 'https://es.wordpress.org/plugins/advanced-custom-fields',
            ),
            array(
                'name'         => 'Show Current Template',
                'slug'         => 'show-current-template', 
                'source'       => 'https://downloads.wordpress.org/plugin/show-current-template.0.3.0.zip', 
                'required'     => false, 
                'external_url' => 'https://es.wordpress.org/plugins/show-current-template',
            ),
            array(
                'name'         => 'Regenerate Thumbnails',
                'slug'         => 'regenerate-thumbnails', 
                'source'       => 'https://downloads.wordpress.org/plugin/regenerate-thumbnails.zip', 
                'required'     => false, 
                'external_url' => 'https://es.wordpress.org/plugins/regenerate-thumbnails',
            ),
            array(
                'name'         => 'Duplicator',
                'slug'         => 'duplicator', 
                'source'       => 'https://downloads.wordpress.org/plugin/duplicator.1.3.10.zip', 
                'required'     => false, 
                'external_url' => 'https://es.wordpress.org/plugins/duplicator',
            ),
            array(
                'name'         => 'Editor clásico',
                'slug'         => 'editor-clasico', 
                'source'       => 'https://downloads.wordpress.org/plugin/classic-editor.1.4.zip', 
                'required'     => false, 
                'external_url' => 'https://es.wordpress.org/plugins/classic-editor',
            ),
            array(
                'name'         => 'WP Developer Tools',
                'slug'         => 'wp-developer-tools', 
                'source'       => 'https://downloads.wordpress.org/plugin/wp-developer-tools.zip', 
                'required'     => false, 
                'external_url' => 'https://es.wordpress.org/plugins/wp-developer-tools',
            ),
            array(
                'name'         => 'Custom Post Type UI',
                'slug'         => 'custom-post-type-ui', 
                'source'       => 'https://downloads.wordpress.org/plugin/custom-post-type-ui.1.6.1.zip', 
                'required'     => false, 
                'external_url' => 'https://es.wordpress.org/plugins/custom-post-type-ui',
            ),
            array(
                'name'         => 'Shortcodes Ultimate',
                'slug'         => 'shortcodes-ultimate', 
                'source'       => 'https://downloads.wordpress.org/plugin/shortcodes-ultimate.zip', 
                'required'     => false, 
                'external_url' => 'https://es.wordpress.org/plugins/shortcodes-ultimate',
            ),
            array(
                'name'         => 'WooCommerce',
                'slug'         => 'wooCommerce', 
                'source'       => 'https://downloads.wordpress.org/plugin/woocommerce.3.5.7.zip', 
                'required'     => false, 
                'external_url' => 'https://es.wordpress.org/plugins/woocommerce',
            ),
            array(
                'name'         => 'Smart Slider 3',
                'slug'         => 'smart-slider', 
                'source'       => 'https://downloads.wordpress.org/plugin/smart-slider-3.3.3.18.zip', 
                'required'     => false, 
                'external_url' => 'https://wordpress.org/plugins/smart-slider-3',
            ),
            array(
                'name'         => 'Widget Importer & Exporter',
                'slug'         => 'widget-importer', 
                'source'       => 'https://downloads.wordpress.org/plugin/widget-importer-exporter.1.5.5.zip', 
                'required'     => false, 
                'external_url' => 'https://wordpress.org/plugins/widget-importer-exporter'
            ), array(
                'name'         => 'Code Snippets',
                'slug'         => 'code_snippets', 
                'source'       => 'https://downloads.wordpress.org/plugin/code-snippets.zip', 
                'required'     => false, 
                'external_url' => 'https://es.wordpress.org/plugins/code-snippets'
            )
    
           
    
        );
    
        /*
         * Array of configuration settings. Amend each line as needed.
         *
         * TGMPA will start providing localized text strings soon. If you already have translations of our standard
         * strings available, please help us make TGMPA even better by giving us access to these translations or by
         * sending in a pull-request with .po file(s) with the translations.
         *
         * Only uncomment the strings in the config array if you want to customize the strings.
         */
        $config = array(
            'id'           => 'wprig',                 // Unique ID for hashing notices for multiple instances of TGMPA.
            'default_path' => '',                      // Default absolute path to bundled plugins.
            'menu'         => 'tgmpa-install-plugins', // Menu slug.
            'parent_slug'  => 'themes.php',            // Parent menu slug.
            'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
            'has_notices'  => true,                    // Show admin notices or not.
            'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
            'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
            'is_automatic' => false,                   // Automatically activate plugins after installation or not.
            'message'      => '',                      // Message to output right before the plugins table.
    
           
        );
    
        tgmpa( $plugins, $config );
    }
    
