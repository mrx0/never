<?php

//directory.php
//

	require_once 'header.php';
	
	if ($enter_ok){
		require_once 'header_tags.php';
		if (($spravka['see_all'] == 1) || ($spravka['see_own'] == 1) || $god_mode){
			echo '
				<header>
					<h1>Справочники</h1>
				</header>';

            echo '<a href="contacts.php" class="b3" title="Сотрудники">Сотрудники</a>';

            //echo '<a href="filials.php" class="b3" title="Отделы">Отделы</a>';


		}else{
			echo '<h1>Не хватает прав доступа.</h1><a href="index.php">На главную</a>';
		}
	}else{
		header("location: enter.php");
	}
		
	require_once 'footer.php';

?>