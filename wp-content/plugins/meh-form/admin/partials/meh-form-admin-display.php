<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://moduledev.com
 * @since      1.0.0
 *
 * @package    Meh_Form
 * @subpackage Meh_Form/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="">
    <h2><?php esc_attr_e('Form Elements: Input Fields', 'WpAdminStyle'); ?></h2>
    <form method="post" name="cleanup_options" action="options.php">

        <?php ;
        $options = get_option($this->plugin_name);
        $mehan_email = $options['mehan_email'];

        settings_fields($this->plugin_name);
        do_settings_sections($this->plugin_name);
        ?>
        <fieldset>
            <input type="email" id="<?php echo $this->plugin_name;?>"
                   name="<?php echo $this->plugin_name;?>[mehan_email]" class="regular-text" placeholder="Enter E-mail"
                   value="<?php if(!empty($mehan_email)) echo $mehan_email;?>"/>
            <?php submit_button(__('Save all changes', $this->plugin_name), 'primary', 'submit', TRUE); ?>
        </fieldset>
    </form>
</div>