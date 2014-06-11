<?php 
// Part 2
$data = array(
	'title'			=> 'Myanmar Links',
	'another_title'	=> 'Myanmar Tutorials',
	'class'	=> array(
		'wpa1', 'wpa2', 'wpa3'
		)
	);

echo load_view('home', $data);
?>