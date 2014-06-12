<?php 
// Part 2
function HomeController() {
	var_dump('HomeController');
	$data = array(
	'title'			=> 'Myanmar Links',
	'another_title'	=> 'Myanmar Tutorials',
	'class'	=> array(
		'wpa1', 'wpa2', 'wpa3'
		)
	);
	echo load_view('home', $data);
}
?>