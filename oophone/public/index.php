<?php 

define('DD', __DIR__ . '/../');
require DD . 'wpa15/loaders/ViewLoader.php';
require DD . 'wpa15/providers/DatabaseProvider.php';

// $data = array(
// 	'title'			=> 'Myanmar Links',
// 	'site_name'		=> 'Myanmar Tutorials'
// 	);

// $db = new DB;
$data = DB::table('site')->get();
var_dump($data);
$data = $data[0];
var_dump($data);
echo View::make('home', $data);



?>