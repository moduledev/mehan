<?php

/**
 * Custom Gutenberg functions
 */
// Adds support for editor color palette.

function mehan_gutenberg()
{
    add_theme_support( 'editor-color-palette', array(
        array(
            'name'  => __( 'Light gray', 'genesis-sample' ),
            'slug'  => 'light-gray',
            'color'	=> '#f5f5f5',
        ),
        array(
            'name'  => __( 'Medium gray', 'genesis-sample' ),
            'slug'  => 'medium-gray',
            'color' => '#999',
        ),
        array(
            'name'  => __( 'Dark gray', 'genesis-sample' ),
            'slug'  => 'dark-gray',
            'color' => '#333',
        ),
    ) );

    add_theme_support( 'align-wide' );

    add_theme_support(
        '__experimental-editor-gradient-presets',
        array(
            array(
                'name'     => __( 'Vivid cyan blue to vivid purple', 'themeLangDomain' ),
                'gradient' => 'linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%)',
                'slug'     => 'vivid-cyan-blue-to-vivid-purple'
            ),
            array(
                'name'     => __( 'Vivid green cyan to vivid cyan blue', 'themeLangDomain' ),
                'gradient' => 'linear-gradient(135deg,rgba(0,208,132,1) 0%,rgba(6,147,227,1) 100%)',
                'slug'     =>  'vivid-green-cyan-to-vivid-cyan-blue',
            ),
            array(
                'name'     => __( 'Light green cyan to vivid green cyan', 'themeLangDomain' ),
                'gradient' => 'linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%)',
                'slug'     => 'light-green-cyan-to-vivid-green-cyan',
            ),
            array(
                'name'     => __( 'Luminous vivid amber to luminous vivid orange', 'themeLangDomain' ),
                'gradient' => 'linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%)',
                'slug'     => 'luminous-vivid-amber-to-luminous-vivid-orange',
            ),
            array(
                'name'     => __( 'Luminous vivid orange to vivid red', 'themeLangDomain' ),
                'gradient' => 'linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%)',
                'slug'     => 'luminous-vivid-orange-to-vivid-red',
            ),
        )
    );

    add_theme_support( 'editor-font-sizes', array(
        array(
            'name' => __( 'Small', 'themeLangDomain' ),
            'size' => 12,
            'slug' => 'small'
        ),
        array(
            'name' => __( 'Normal', 'themeLangDomain' ),
            'size' => 16,
            'slug' => 'normal'
        ),
        array(
            'name' => __( 'Large', 'themeLangDomain' ),
            'size' => 36,
            'slug' => 'large'
        ),
        array(
            'name' => __( 'Huge', 'themeLangDomain' ),
            'size' => 50,
            'slug' => 'huge'
        )
    ) );
}

add_action('init', 'mehan_gutenberg');

function mehun_gutenberg_blocks()
{
    wp_register_script('custom_cta_js', get_template_directory_uri() . '/gutenberg-blocks/build/index.js', [
        'wp-blocks', 'wp-editor', 'wp-components'
    ]);

    register_block_type('mehun/custom-cta', [
        'editor_script' =>  'custom_cta_js'
    ]);
}
add_action('init', 'mehun_gutenberg_blocks');