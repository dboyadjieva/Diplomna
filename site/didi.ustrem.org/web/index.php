<?php
ini_set('session.gc_maxlifetime', 3600);
session_name('DIDIPROJECT');

require_once('includes/setting.php');
require_once('includes/satsClass.php');
require_once('includes/dbClass.php');

$db = new db($settings['db']);
$stat = new stats($settings,$db);

$nav = '';
if(isset($_GET[$settings['nav']]))
{
	$nav = $_GET[$settings['nav']];
}


switch ($nav)
{
	case 'live':
		include('pg/live.php');
		break;
	case 'results':
		include('pg/results.php');
		break;
	case 'table':
		include('pg/table.php');
		break;
	case 'table':
		include('pg/table.php');
		break;
	case 'top_score':
		include('pg/top_score.php');
		break;
	case 'teams':
		include('pg/teams.php');
		break;
	case 'competitins':
		include('pg/competitins.php');
		break;
	default:
		include('pg/main.php');
		break;	
}
include('pg/index_display.php');			
?>