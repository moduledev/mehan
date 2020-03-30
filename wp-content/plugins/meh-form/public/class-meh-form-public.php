<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://moduledev.com
 * @since      1.0.0
 *
 * @package    Meh_Form
 * @subpackage Meh_Form/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Meh_Form
 * @subpackage Meh_Form/public
 * @author     Moduledev <moduledev.office@gmail.com>
 */
class Meh_Form_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
        $this->display_plugin_setup_front();
	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Meh_Form_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Meh_Form_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/meh-form-public.css', array(), $this->version, 'all' );
		wp_enqueue_style( '123', plugin_dir_url( __FILE__ ) . '../form-app/build/static/css/main.c81493b5.css', array(), 1.0, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Meh_Form_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Meh_Form_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/meh-form-public.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( 'vitamins', plugin_dir_url( __FILE__ ) . '../form-app/build/static/js/vitamins.js', [],1.0, false );

	}

    /**
     * Render the Plugin Form Front-End
     *
     * @since    1.0.0
     */

    public  function display_plugin_setup_front() {
        include_once( 'partials/meh-form-public-display.php' );
    }

}
