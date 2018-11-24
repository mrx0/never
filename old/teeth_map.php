<?php

//teeth_map.php
//Зубная карта
//Нигде не использую, удаляю 2018-08-31

	require_once 'header.php';

	if (empty($_SESSION['login']) || empty($_SESSION['id'])){
		header("location: enter.php");
	}else{
		include_once 'DBWork.php';
		//$offices = SelDataFromDB('spr_filials', '', '');
		
		echo '
			<header style="margin-bottom: 5px;">
				<h1>Зубная карта</h1>';
			echo '
			</header>
		

				<div id="data">
					
<img src="../img/teeth_map.png" border="0" usemap="#teeth_map" alt="teeth_map" class="teeth_map" />
	<map name="teeth_map" id="teeth_map">
		<area shape="poly" href="/#0" coords="587,126,588,129,587,134,586,138,588,137,590,136,591,132,593,129,594,125,594,122,590,122,586,122">
		<area shape="poly" href="/#1" coords="576,128,577,133,578,135,579,137,580,137,581,137,582,135,583,133,584,128,584,122,580,122,576,122">
		<area shape="poly" href="/#2" coords="567,125,567,129,569,132,570,136,572,137,574,138,573,134,572,129,573,126,574,122,570,122,566,122">
		<area shape="poly" href="/#3" coords="546,126,547,129,546,134,545,138,547,137,549,136,550,132,552,129,553,125,553,122,549,122,545,122">
		<area shape="poly" href="/#4" coords="536,125,536,129,538,132,539,136,541,137,543,138,542,134,541,129,542,126,543,122,539,122,535,122">
		<area shape="poly" href="/#5" coords="510,126,511,129,510,134,509,138,511,137,513,136,514,132,516,129,517,125,517,122,513,122,509,122">
		<area shape="poly" href="/#6" coords="500,125,500,129,502,132,503,136,505,137,507,138,506,134,505,129,506,126,507,122,503,122,499,122">
		<area shape="poly" href="/#7" coords="468,128,469,133,470,135,471,137,472,137,473,137,474,135,475,133,476,128,476,122,472,122,468,122">
		<area shape="poly" href="/#8" coords="432,128,433,133,434,135,435,137,436,137,437,137,438,135,439,133,440,128,440,122,436,122,432,122">
		<area shape="poly" href="/#9" coords="396,128,397,133,398,135,399,137,400,137,401,137,402,135,403,133,404,128,404,122,400,122,396,122">
		<area shape="poly" href="/#10" coords="360,128,361,133,362,135,363,137,364,137,365,137,366,135,367,133,368,128,368,122,364,122,360,122">
		<area shape="poly" href="/#11" coords="324,128,325,133,326,135,327,137,328,137,329,137,330,135,331,133,332,128,332,122,328,122,324,122">
		<area shape="poly" href="/#12" coords="265,128,266,133,267,135,268,137,269,137,270,137,271,135,272,133,273,128,273,122,269,122,265,122">
		<area shape="poly" href="/#13" coords="229,128,230,133,231,135,232,137,233,137,234,137,235,135,236,133,237,128,237,122,233,122,229,122">
		<area shape="poly" href="/#14" coords="193,128,194,133,195,135,196,137,197,137,198,137,199,135,200,133,201,128,201,122,197,122,193,122">
		<area shape="poly" href="/#15" coords="157,128,158,133,159,135,160,137,161,137,162,137,163,135,164,133,165,128,165,122,161,122,157,122">
		<area shape="poly" href="/#16" coords="121,128,122,133,123,135,124,137,125,137,126,137,127,135,128,133,129,128,129,122,125,122,121,122">
		<area shape="poly" href="/#17" coords="91,126,92,129,91,134,90,138,92,137,94,136,95,132,97,129,98,125,98,122,94,122,90,122">
		<area shape="poly" href="/#18" coords="81,125,81,129,83,132,84,136,86,137,88,138,87,134,86,129,87,126,88,122,84,122,80,122">
		<area shape="poly" href="/#19" coords="55,126,56,129,55,134,54,138,56,137,58,136,59,132,61,129,62,125,62,122,58,122,54,122">
		<area shape="poly" href="/#20" coords="45,125,45,129,47,132,48,136,50,137,52,138,51,134,50,129,51,126,52,122,48,122,44,122">
		<area shape="poly" href="/#21" coords="24,126,25,129,24,134,23,138,25,137,27,136,28,132,30,129,31,125,31,122,27,122,23,122">
		<area shape="poly" href="/#22" coords="13,128,14,133,15,135,16,137,17,137,18,137,19,135,20,133,21,128,21,122,17,122,13,122">
		<area shape="poly" href="/#23" coords="4,125,4,129,6,132,7,136,9,137,11,138,10,134,9,129,10,126,11,122,7,122,3,122">
		<area shape="poly" href="/#24" coords="571,111,569,114,570,115,572,116,575,117,579,118,580,118,581,118,584,117,588,116,589,115,591,114,588,111,585,108,582,110,579,111,577,110,574,108">
		<area shape="poly" href="/#25" coords="535,111,533,114,534,115,536,116,539,117,543,118,544,118,545,118,548,117,552,116,553,115,555,114,552,111,549,108,546,110,543,111,541,110,538,108">
		<area shape="poly" href="/#26" coords="499,111,497,114,498,115,500,116,503,117,507,118,508,118,509,118,512,117,516,116,517,115,519,114,516,111,513,108,510,110,507,111,505,110,502,108">
		<area shape="poly" href="/#27" coords="464,111,462,114,463,115,465,116,468,117,472,118,473,118,474,118,477,117,481,116,482,115,484,114,481,111,478,108,475,110,472,111,470,110,467,108">
		<area shape="poly" href="/#28" coords="428,111,426,114,427,115,429,116,432,117,436,118,437,118,438,118,441,117,445,116,446,115,448,114,445,111,442,108,439,110,436,111,434,110,431,108">
		<area shape="poly" href="/#29" coords="391,111,389,114,390,115,392,116,395,117,399,118,400,118,401,118,404,117,408,116,409,115,411,114,408,111,405,108,402,110,399,111,397,110,394,108">
		<area shape="poly" href="/#30" coords="355,111,353,114,354,115,356,116,359,117,363,118,364,118,365,118,368,117,372,116,373,115,375,114,372,111,369,108,366,110,363,111,361,110,358,108">
		<area shape="poly" href="/#31" coords="319,111,317,114,318,115,320,116,323,117,327,118,328,118,329,118,332,117,336,116,337,115,339,114,336,111,333,108,330,110,327,111,325,110,322,108">
		<area shape="poly" href="/#32" coords="261,111,259,114,260,115,262,116,265,117,269,118,270,118,271,118,274,117,278,116,279,115,281,114,278,111,275,108,272,110,269,111,267,110,264,108">
		<area shape="poly" href="/#33" coords="225,111,223,114,224,115,226,116,229,117,233,118,234,118,235,118,238,117,242,116,243,115,245,114,242,111,239,108,236,110,233,111,231,110,228,108">
		<area shape="poly" href="/#34" coords="189,111,187,114,188,115,190,116,193,117,197,118,198,118,199,118,202,117,206,116,207,115,209,114,206,111,203,108,200,110,197,111,195,110,192,108">
		<area shape="poly" href="/#35" coords="152,111,150,114,151,115,153,116,156,117,160,118,161,118,162,118,165,117,169,116,170,115,172,114,169,111,166,108,163,110,160,111,158,110,155,108">
		<area shape="poly" href="/#36" coords="116,111,114,114,115,115,117,116,120,117,124,118,125,118,126,118,129,117,133,116,134,115,136,114,133,111,130,108,127,110,124,111,122,110,119,108">
		<area shape="poly" href="/#37" coords="81,111,79,114,80,115,82,116,85,117,89,118,90,118,91,118,94,117,98,116,99,115,101,114,98,111,95,108,92,110,89,111,87,110,84,108">
		<area shape="poly" href="/#38" coords="45,111,43,114,44,115,46,116,49,117,53,118,54,118,55,118,58,117,62,116,63,115,65,114,62,111,59,108,56,110,53,111,51,110,48,108">
		<area shape="poly" href="/#39" coords="9,111,7,114,8,115,10,116,13,117,17,118,18,118,19,118,22,117,26,116,27,115,29,114,26,111,23,108,20,110,17,111,15,110,12,108">
		<area shape="poly" href="/#40" coords="580,103,580,110,582,109,585,107,586,105,588,102,585,99,583,97,582,96,580,96">
		<area shape="poly" href="/#41" coords="575,98,573,100,573,103,573,106,575,107,577,109,578,109,579,110,579,103,579,96,578,96,576,96">
		<area shape="poly" href="/#42" coords="544,103,544,110,546,109,549,107,550,105,552,102,549,99,547,97,546,96,544,96">
		<area shape="poly" href="/#43" coords="539,98,537,100,537,103,537,106,539,107,541,109,542,109,543,110,543,103,543,96,542,96,540,96">
		<area shape="poly" href="/#44" coords="508,103,508,110,510,109,513,107,514,105,516,102,513,99,511,97,510,96,508,96">
		<area shape="poly" href="/#45" coords="503,98,501,100,501,103,501,106,503,107,505,109,506,109,507,110,507,103,507,96,506,96,504,96">
		<area shape="poly" href="/#46" coords="473,103,473,110,475,109,478,107,479,105,481,102,478,99,476,97,475,96,473,96">
		<area shape="poly" href="/#47" coords="468,98,466,100,466,103,466,106,468,107,470,109,471,109,472,110,472,103,472,96,471,96,469,96">
		<area shape="poly" href="/#48" coords="437,103,437,110,439,109,442,107,443,105,445,102,442,99,440,97,439,96,437,96">
		<area shape="poly" href="/#49" coords="432,98,430,100,430,103,430,106,432,107,434,109,435,109,436,110,436,103,436,96,435,96,433,96">
		<area shape="poly" href="/#50" coords="395,98,393,100,393,103,394,106,396,108,399,111,402,109,405,108,406,105,408,102,405,99,403,97,400,96,396,96">
		<area shape="poly" href="/#51" coords="359,98,357,100,357,103,358,106,360,108,363,111,366,109,369,108,370,105,372,102,369,99,367,97,364,96,360,96">
		<area shape="poly" href="/#52" coords="323,98,321,100,321,103,322,106,324,108,327,111,330,109,333,108,334,105,336,102,333,99,331,97,328,96,324,96">
		<area shape="poly" href="/#53" coords="264,99,262,101,262,103,262,104,265,107,268,110,269,110,271,110,273,108,276,106,276,103,276,99,274,98,272,96,269,96,266,96">
		<area shape="poly" href="/#54" coords="228,99,226,101,226,103,226,104,229,107,232,110,233,110,235,110,237,108,240,106,240,103,240,99,238,98,236,96,233,96,230,96">
		<area shape="poly" href="/#55" coords="192,99,190,101,190,103,190,104,193,107,196,110,197,110,199,110,201,108,204,106,204,103,204,99,202,98,200,96,197,96,194,96">
		<area shape="poly" href="/#56" coords="161,103,161,110,162,109,164,109,165,107,167,106,167,103,167,99,165,98,163,96,162,96,161,96">
		<area shape="poly" href="/#57" coords="155,99,153,101,153,102,153,104,155,106,156,108,158,109,160,110,160,103,160,96,159,96,157,96">
		<area shape="poly" href="/#58" coords="125,103,125,110,126,109,128,109,129,107,131,106,131,103,131,99,129,98,127,96,126,96,125,96">
		<area shape="poly" href="/#59" coords="119,99,117,101,117,102,117,104,119,106,120,108,122,109,124,110,124,103,124,96,123,96,121,96">
		<area shape="poly" href="/#60" coords="90,103,90,110,91,109,93,109,94,107,96,106,96,103,96,99,94,98,92,96,91,96,90,96">
		<area shape="poly" href="/#61" coords="84,99,82,101,82,102,82,104,84,106,85,108,87,109,89,110,89,103,89,96,88,96,86,96">
		<area shape="poly" href="/#62" coords="54,103,54,110,55,109,57,109,58,107,60,106,60,103,60,99,58,98,56,96,55,96,54,96">
		<area shape="poly" href="/#63" coords="48,99,46,101,46,102,46,104,48,106,49,108,51,109,53,110,53,103,53,96,52,96,50,96">
		<area shape="poly" href="/#64" coords="18,103,18,110,19,109,21,109,22,107,24,106,24,103,24,99,22,98,20,96,19,96,18,96">
		<area shape="poly" href="/#65" coords="12,99,10,101,10,102,10,104,12,106,13,108,15,109,17,110,17,103,17,96,16,96,14,96">
		<area shape="poly" href="/#66" coords="567,94,566,96,565,99,563,103,566,108,568,113,571,111,574,108,573,107,572,106,572,102,572,99,573,99,574,98,572,95,570,93,568,93,567,93">
		<area shape="poly" href="/#67" coords="531,94,530,96,529,99,527,103,530,108,532,113,535,111,538,108,537,107,536,106,536,102,536,99,537,99,538,98,536,95,534,93,532,93,531,93">
		<area shape="poly" href="/#68" coords="495,94,494,96,493,99,491,103,494,108,496,113,499,111,502,108,501,107,500,106,500,102,500,99,501,99,502,98,500,95,498,93,496,93,495,93">
		<area shape="poly" href="/#69" coords="460,94,459,96,458,99,456,103,459,108,461,113,464,111,467,108,466,107,465,106,465,102,465,99,466,99,467,98,465,95,463,93,461,93,460,93">
		<area shape="poly" href="/#70" coords="424,94,423,96,422,99,420,103,423,108,425,113,428,111,431,108,430,107,429,106,429,102,429,99,430,99,431,98,429,95,427,93,425,93,424,93">
		<area shape="poly" href="/#71" coords="387,94,386,96,385,99,383,103,386,108,388,113,391,111,394,108,393,107,392,106,392,102,392,99,393,99,394,98,392,95,390,93,388,93,387,93">
		<area shape="poly" href="/#72" coords="351,94,350,96,349,99,347,103,350,108,352,113,355,111,358,108,357,107,356,106,356,102,356,99,357,99,358,98,356,95,354,93,352,93,351,93">
		<area shape="poly" href="/#73" coords="315,94,314,96,313,99,311,103,314,108,316,113,319,111,322,108,321,107,320,106,320,102,320,99,321,99,322,98,320,95,318,93,316,93,315,93">
		<area shape="poly" href="/#74" coords="277,95,275,98,276,99,277,99,277,102,277,106,276,107,275,108,278,111,281,113,283,108,286,103,284,99,283,96,282,94,282,93,281,93,279,93">
		<area shape="poly" href="/#75" coords="241,95,239,98,240,99,241,99,241,102,241,106,240,107,239,108,242,111,245,113,247,108,250,103,248,99,247,96,246,94,246,93,245,93,243,93">
		<area shape="poly" href="/#76" coords="205,95,203,98,204,99,205,99,205,102,205,106,204,107,203,108,206,111,209,113,211,108,214,103,212,99,211,96,210,94,210,93,209,93,207,93">
		<area shape="poly" href="/#77" coords="168,95,166,98,167,99,168,99,168,102,168,106,167,107,166,108,169,111,172,113,174,108,177,103,175,99,174,96,173,94,173,93,172,93,170,93">
		<area shape="poly" href="/#78" coords="132,95,130,98,131,99,132,99,132,102,132,106,131,107,130,108,133,111,136,113,138,108,141,103,139,99,138,96,137,94,137,93,136,93,134,93">
		<area shape="poly" href="/#79" coords="97,95,95,98,96,99,97,99,97,102,97,106,96,107,95,108,98,111,101,113,103,108,106,103,104,99,103,96,102,94,102,93,101,93,99,93">
		<area shape="poly" href="/#80" coords="61,95,59,98,60,99,61,99,61,102,61,106,60,107,59,108,62,111,65,113,67,108,70,103,68,99,67,96,66,94,66,93,65,93,63,93">
		<area shape="poly" href="/#81" coords="25,95,23,98,24,99,25,99,25,102,25,106,24,107,23,108,26,111,29,113,31,108,34,103,32,99,31,96,30,94,30,93,29,93,27,93">
		<area shape="poly" href="/#82" coords="588,95,585,97,587,100,588,103,587,105,585,108,588,111,591,114,592,112,593,111,594,107,595,103,595,100,594,98,593,95,592,92,591,92,591,92">
		<area shape="poly" href="/#83" coords="552,95,549,97,551,100,552,103,551,105,549,108,552,111,555,114,556,112,557,111,558,107,559,103,559,100,558,98,557,95,556,92,555,92,555,92">
		<area shape="poly" href="/#84" coords="516,95,513,97,515,100,516,103,515,105,513,108,516,111,519,114,520,112,521,111,522,107,523,103,523,100,522,98,521,95,520,92,519,92,519,92">
		<area shape="poly" href="/#85" coords="481,95,478,97,480,100,481,103,480,105,478,108,481,111,484,114,485,112,486,111,487,107,488,103,488,100,487,98,486,95,485,92,484,92,484,92">
		<area shape="poly" href="/#86" coords="445,95,442,97,444,100,445,103,444,105,442,108,445,111,448,114,449,112,450,111,451,107,452,103,452,100,451,98,450,95,449,92,448,92,448,92">
		<area shape="poly" href="/#87" coords="408,95,405,97,407,100,408,103,407,105,405,108,408,111,411,114,412,112,413,111,414,107,415,103,415,100,414,98,413,95,412,92,411,92,411,92">
		<area shape="poly" href="/#88" coords="372,95,369,97,371,100,372,103,371,105,369,108,372,111,375,114,376,112,377,111,378,107,379,103,379,100,378,98,377,95,376,92,375,92,375,92">
		<area shape="poly" href="/#89" coords="336,95,333,97,335,100,336,103,335,105,333,108,336,111,339,114,340,112,341,111,342,107,343,103,343,100,342,98,341,95,340,92,339,92,339,92">
		<area shape="poly" href="/#90" coords="256,95,255,98,255,100,254,103,255,107,256,111,257,112,258,114,261,111,264,108,262,105,261,102,262,100,264,97,261,95,258,92,258,92,257,92">
		<area shape="poly" href="/#91" coords="220,95,219,98,219,100,218,103,219,107,220,111,221,112,222,114,225,111,228,108,226,105,225,102,226,100,228,97,225,95,222,92,222,92,221,92">
		<area shape="poly" href="/#92" coords="184,95,183,98,183,100,182,103,183,107,184,111,185,112,186,114,189,111,192,108,190,105,189,102,190,100,192,97,189,95,186,92,186,92,185,92">
		<area shape="poly" href="/#93" coords="147,95,146,98,146,100,145,103,146,107,147,111,148,112,149,114,152,111,155,108,153,105,152,102,153,100,155,97,152,95,149,92,149,92,148,92">
		<area shape="poly" href="/#94" coords="111,95,110,98,110,100,109,103,110,107,111,111,112,112,113,114,116,111,119,108,117,105,116,102,117,100,119,97,116,95,113,92,113,92,112,92">
		<area shape="poly" href="/#95" coords="76,95,75,98,75,100,74,103,75,107,76,111,77,112,78,114,81,111,84,108,82,105,81,102,82,100,84,97,81,95,78,92,78,92,77,92">
		<area shape="poly" href="/#96" coords="40,95,39,98,39,100,38,103,39,107,40,111,41,112,42,114,45,111,48,108,46,105,45,102,46,100,48,97,45,95,42,92,42,92,41,92">
		<area shape="poly" href="/#97" coords="4,95,3,98,3,100,2,103,3,107,4,111,5,112,6,114,9,111,12,108,10,105,9,102,10,100,12,97,9,95,6,92,6,92,5,92">
		<area shape="poly" href="/#98" coords="574,89,569,91,572,94,574,97,575,96,576,95,580,95,583,95,584,96,585,97,587,94,590,91,587,90,584,88,582,87,579,86">
		<area shape="poly" href="/#99" coords="538,89,533,91,536,94,538,97,539,96,540,95,544,95,547,95,548,96,549,97,551,94,554,91,551,90,548,88,546,87,543,86">
		<area shape="poly" href="/#100" coords="502,89,497,91,500,94,502,97,503,96,504,95,508,95,511,95,512,96,513,97,515,94,518,91,515,90,512,88,510,87,507,86">
		<area shape="poly" href="/#101" coords="467,89,462,91,465,94,467,97,468,96,469,95,473,95,476,95,477,96,478,97,480,94,483,91,480,90,477,88,475,87,472,86">
		<area shape="poly" href="/#102" coords="431,89,426,91,429,94,431,97,432,96,433,95,437,95,440,95,441,96,442,97,444,94,447,91,444,90,441,88,439,87,436,86">
		<area shape="poly" href="/#103" coords="394,89,389,91,392,94,394,97,395,96,396,95,400,95,403,95,404,96,405,97,407,94,410,91,407,90,404,88,402,87,399,86">
		<area shape="poly" href="/#104" coords="358,89,353,91,356,94,358,97,359,96,360,95,364,95,367,95,368,96,369,97,371,94,374,91,371,90,368,88,366,87,363,86">
		<area shape="poly" href="/#105" coords="322,89,317,91,320,94,322,97,323,96,324,95,328,95,331,95,332,96,333,97,335,94,338,91,335,90,332,88,330,87,327,86">
		<area shape="poly" href="/#106" coords="264,89,259,91,262,94,264,97,265,96,266,95,270,95,273,95,274,96,275,97,277,94,280,91,277,90,274,88,272,87,269,86">
		<area shape="poly" href="/#107" coords="228,89,223,91,226,94,228,97,229,96,230,95,234,95,237,95,238,96,239,97,241,94,244,91,241,90,238,88,236,87,233,86">
		<area shape="poly" href="/#108" coords="192,89,187,91,190,94,192,97,193,96,194,95,198,95,201,95,202,96,203,97,205,94,208,91,205,90,202,88,200,87,197,86">
		<area shape="poly" href="/#109" coords="155,89,150,91,153,94,155,97,156,96,157,95,161,95,164,95,165,96,166,97,168,94,171,91,168,90,165,88,163,87,160,86">
		<area shape="poly" href="/#110" coords="119,89,114,91,117,94,119,97,120,96,121,95,125,95,128,95,129,96,130,97,132,94,135,91,132,90,129,88,127,87,124,86">
		<area shape="poly" href="/#111" coords="84,89,79,91,82,94,84,97,85,96,86,95,90,95,93,95,94,96,95,97,97,94,100,91,97,90,94,88,92,87,89,86">
		<area shape="poly" href="/#112" coords="48,89,43,91,46,94,48,97,49,96,50,95,54,95,57,95,58,96,59,97,61,94,64,91,61,90,58,88,56,87,53,86">
		<area shape="poly" href="/#113" coords="12,89,7,91,10,94,12,97,13,96,14,95,18,95,21,95,22,96,23,97,25,94,28,91,25,90,22,88,20,87,17,86">
		<area shape="poly" href="/#114" coords="571,47,568,50,571,51,574,53,576,54,579,55,584,52,589,50,587,47,584,44,583,45,582,46,579,46,575,46,574,45,573,44">
		<area shape="poly" href="/#115" coords="535,47,532,50,535,51,538,53,540,54,543,55,548,52,553,50,551,47,548,44,547,45,546,46,543,46,539,46,538,45,537,44">
		<area shape="poly" href="/#116" coords="499,47,496,50,499,51,502,53,504,54,507,55,512,52,517,50,515,47,512,44,511,45,510,46,507,46,503,46,502,45,501,44">
		<area shape="poly" href="/#117" coords="463,47,460,50,463,51,466,53,468,54,471,55,476,52,481,50,479,47,476,44,475,45,474,46,471,46,467,46,466,45,465,44">
		<area shape="poly" href="/#118" coords="427,47,424,50,427,51,430,53,432,54,435,55,440,52,445,50,443,47,440,44,439,45,438,46,435,46,431,46,430,45,429,44">
		<area shape="poly" href="/#119" coords="391,47,388,50,391,51,394,53,396,54,399,55,404,52,409,50,407,47,404,44,403,45,402,46,399,46,395,46,394,45,393,44">
		<area shape="poly" href="/#120" coords="355,47,352,50,355,51,358,53,360,54,363,55,368,52,373,50,371,47,368,44,367,45,366,46,363,46,359,46,358,45,357,44">
		<area shape="poly" href="/#121" coords="319,47,316,50,319,51,322,53,324,54,327,55,332,52,337,50,335,47,332,44,331,45,330,46,327,46,323,46,322,45,321,44">
		<area shape="poly" href="/#122" coords="263,47,260,50,263,51,266,53,268,54,271,55,276,52,281,50,279,47,276,44,275,45,274,46,271,46,267,46,266,45,265,44">
		<area shape="poly" href="/#123" coords="227,47,224,50,227,51,230,53,232,54,235,55,240,52,245,50,243,47,240,44,239,45,238,46,235,46,231,46,230,45,229,44">
		<area shape="poly" href="/#124" coords="191,47,188,50,191,51,194,53,196,54,199,55,204,52,209,50,207,47,204,44,203,45,202,46,199,46,195,46,194,45,193,44">
		<area shape="poly" href="/#125" coords="155,47,152,50,155,51,158,53,160,54,163,55,168,52,173,50,171,47,168,44,167,45,166,46,163,46,159,46,158,45,157,44">
		<area shape="poly" href="/#126" coords="119,47,116,50,119,51,122,53,124,54,127,55,132,52,137,50,135,47,132,44,131,45,130,46,127,46,123,46,122,45,121,44">
		<area shape="poly" href="/#127" coords="83,47,80,50,83,51,86,53,88,54,91,55,96,52,101,50,99,47,96,44,95,45,94,46,91,46,87,46,86,45,85,44">
		<area shape="poly" href="/#128" coords="47,47,44,50,47,51,50,53,52,54,55,55,60,52,65,50,63,47,60,44,59,45,58,46,55,46,51,46,50,45,49,44">
		<area shape="poly" href="/#129" coords="11,47,8,50,11,51,14,53,16,54,19,55,24,52,29,50,27,47,24,44,23,45,22,46,19,46,15,46,14,45,13,44">
		<area shape="poly" href="/#130" coords="579,38,579,45,580,45,582,45,583,43,585,41,585,38,585,35,583,34,582,32,580,32,579,31">
		<area shape="poly" href="/#131" coords="574,34,571,37,571,38,571,40,573,42,575,45,577,45,578,45,578,38,578,31,577,31,577,31">
		<area shape="poly" href="/#132" coords="543,38,543,45,544,45,546,45,547,43,549,41,549,38,549,35,547,34,546,32,544,32,543,31">
		<area shape="poly" href="/#133" coords="538,34,535,37,535,38,535,40,537,42,539,45,541,45,542,45,542,38,542,31,541,31,541,31">
		<area shape="poly" href="/#134" coords="507,38,507,45,508,45,510,45,511,43,513,41,513,38,513,35,511,34,510,32,508,32,507,31">
		<area shape="poly" href="/#135" coords="502,34,499,37,499,38,499,40,501,42,503,45,505,45,506,45,506,38,506,31,505,31,505,31">
		<area shape="poly" href="/#136" coords="471,38,471,45,472,45,474,45,475,43,477,41,477,38,477,35,475,34,474,32,472,32,471,31">
		<area shape="poly" href="/#137" coords="466,34,463,37,463,38,463,40,465,42,467,45,469,45,470,45,470,38,470,31,469,31,469,31">
		<area shape="poly" href="/#138" coords="435,38,435,45,436,45,438,45,439,43,441,41,441,38,441,35,439,34,438,32,436,32,435,31">
		<area shape="poly" href="/#139" coords="430,34,427,37,427,38,427,40,429,42,431,45,433,45,434,45,434,38,434,31,433,31,433,31">
		<area shape="poly" href="/#140" coords="394,34,391,37,391,38,391,40,393,42,395,45,398,45,402,45,403,43,405,41,405,38,405,35,402,33,400,31,398,31,397,31">
		<area shape="poly" href="/#141" coords="358,34,355,37,355,38,355,40,357,42,359,45,362,45,366,45,367,43,369,41,369,38,369,35,366,33,364,31,362,31,361,31">
		<area shape="poly" href="/#142" coords="322,34,319,37,319,38,319,40,321,42,323,45,326,45,330,45,331,43,333,41,333,38,333,35,330,33,328,31,326,31,325,31">
		<area shape="poly" href="/#143" coords="266,34,263,37,263,38,263,40,265,42,267,45,270,45,274,45,275,43,277,41,277,38,277,35,274,33,272,31,270,31,269,31">
		<area shape="poly" href="/#144" coords="230,34,227,37,227,38,227,40,229,42,231,45,234,45,238,45,239,43,241,41,241,38,241,35,238,33,236,31,234,31,233,31">
		<area shape="poly" href="/#145" coords="194,34,191,37,191,38,191,40,193,42,195,45,198,45,202,45,203,43,205,41,205,38,205,35,202,33,200,31,198,31,197,31">
		<area shape="poly" href="/#146" coords="163,38,163,45,164,45,166,45,167,43,169,41,169,38,169,35,167,34,166,32,164,32,163,31">
		<area shape="poly" href="/#147" coords="158,34,155,37,155,38,155,40,157,42,159,45,161,45,162,45,162,38,162,31,161,31,161,31">
		<area shape="poly" href="/#148" coords="127,38,127,45,128,45,130,45,131,43,133,41,133,38,133,35,131,34,130,32,128,32,127,31">
		<area shape="poly" href="/#149" coords="122,34,119,37,119,38,119,40,121,42,123,45,125,45,126,45,126,38,126,31,125,31,125,31">
		<area shape="poly" href="/#150" coords="91,38,91,45,92,45,94,45,95,43,97,41,97,38,97,35,95,34,94,32,92,32,91,31">
		<area shape="poly" href="/#151" coords="86,34,83,37,83,38,83,40,85,42,87,45,89,45,90,45,90,38,90,31,89,31,89,31">
		<area shape="poly" href="/#152" coords="55,38,55,45,56,45,58,45,59,43,61,41,61,38,61,35,59,34,58,32,56,32,55,31">
		<area shape="poly" href="/#153" coords="50,34,47,37,47,38,47,40,49,42,51,45,53,45,54,45,54,38,54,31,53,31,53,31">
		<area shape="poly" href="/#154" coords="19,38,19,45,20,45,22,45,23,43,25,41,25,38,25,35,23,34,22,32,20,32,19,31">
		<area shape="poly" href="/#155" coords="14,34,11,37,11,38,11,40,13,42,15,45,17,45,18,45,18,38,18,31,17,31,17,31">
		<area shape="poly" href="/#156" coords="587,31,584,34,585,34,586,35,586,39,586,42,585,43,584,43,586,46,588,48,590,48,591,48,591,47,592,46,593,42,595,38,593,33,590,28,590,28,589,28">
		<area shape="poly" href="/#157" coords="565,31,564,34,564,36,563,39,564,43,565,47,566,48,567,50,570,47,573,44,571,41,570,38,571,36,573,33,570,31,567,28,567,28,566,28">
		<area shape="poly" href="/#158" coords="551,31,548,34,549,34,550,35,550,39,550,42,549,43,548,43,550,46,552,48,554,48,555,48,555,47,556,46,557,42,559,38,557,33,554,28,554,28,553,28">
		<area shape="poly" href="/#159" coords="529,31,528,34,528,36,527,39,528,43,529,47,530,48,531,50,534,47,537,44,535,41,534,38,535,36,537,33,534,31,531,28,531,28,530,28">
		<area shape="poly" href="/#160" coords="515,31,512,34,513,34,514,35,514,39,514,42,513,43,512,43,514,46,516,48,518,48,519,48,519,47,520,46,521,42,523,38,521,33,518,28,518,28,517,28">
		<area shape="poly" href="/#161" coords="493,31,492,34,492,36,491,39,492,43,493,47,494,48,495,50,498,47,501,44,499,41,498,38,499,36,501,33,498,31,495,28,495,28,494,28">
		<area shape="poly" href="/#162" coords="479,31,476,34,477,34,478,35,478,39,478,42,477,43,476,43,478,46,480,48,482,48,483,48,483,47,484,46,485,42,487,38,485,33,482,28,482,28,481,28">
		<area shape="poly" href="/#163" coords="457,31,456,34,456,36,455,39,456,43,457,47,458,48,459,50,462,47,465,44,463,41,462,38,463,36,465,33,462,31,459,28,459,28,458,28">
		<area shape="poly" href="/#164" coords="443,31,440,34,441,34,442,35,442,39,442,42,441,43,440,43,442,46,444,48,446,48,447,48,447,47,448,46,449,42,451,38,449,33,446,28,446,28,445,28">
		<area shape="poly" href="/#165" coords="421,31,420,34,420,36,419,39,420,43,421,47,422,48,423,50,426,47,429,44,427,41,426,38,427,36,429,33,426,31,423,28,423,28,422,28">
		<area shape="poly" href="/#166" coords="407,31,404,34,405,34,406,35,406,39,406,42,405,43,404,43,406,46,408,48,410,48,411,48,411,47,412,46,413,42,415,38,413,33,410,28,410,28,409,28">
		<area shape="poly" href="/#167" coords="385,31,384,34,384,36,383,39,384,43,385,47,386,48,387,50,390,47,393,44,391,41,390,38,391,36,393,33,390,31,387,28,387,28,386,28">
		<area shape="poly" href="/#168" coords="371,31,368,34,369,34,370,35,370,39,370,42,369,43,368,43,370,46,372,48,374,48,375,48,375,47,376,46,377,42,379,38,377,33,374,28,374,28,373,28">
		<area shape="poly" href="/#169" coords="349,31,348,34,348,36,347,39,348,43,349,47,350,48,351,50,354,47,357,44,355,41,354,38,355,36,357,33,354,31,351,28,351,28,350,28">
		<area shape="poly" href="/#170" coords="335,31,332,34,333,34,334,35,334,39,334,42,333,43,332,43,334,46,336,48,338,48,339,48,339,47,340,46,341,42,343,38,341,33,338,28,338,28,337,28">
		<area shape="poly" href="/#171" coords="313,31,312,34,312,36,311,39,312,43,313,47,314,48,315,50,318,47,321,44,319,41,318,38,319,36,321,33,318,31,315,28,315,28,314,28">
		<area shape="poly" href="/#172" coords="279,31,276,34,277,34,278,35,278,39,278,42,277,43,276,43,278,46,280,48,282,48,283,48,283,47,284,46,285,42,287,38,285,33,282,28,282,28,281,28">
		<area shape="poly" href="/#173" coords="257,31,256,34,256,36,255,39,256,43,257,47,258,48,259,50,262,47,265,44,263,41,262,38,263,36,265,33,262,31,259,28,259,28,258,28">
		<area shape="poly" href="/#174" coords="243,31,240,34,241,34,242,35,242,39,242,42,241,43,240,43,242,46,244,48,246,48,247,48,247,47,248,46,249,42,251,38,249,33,246,28,246,28,245,28">
		<area shape="poly" href="/#175" coords="221,31,220,34,220,36,219,39,220,43,221,47,222,48,223,50,226,47,229,44,227,41,226,38,227,36,229,33,226,31,223,28,223,28,222,28">
		<area shape="poly" href="/#176" coords="207,31,204,34,205,34,206,35,206,39,206,42,205,43,204,43,206,46,208,48,210,48,211,48,211,47,212,46,213,42,215,38,213,33,210,28,210,28,209,28">
		<area shape="poly" href="/#177" coords="185,31,184,34,184,36,183,39,184,43,185,47,186,48,187,50,190,47,193,44,191,41,190,38,191,36,193,33,190,31,187,28,187,28,186,28">
		<area shape="poly" href="/#178" coords="171,31,168,34,169,34,170,35,170,39,170,42,169,43,168,43,170,46,172,48,174,48,175,48,175,47,176,46,177,42,179,38,177,33,174,28,174,28,173,28">
		<area shape="poly" href="/#179" coords="149,31,148,34,148,36,147,39,148,43,149,47,150,48,151,50,154,47,157,44,155,41,154,38,155,36,157,33,154,31,151,28,151,28,150,28">
		<area shape="poly" href="/#180" coords="135,31,132,34,133,34,134,35,134,39,134,42,133,43,132,43,134,46,136,48,138,48,139,48,139,47,140,46,141,42,143,38,141,33,138,28,138,28,137,28">
		<area shape="poly" href="/#181" coords="113,31,112,34,112,36,111,39,112,43,113,47,114,48,115,50,118,47,121,44,119,41,118,38,119,36,121,33,118,31,115,28,115,28,114,28">
		<area shape="poly" href="/#182" coords="99,31,96,34,97,34,98,35,98,39,98,42,97,43,96,43,98,46,100,48,102,48,103,48,103,47,104,46,105,42,107,38,105,33,102,28,102,28,101,28">
		<area shape="poly" href="/#183" coords="77,31,76,34,76,36,75,39,76,43,77,47,78,48,79,50,82,47,85,44,83,41,82,38,83,36,85,33,82,31,79,28,79,28,78,28">
		<area shape="poly" href="/#184" coords="63,31,60,34,61,34,62,35,62,39,62,42,61,43,60,43,62,46,64,48,66,48,67,48,67,47,68,46,69,42,71,38,69,33,66,28,66,28,65,28">
		<area shape="poly" href="/#185" coords="41,31,40,34,40,36,39,39,40,43,41,47,42,48,43,50,46,47,49,44,47,41,46,38,47,36,49,33,46,31,43,28,43,28,42,28">
		<area shape="poly" href="/#186" coords="27,31,24,34,25,34,26,35,26,39,26,42,25,43,24,43,26,46,28,48,30,48,31,48,31,47,32,46,33,42,35,38,33,33,30,28,30,28,29,28">
		<area shape="poly" href="/#187" coords="5,31,4,34,4,36,3,39,4,43,5,47,6,48,7,50,10,47,13,44,11,41,10,38,11,36,13,33,10,31,7,28,7,28,6,28">
		<area shape="poly" href="/#188" coords="573,25,569,26,568,26,568,27,570,30,573,33,576,31,579,30,581,31,584,33,587,30,590,27,588,26,587,25,583,24,580,23,578,23,577,23">
		<area shape="poly" href="/#189" coords="537,25,533,26,532,26,532,27,534,30,537,33,540,31,543,30,545,31,548,33,551,30,554,27,552,26,551,25,547,24,544,23,542,23,541,23">
		<area shape="poly" href="/#190" coords="501,25,497,26,496,26,496,27,498,30,501,33,504,31,507,30,509,31,512,33,515,30,518,27,516,26,515,25,511,24,508,23,506,23,505,23">
		<area shape="poly" href="/#191" coords="465,25,461,26,460,26,460,27,462,30,465,33,468,31,471,30,473,31,476,33,479,30,482,27,480,26,479,25,475,24,472,23,470,23,469,23">
		<area shape="poly" href="/#192" coords="429,25,425,26,424,26,424,27,426,30,429,33,432,31,435,30,437,31,440,33,443,30,446,27,444,26,443,25,439,24,436,23,434,23,433,23">
		<area shape="poly" href="/#193" coords="393,25,389,26,388,26,388,27,390,30,393,33,396,31,399,30,401,31,404,33,407,30,410,27,408,26,407,25,403,24,400,23,398,23,397,23">
		<area shape="poly" href="/#194" coords="357,25,353,26,352,26,352,27,354,30,357,33,360,31,363,30,365,31,368,33,371,30,374,27,372,26,371,25,367,24,364,23,362,23,361,23">
		<area shape="poly" href="/#195" coords="321,25,317,26,316,26,316,27,318,30,321,33,324,31,327,30,329,31,332,33,335,30,338,27,336,26,335,25,331,24,328,23,326,23,325,23">
		<area shape="poly" href="/#196" coords="265,25,261,26,260,26,260,27,262,30,265,33,268,31,271,30,273,31,276,33,279,30,282,27,280,26,279,25,275,24,272,23,270,23,269,23">
		<area shape="poly" href="/#197" coords="229,25,225,26,224,26,224,27,226,30,229,33,232,31,235,30,237,31,240,33,243,30,246,27,244,26,243,25,239,24,236,23,234,23,233,23">
		<area shape="poly" href="/#198" coords="193,25,189,26,188,26,188,27,190,30,193,33,196,31,199,30,201,31,204,33,207,30,210,27,208,26,207,25,203,24,200,23,198,23,197,23">
		<area shape="poly" href="/#199" coords="157,25,153,26,152,26,152,27,154,30,157,33,160,31,163,30,165,31,168,33,171,30,174,27,172,26,171,25,167,24,164,23,162,23,161,23">
		<area shape="poly" href="/#200" coords="121,25,117,26,116,26,116,27,118,30,121,33,124,31,127,30,129,31,132,33,135,30,138,27,136,26,135,25,131,24,128,23,126,23,125,23">
		<area shape="poly" href="/#201" coords="85,25,81,26,80,26,80,27,82,30,85,33,88,31,91,30,93,31,96,33,99,30,102,27,100,26,99,25,95,24,92,23,90,23,89,23">
		<area shape="poly" href="/#202" coords="49,25,45,26,44,26,44,27,46,30,49,33,52,31,55,30,57,31,60,33,63,30,66,27,64,26,63,25,59,24,56,23,54,23,53,23">
		<area shape="poly" href="/#203" coords="13,25,9,26,8,26,8,27,10,30,13,33,16,31,19,30,21,31,24,33,27,30,30,27,28,26,27,25,23,24,20,23,18,23,17,23">
		<area shape="poly" href="/#204" coords="576,6,575,8,574,13,574,19,578,19,582,19,582,13,581,8,580,6,579,4,578,4,577,4">
		<area shape="poly" href="/#205" coords="540,6,539,8,538,13,538,19,542,19,546,19,546,13,545,8,544,6,543,4,542,4,541,4">
		<area shape="poly" href="/#206" coords="504,6,503,8,502,13,502,19,506,19,510,19,510,13,509,8,508,6,507,4,506,4,505,4">
		<area shape="poly" href="/#207" coords="396,6,395,8,394,13,394,19,398,19,402,19,402,13,401,8,400,6,399,4,398,4,397,4">
		<area shape="poly" href="/#208" coords="360,6,359,8,358,13,358,19,362,19,366,19,366,13,365,8,364,6,363,4,362,4,361,4">
		<area shape="poly" href="/#209" coords="324,6,323,8,322,13,322,19,326,19,330,19,330,13,329,8,328,6,327,4,326,4,325,4">
		<area shape="poly" href="/#210" coords="268,6,267,8,266,13,266,19,270,19,274,19,274,13,273,8,272,6,271,4,270,4,269,4">
		<area shape="poly" href="/#211" coords="232,6,231,8,230,13,230,19,234,19,238,19,238,13,237,8,236,6,235,4,234,4,233,4">
		<area shape="poly" href="/#212" coords="196,6,195,8,194,13,194,19,198,19,202,19,202,13,201,8,200,6,199,4,198,4,197,4">
		<area shape="poly" href="/#213" coords="88,6,87,8,86,13,86,19,90,19,94,19,94,13,93,8,92,6,91,4,90,4,89,4">
		<area shape="poly" href="/#214" coords="52,6,51,8,50,13,50,19,54,19,58,19,58,13,57,8,56,6,55,4,54,4,53,4">
		<area shape="poly" href="/#215" coords="16,6,15,8,14,13,14,19,18,19,22,19,22,13,21,8,20,6,19,4,18,4,17,4">
		<area shape="poly" href="/#216" coords="585,8,586,12,585,16,584,19,588,19,592,19,592,16,591,13,589,9,588,5,586,4,584,3">
		<area shape="poly" href="/#217" coords="569,5,567,7,566,12,564,17,564,18,564,19,568,19,572,19,571,16,570,12,571,8,572,3,571,3,571,3">
		<area shape="poly" href="/#218" coords="549,8,550,12,549,16,548,19,552,19,556,19,556,16,555,13,553,9,552,5,550,4,548,3">
		<area shape="poly" href="/#219" coords="533,5,531,7,530,12,528,17,528,18,528,19,532,19,536,19,535,16,534,12,535,8,536,3,535,3,535,3">
		<area shape="poly" href="/#220" coords="513,8,514,12,513,16,512,19,516,19,520,19,520,16,519,13,517,9,516,5,514,4,512,3">
		<area shape="poly" href="/#221" coords="497,5,495,7,494,12,492,17,492,18,492,19,496,19,500,19,499,16,498,12,499,8,500,3,499,3,499,3">
		<area shape="poly" href="/#222" coords="472,8,473,12,472,16,471,19,475,19,479,19,479,16,478,13,476,9,475,5,473,4,471,3">
		<area shape="poly" href="/#223" coords="466,5,464,7,463,12,461,17,461,18,461,19,465,19,469,19,468,16,467,12,468,8,469,3,468,3,468,3">
		<area shape="poly" href="/#224" coords="436,8,437,12,436,16,435,19,439,19,443,19,443,16,442,13,440,9,439,5,437,4,435,3">
		<area shape="poly" href="/#225" coords="430,5,428,7,427,12,425,17,425,18,425,19,429,19,433,19,432,16,431,12,432,8,433,3,432,3,432,3">
		<area shape="poly" href="/#226" coords="164,8,165,12,164,16,163,19,167,19,171,19,171,16,170,13,168,9,167,5,165,4,163,3">
		<area shape="poly" href="/#227" coords="158,5,156,7,155,12,153,17,153,18,153,19,157,19,161,19,160,16,159,12,160,8,161,3,160,3,160,3">
		<area shape="poly" href="/#228" coords="128,8,129,12,128,16,127,19,131,19,135,19,135,16,134,13,132,9,131,5,129,4,127,3">
		<area shape="poly" href="/#229" coords="122,5,120,7,119,12,117,17,117,18,117,19,121,19,125,19,124,16,123,12,124,8,125,3,124,3,124,3">
		<area shape="poly" href="/#230" coords="97,8,98,12,97,16,96,19,100,19,104,19,104,16,103,13,101,9,100,5,98,4,96,3">
		<area shape="poly" href="/#231" coords="81,5,79,7,78,12,76,17,76,18,76,19,80,19,84,19,83,16,82,12,83,8,84,3,83,3,83,3">
		<area shape="poly" href="/#232" coords="61,8,62,12,61,16,60,19,64,19,68,19,68,16,67,13,65,9,64,5,62,4,60,3">
		<area shape="poly" href="/#233" coords="45,5,43,7,42,12,40,17,40,18,40,19,44,19,48,19,47,16,46,12,47,8,48,3,47,3,47,3">
		<area shape="poly" href="/#234" coords="25,8,26,12,25,16,24,19,28,19,32,19,32,16,31,13,29,9,28,5,26,4,24,3">
		<area shape="poly" href="/#235" coords="9,5,7,7,6,12,4,17,4,18,4,19,8,19,12,19,11,16,10,12,11,8,12,3,11,3,11,3">
	</map>
					
					
					
					
				</div>';

	}
		
	require_once 'footer.php';

?>