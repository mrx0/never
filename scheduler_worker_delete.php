<?php 

//scheduler_worker_delete.php
//

	session_start();
	
	if (empty($_SESSION['login']) || empty($_SESSION['id'])){
		header("location: enter.php");
	}else{
		include_once 'DBWork.php';
		include_once 'functions.php';

		//var_dump ($_POST);
		
		if ($_POST){
			
			require 'config.php';
			mysql_connect($hostname,$username,$db_pass) OR DIE("Не возможно создать соединение");
			mysql_select_db($dbName) or die(mysql_error()); 
			mysql_query("SET NAMES 'utf8'");
			$time = time();
			
			$query = "DELETE FROM `sheduler_template` WHERE `worker`='{$_POST['worker']}' AND
			`filial`='{$_POST['filial']}' AND `day`='{$_POST['day']}' AND 
			`smena`='{$_POST['smena']}' AND `kab`='{$_POST['kab']}' AND 
			`type`='{$_POST['type']}'";
			
			mysql_query($query) or die($query.' -> '.mysql_error());
			mysql_close();
			
			//логирование
			AddLog ('0', $_SESSION['id'], '', 'Сотрудник ['.$_POST['worker'].'] удален из смены Графика ['.$_POST['smena'].']. Филиал ['.$_POST['filial'].']. Кабинет ['.$_POST['kab'].']. День ['.$_POST['day'].']. Тип ['.$_POST['type'].']');	
		
			echo '<span style="color: green;">Удаление прошло успешно</span>';
		}else{
			echo '<span style="color: red;">Что-то пошло не так</span>';
		}
	}
?>