<?php
		include('pg/header.php');
switch ($nav)
{
	case 'live':
		include('pg/results_display.php');
		break;
	case 'results':
		include('pg/live_display.php');
		break;
	case 'table':
		include('pg/table_display.php');
		break;
	case 'top_score':
		include('pg/top_score_display.php');
		break;
	case 'teams':
		include('pg/teams_display.php');
		break;
	case 'competitins':
		include('pg/competitins_display.php');
		break;
	default:
		include('pg/main_display.php');
		break;	
}
		include('pg/footer.php');			
?>
