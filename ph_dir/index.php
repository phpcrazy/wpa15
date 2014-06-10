<?php 

	if(isset( $_GET[ 'page' ]))
	{
		$page = $_GET[ 'page' ];	
	}
	else
	{
		$page = 'index';
	}

	if( $page == 'index' )
	{
		require "views/index.php";
	}
	elseif( $page == 'add' )
	{
		require "views/add.php";
	}
	elseif( $page == 'list' )
	{
		require "views/list.php";
	}
	elseif( $page == 'login' )
	{
		require "views/login.php";
	}
	elseif( $page == 'update' )
	{
		require "views/update.php";
	}
	else
	{
		echo "<h1>"."404"."</h1>";
	}

?>