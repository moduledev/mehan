<?php
add_action('wp_ajax_vitaminssendemail', 'vitamins_sendemail_callback');
add_action('wp_ajax_nopriv_vitaminssendemail', 'vitamins_sendemail_callback');

function vitamins_sendemail_callback()
{
	$nonce_inner = wp_create_nonce('sendmail_key');
	if (!empty($_POST['nonce']) && $nonce_inner === $_POST['nonce']) {
        $options = get_option('meh-form');
        $email = $options['mehan_email'];
		$to = $email;
		$subject = 'Заявка на созвон с сайта';
		$name = htmlspecialchars($_POST['name']);
		$phone = htmlspecialchars($_POST['phone']);
		$email = htmlspecialchars($_POST['email']);
		$message = $name . " оставил заявку на созвон: телефон - $phone" . "\n\n " . $_POST['question'] . " \n\n " . $_POST['message'];
		$headers = "From:" . $name;
		mail($to, $subject, $message, $headers);
		print_r(json_encode(['status' => '200', 'meassage' => 'Сообщение отправлено']));
		wp_die();
	} else {
		wp_die('Non recognized sendemail key','1', 403);
	}
}


add_action('wp_enqueue_scripts', 'my_assets'); // для фронта
function my_assets()
{
//	wp_enqueue_script('mehan-form', plugin_dir_url( __FILE__ ) . '../form-app/build/static/js/mehform.js', [],1.0, false);

    wp_localize_script(
		'vitamins',
		'sendEmailAjax',
		[
			'url' => admin_url('admin-ajax.php'),
			'key' => wp_create_nonce('sendmail_key')
		]
	);
}
