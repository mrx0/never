<?php

//user.php
//Карточка пользователя

	require_once 'header.php';
	
	if ($enter_ok){
		require_once 'header_tags.php';

		if ($_GET){
			include_once 'DBWork.php';
			include_once 'functions.php';

            require 'variables.php';
			
			$user = SelDataFromDB('spr_workers', $_GET['id'], 'user');
			//var_dump($user);
			$arr_orgs = SelDataFromDB('spr_org', '', '');
			//var_dump($orgs);
			$arr_permissions = SelDataFromDB('spr_permissions', '', '');
			//var_dump($permissions);
			$permissions = SearchInArray($arr_permissions, $user[0]['permissions'], 'name');
			//var_dump($permissions);
			$specializations = workerSpecialization($_GET['id']);
			//var_dump($specializations);
			$org = SearchInArray($arr_orgs, $user[0]['org'], 'name');
			//var_dump($org);
			
			//операции со временем						
			$month = date('m');		
			$year = date('Y');
			$day = date("d");

            $specializations_str_rez = '';

			echo '
				<div id="status">
					<header>
						<h2>Карточка пользователя';
			if (($workers['edit'] == 1) || $god_mode){
				echo '
									<a href="user_edit.php?id='.$_GET['id'].'" class="info" style="font-size: 80%;" title="Редактировать"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>';
			}
			echo '
						</h2>
					</header>';
			if ($user[0]['fired'] == '1'){
				echo '<span style="color:#EF172F;font-weight:bold;">УВОЛЕН</span>';
			}

			echo '
					<div id="data">';

			echo '

                        <div class="cellsBlock2">
                            <div class="cellLeft">ФИО</div>
                            <div class="cellRight">'.$user[0]['full_name'].'</div>
                        </div>  

                        <div class="cellsBlock2">
                            <div class="cellLeft">Должность</div>
                            <div class="cellRight">';
			echo $permissions;
			echo '				
                            </div>
                        </div>';


			//echo $org;
			echo '	

                                        
                        <div class="cellsBlock2">
                            <div class="cellLeft">Логин</div>
                            <div class="cellRight">'.$user[0]['login'].'</div>
                        </div>
                        
                        <div class="cellsBlock2">
                            <div class="cellLeft">Контакты</div>
                            <div class="cellRight">'.$user[0]['contacts'].'</div>
                        </div>
                        
                        <br><br><br>';


				

			echo '
                    </div>';
			echo '
				</div>';
				

		}else{
			echo '<h1>Что-то пошло не так</h1><a href="index.php">Вернуться на главную</a>';
		}
	}else{
		header("location: enter.php");
	}
		
	require_once 'footer.php';

?>