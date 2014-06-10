<?php 

var_dump(__DIR__);
define('DD', __DIR__ . '/../');
$data = array(
	'title'			=> 'Myanmar Links',
	'another_title'	=> 'Myanmar Tutorials',
	'class'	=> array(
		'wpa1', 'wpa2', 'wpa3'
		)
	);

echo load_view('home', $data);

function load_view($view, $data = null) {
	ob_start();
	if($data != null) {
		extract($data);
	}
	require DD . 'app/views/' . $view . '.php';
	// ob_end_flush();
	$html = ob_get_clean(); // ob_end_flush()
	return $html;
}

 ?>