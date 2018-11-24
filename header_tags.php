<?php

//header_tags.php
//Заголовок страниц сайта
	
	$god_mode = FALSE;
	
	//$version = 'v 25.08.2017';

	echo'
		<!DOCTYPE html>
		<html>
		<head>
			<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
			<meta name="description" content=""/>
			<meta name="keywords" content="" />
			<meta name="author" content="" />
			
			<title>Асмедика</title>
			
			<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
			<!-- Font Awesome -->
			<link rel="stylesheet" href="css/font-awesome.css">
			
			<link rel="stylesheet" href="css/style.css" type="text/css" />
			<!--<link rel="stylesheet" href="css/menu.css">-->
			<!--<link rel="stylesheet" type="text/css" href="css/default.css" />-->
			<link rel="stylesheet" type="text/css" href="css/component.css" />
			<link rel="stylesheet" type="text/css" href="css/ModalZakaz.css" />
			<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">	
			<link rel="stylesheet" type="text/css" href="css/pretty.css" />
			<link rel="stylesheet" type="text/css" href="css/multi-select.css" />
			<link rel="stylesheet" type="text/css" href="css/chosen.css" />
			
			<!--<link rel="stylesheet" type="text/css" href="css/drop_tree.css" />-->
			
			<link rel="stylesheet" type="text/css" href="js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />

			<link rel="stylesheet" href="css/calendar.css" type="text/css">
			
			<link rel="stylesheet" href="css/dds.css" type="text/css">
						
			<script type="text/javascript" src="js/dict.js"></script>
			<script type="text/javascript" src="js/common1.js"></script>

			<script src="js/utils.js" type="text/javascript"></script>
			<script src="js/Chart.js" type="text/javascript"></script>
			<!--<script src="js/chart2.js" type="text/javascript"></script>-->

			<script src="js/tooth_status.js" type="text/javascript"></script>
			<script src="js/path2.js" type="text/javascript"></script>

			<!--<script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>-->
			<!--<script type="text/javascript" src="js/jquery-1.11.3.js"></script>-->
			
			<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
			<script type="text/javascript" src="js/modernizr.custom.79639.js"></script> 
			
			<script type="text/javascript" src="js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
			<script type="text/javascript" src="js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
			<script type="text/javascript" src="jquery.liveFilter.js"></script>
			<script type="text/javascript" src="js/search.js"></script>
			<script type="text/javascript" src="js/search2.js"></script>

			<script type="text/javascript" src="js/search4.js"></script>
			
			<script type="text/javascript" src="js/search5.js"></script>
			
			<script type="text/javascript" src="js/search_fast_client.js"></script>
			
			<script type="text/javascript" src="js/jquery.multi-select.js"></script>
			
			<script type="text/javascript" src="js/chosen.jquery.js"></script>
			
			<script type="text/javascript" src="js/jquery.maskedinput-1.2.2.js"></script>
			
			<!--<script src="js/jquery.js" type="text/javascript"></script>-->

			<script src="js/raphael.js" type="text/javascript"></script>
			<!--<script src="js/init.js" type="text/javascript"></script>-->

			<script src="js/modernizr.custom.js"></script>

			<script src="js/jquery.scrollUp.js?1.1"></script>

			<script src="js/jszakaz.js"></script>
			<!--<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>-->
			<!--<script src="js/jquery-ui.min-1.8.js"></script>-->
			<script src="js/jquery-ui.min.js"></script>

			<!--чтобы менюшка прилеплялась к верхней части окна-->
			<script>
			jQuery("document").ready(function($){
				 
				var nav = $(".sticky");
				 
				$(window).scroll(function () {
					if ($(this).scrollTop() > 136) {
						nav.addClass("f-sticky");
					} else {
						nav.removeClass("f-sticky");
					}
				});
			  
			});
			</script>

			<script type="text/javascript">
				$(function(){
					$(document).tooltip();
				});
			</script>
	
			<script type="text/javascript">
				$(document).ready(function(){
					$("a.photo").fancybox({
						transitionIn: \'elastic\',
						transitionOut: \'elastic\',
						speedIn: 500,
						speedOut: 500,
						hideOnOverlayClick: false,
						titlePosition: \'over\'
					});
				});

			</script>
			
			<script type="text/javascript">
				$(function(){
					$("#livefilter-list").liveFilter("#livefilter-input", "li", {
						filterChildSelector: ".4filter",
						forPriceInInvoice: false
					});
				});
				$(function(){
					$("#lasttree").liveFilter("#livefilter-input", "p", {
						filterChildSelector: ".4filter",
						forPriceInInvoice: true
					});
				});
			</script>
			
			<script>
				$(function () {
					$.scrollUp({
						animation: \'slide\',
						activeOverlay: false,
						scrollText: \'Наверх\',
					});
				});
			</script>
			
			<script src="js/multiselect.js"></script>

			<script src="js/DrawTeethMapMenu.js"></script>

			<script type="text/javascript">
				function XmlHttp()
				{
				var xmlhttp;
				try{xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");}
				catch(e)
				{
				 try {xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");} 
				 catch (E) {xmlhttp = false;}
				}
				if (!xmlhttp && typeof XMLHttpRequest!=\'undefined\')
				{
				 xmlhttp = new XMLHttpRequest();
				}
				  return xmlhttp;
				}
				 
				function ajax(param)
				{
								if (window.XMLHttpRequest) req = new XmlHttp();
								method=(!param.method ? "POST" : param.method.toUpperCase());
				 
								if(method=="GET")
								{
											   send=null;
											   param.url=param.url+"&ajax=true";
								}
								else
								{
									send="";
									for (var i in param.data) send+= i+"="+param.data[i]+"&";
									send=send+"ajax=true";
								}
				 
								req.open(method, param.url, true);
								if(param.statbox)
									document.getElementById(param.statbox).innerHTML = \'<img src="img/wait.gif"> обработка...\';
								
								req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
								req.send(send);
								req.onreadystatechange = function()
								{
									if (req.readyState == 4 && req.status == 200) //если ответ положительный
									{
										if(param.success)param.success(req.responseText);
									}
								}
							}
			</script>
			
			<!--для скрытых блоков старое-->				
			<script type="text/javascript">
				function switchDisplay(id){
					var el = document.getElementById(id);
					if (!!el)
						el.style.display = (el.style.display=="none") ? "" : "none";
					return false;
				}
			</script>

			<script type="text/javascript">
				$( document ).ready(typeres())
				function typeres() {
					$(\'.tabs\').hide();
					var etabs = document.getElementById("tabSelector");
					if (etabs != null){
						if (etabs.options[etabs.selectedIndex].value.indexOf("tabs-") != -1) {
							var tab = \'#tabs-\'+etabs.options[etabs.selectedIndex].value.substring(5);
							$(tab).fadeIn();
						}
					}
				}
			</script>

			<!--для печати-->	
			<style type="text/css" media="print">
			  div.no_print {display: none; }
			  .never_print_it {display: none; }
			  #scrollUp {display: none; }
			</style> 

		</head>
		<body>

		<div class="no_print"> 
		<header class="h">
			<nav>
				<ul class="vert-nav">';
	//Если в системе
	if ($enter_ok){
		include_once 'DBWork.php';

		require_once 'permissions.php';

        //Для автоматизации выбора филиала
        if (isset($_SESSION['filial']) && !empty($_SESSION['filial'])){
            $filial_id_default = $_SESSION['filial'];
            $filial = array();
            $offices_j = SelDataFromDB('spr_filials', $_SESSION['filial'], 'offices');
            //var_dump($offices_j['name']);
            $selected_fil = $offices_j[0]['name'];
        }else{
            $selected_fil = '-';
            $filial_id_default = 15;
        }


        //Дата сегодня
        $monthT = date('m');
        $yearT = date('Y');
        $dayT = date("d");

		//echo '<li><a href="index.php" style="position: relative">Главная<div style="font-size:80%">'.$version.'</div><div class="have_new-topic notes_count" style="display: none; top: 0; right: 0; background: red;" title="Есть непрочитанные сообщения"></div></a></li>';
		echo '<li><a href="index.php" style="position: relative">Главная<div class="have_new-topic notes_count" style="display: none; top: 0; right: 0; background: red;" title="Есть непрочитанные сообщения"></div></a></li>';

		if (($ticket['see_all'] == 1) || ($ticket['see_own'] == 1) || $god_mode){
			echo '<li><a href="tickets.php">Тикеты<div class="have_new-ticket notes_count" style="display: none; top: 0; right: 0; background: red;" title="">4545</div></a></li>';
		}

		if (($spravka['see_all'] == 1) || ($spravka['see_own'] == 1) || $god_mode){
            echo '<li><a href="directory.php">Справочники</a></li>';
        }

		if ($god_mode){
			echo '<li><a href="admin.php"><i class="fa fa-cogs"></i></a></li>';
		}
	}

	
	echo
				'</ul>
				<ul style="position: absolute; right: 0; top: 0; z-index: 99; background: #FFF;">';
	if (!$enter_ok){
		echo '
					<li><a href="enter.php" title="Вход"><i class="fa fa-power-off"></i></a></li>';
	}else{
		
		$alarm = 0;
		$warning = 0;
		$pre_warning = 0;
		$if_notes = '';
		$if_removes = '';


		echo '

					<li>

						<div class="user_link" style="font-size: 80%; position: relative;">
							<a href="user.php?id='.$_SESSION['id'].'" class="href_profile" style="min-width: 110px;">
								['.$_SESSION['name'].']
							</a>
							<div id="change_filial" class="href_profile change_filial" style="">
								'.$selected_fil.'
							</div>
						</div>
						
						<a href="exit.php" class="href_exit" title="Выход">
							<i class="fa fa-power-off"></i>
						</a>
					</li>';
		
	}
	echo '
				</ul>
			</nav>
		</header>
		</div> 
		<section id="main">
';

?>