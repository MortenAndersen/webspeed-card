<?php 



add_action('acf/init', 'webspeed_cards_block');
function webspeed_cards_block() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a block.
        acf_register_block_type(array(
            'name'              => 'card',
            'title'             => __('Cards HJEMMESIDER'),
            'description'       => __('Cards med link'),
            'render_template'   => plugin_dir_path(__FILE__) . '/gutenberg-html.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'mode'              => 'edit',
            'keywords'          => array( 'Cards', 'Hjemmesider' ),
        ));
    }
}

// ---------------------------------------------------
