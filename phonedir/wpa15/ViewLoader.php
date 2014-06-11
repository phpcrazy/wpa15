<?php 

// Part 3
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