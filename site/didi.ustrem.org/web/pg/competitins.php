<?php
if(isset($_GET['type']) && isset($settings['competitions'][$_GET['type']]))
{
	$all = $db->getCompetitions();
	$title_page_display = 'Competitions  '.$_GET['type'];
	$title_page = 'Competitions';
	$description_page = 'Competitions';
	$key_words_page = 'Competitions';
	
	$step = 1;
}
else 
{
	header('Location: index.php');
}
?>