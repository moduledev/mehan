<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://moduledev.com
 * @since      1.0.0
 *
 * @package    Wp_Cbf
 * @subpackage Wp_Cbf/public/partials
 */
?>

    <!-- This file should primarily consist of HTML with a little bit of PHP. -->


<?php

function mehan_test()
{
    $form =  '<div class="wrap-test">
                <h2 class="nav-tab-wrapper">Clean up</h2>
            </div>';
    return $form;
}

add_shortcode('testmehan', 'mehan_test');