<?php

//admin.php
//Админка

	require_once 'header.php';

	if ($enter_ok){
		require_once 'header_tags.php';
		if ($god_mode){
			include_once 'DBWork.php';
			//$offices = SelDataFromDB('spr_filials', '', '');
			
			echo '
				<header style="margin-bottom: 5px;">
					<h1>Админка</h1>
				</header>		
				<div id="data">';
				
			echo '<a href="wrights.php" class="b">Права</a>';
			//echo '<a href="/sxd" class="b">SXD</a>';
			//echo '<a href="/phpmyadmin" class="b">PHPMyAdmin</a>';

				
			echo '			
				</div>';
		}else{
			echo '<h1>Не хватает прав доступа.</h1><a href="index.php">На главную</a>';
		}
	}else{
		header("location: enter.php");
	}
		
	require_once 'footer.php';

?>