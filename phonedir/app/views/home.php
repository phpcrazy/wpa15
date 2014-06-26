<?php echo load_view('layouts/header'); ?>
	<h1><?php echo $title; ?></h1>
	<h1><?php echo $another_title; ?></h1>
	<h2><?php echo "How are you?"; ?></h2>
	<h2><?php echo "How do you do?"; ?></h2>
	<?php foreach($class as $c) : ?>
		<?php echo $c; ?><br />
	<?php endforeach; ?>
	<h1>Hello from Home</h1>
<?php echo load_view('layouts/footer'); ?>