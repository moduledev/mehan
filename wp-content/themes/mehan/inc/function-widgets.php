<?php

/*
====================================================
En Social Links Widjet
====================================================
*/
class Messendgers_Icons_Widjet extends WP_Widget
{

    // Set up the widget name and description.
    public function __construct()
    {
        $widget_options = array('classname' => 'Messendgers link icons', 'description' => 'Mehan messangers widjet');
        parent::__construct('messendger_icons', 'Mehan messangers widjet', $widget_options);
    }


    // Create the widget output.
    public function widget($args, $instance)
    {
        $title = apply_filters('widget_title', $instance['title']);
        $vitamins_viber = apply_filters('widget_title', $instance['vitamins_viber']);
        $vitamins_whatsapp = apply_filters('widget_title', $instance['vitamins_whatsapp']);
        $vitamins_telegram = apply_filters('widget_title', $instance['vitamins_telegram']);

        echo $args['before_widget'] . $args['before_title'] . $args['after_title']; ?>


            <div class="messengers_list">
                <p> <?php _e( 'Connect in one click', 'mehan' ); ?></p>
            <?php if (isset($vitamins_viber)) : ?>
                    <a class="mobile-show"  href="viber://add?number=<?php echo  !isset($vitamins_viber) ? '#' : $vitamins_viber ?>" title="viber" rel="nofollow">
                        <svg class="svg-icon">
                            <use xlink:href="<?php echo get_stylesheet_directory_uri() . '/public/svg/social-links-sprite.svg#' . 'viber' ?>">
                            </use>
                        </svg>
                    </a>
                   <a class="pc-show" target="_blank" href="viber://chat?number=+<?php echo  !isset($vitamins_viber) ? '#' : $vitamins_viber ?>" title="viber" rel="nofollow">
                       <svg class="svg-icon">
                           <use xlink:href="<?php echo get_stylesheet_directory_uri() . '/public/svg/social-links-sprite.svg#' . 'viber' ?>">
                           </use>
                       </svg>
                   </a>
            <?php endif ?>

            <?php if (isset($vitamins_whatsapp)) : ?>

                <a target="_blank" href="https://wa.me/<?php echo  !isset($vitamins_whatsapp) ? '#' : $vitamins_whatsapp ?>"  title="whatsapp">
                    <svg class="svg-icon">
                        <use xlink:href="<?php echo get_stylesheet_directory_uri() . '/public/svg/social-links-sprite.svg#' . 'whatsapp' ?>">
                        </use>
                    </svg>
                </a>
            <?php endif ?>

            <?php if (isset($vitamins_telegram) && strlen($vitamins_telegram)) : ?>
                   <a href="tg://resolve?domain=<?php echo  !isset($vitamins_telegram) ? '#' : $vitamins_telegram ?>"  title="telegram">
                       <svg class="svg-icon">
                           <use xlink:href="<?php echo get_stylesheet_directory_uri() . '/public/svg/social-links-sprite.svg#' . 'telegram' ?>">
                           </use>
                       </svg>
                   </a>
            <?php endif ?>
            </div>
        <?php echo $args['after_widget'];
    }

    // Create the admin area widget settings form.
    public function form($instance)
    {
        $title = !empty($instance['title']) ? $instance['title'] : '';
        $vitamins_viber = !empty($instance['vitamins_viber']) ? $instance['vitamins_viber'] : '';
        $vitamins_whatsapp = !empty($instance['vitamins_whatsapp']) ? $instance['vitamins_whatsapp'] : '';
        $vitamins_telegram = !empty($instance['vitamins_telegram']) ? $instance['vitamins_telegram'] : ''; ?>

        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>">Связятся с нами: </label>
            <input class="regular-text" type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo esc_attr($title); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('vitamins_viber'); ?>"> Viber: </label>
            <input class="regular-text" type="text" id="<?php echo $this->get_field_id('vitamins_viber'); ?>" name="<?php echo $this->get_field_name('vitamins_viber'); ?>" value="<?php echo esc_attr($vitamins_viber); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('vitamins_whatsapp'); ?>">Whatsapp: </label>
            <input class="regular-text" type="text" id="<?php echo $this->get_field_id('vitamins_whatsapp'); ?>" name="<?php echo $this->get_field_name('vitamins_whatsapp'); ?>" value="<?php echo esc_attr($vitamins_whatsapp); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('vitamins_telegram'); ?>">Telegram: </label>
            <input class="regular-text" type="text" id="<?php echo $this->get_field_id('vitamins_telegram'); ?>" name="<?php echo $this->get_field_name('vitamins_telegram'); ?>" value="<?php echo esc_attr($vitamins_telegram); ?>" />
        </p>
    <?php
    }


    // Apply settings to the widget instance.
    public function update($new_instance, $old_instance)
    {
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
        $instance['vitamins_viber'] = strip_tags($new_instance['vitamins_viber']);
        $instance['vitamins_whatsapp'] = strip_tags($new_instance['vitamins_whatsapp']);
        $instance['vitamins_telegram'] = strip_tags($new_instance['vitamins_telegram']);

        return $instance;
    }
}

// Register the widget.
function messendger_icons_widjet()
{
    register_widget('Messendgers_Icons_Widjet');
}
add_action('widgets_init', 'messendger_icons_widjet');
